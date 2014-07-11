<?php
    $this->pageTitle = 'Gallery';
    $this->pageSubTitle = 'Show All Galleries';
    $this->widget(
        'booster.widgets.TbExtendedGridView',
        array(
            'id'=>'GalleryGrid',
            // 'filter' => $model,
            'fixedHeader' => true,
            'type' => 'striped bordered',
            'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $model->search(),
            'template' => "{items}",
            'columns' => array(
                'name',
                'description',
                'main_cover',
                array(
                    'class'=>'booster.widgets.TbButtonColumn'
                )
            ),
        )
    );

    $this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Add New Gallery',
            'context' => 'primary',

            'htmlOptions'=>array(
                'id'=>'openGalleryModalForm',
                'data-toggle' => 'modal',
                'data-target' => '#galleryFormModal',
            )
        )
    );




    // begin modal
    $this->beginWidget(
        'booster.widgets.TbModal',
        array('id'=>'galleryFormModal','options'=>array('width'=>'90%'))
    );
    ?>



    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Modal header</h4>
    </div>

    <div class="modal-body">
        <div class="form">
            <?php
                $form = $this->beginWidget('booster.widgets.TBActiveForm',array(
                    'type'=>'horizontal',
                    'id'=>'galleryForm',
                    'htmlOptions'=>array(
                        'enctype'=>'multipart/form-data',
                    )
                ));

            ?>
            <div class="row">
                <?php echo $form->textFieldGroup($newGallery,'name'); ?>
            </div>
            <div class="row">
                <?php 
                    //echo $form->textFieldGroup($newGallery,'description');
                $this->widget(
                    'booster.widgets.TbCKEditor',
                    array(
                        'model'=>$newGallery,
                        'attribute' => 'description',
                        'editorOptions' => array(
                            // From basic `build-config.js` minus 'undo', 'clipboard' and 'about'
                            'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
                        )
                    )
                );
                ?>
            </div>
            <?php
                $this->endWidget();
            ?>
        </div>
    </div>

    <div class="modal-footer">
        <?php 
            $this->widget(
                'booster.widgets.TbButton',
                array(
                    'buttonType'=>'ajaxButton',
                    'context' => 'primary',
                    'label' => 'Save changes',
                    // 'url' => '#',
                    
                    'htmlOptions'   =>  array(
                        'data-dismiss' => 'modal',
                        'data-toggle'   =>  'modal',
                        'data-target'   =>   '#galleryFormModal',
                    ),
                    'ajaxOptions'=>array(
                        'type'=>'POST',
                        'data'=>'js:{
                            \'Gallery\':
                            {
                                \'name\':jQuery(\'#'.CHtml::activeId($newGallery,'name').'\').val(),
                                \'description\':CKEDITOR.instances.Gallery_description.getData()
                            }
                        }
                        ',
                        'success'=>'js:function(data){
                            console.log(data.saved);
                            jQuery(\'#GalleryGrid\').yiiGridView(\'update\');
                            jQuery(\'form#galleryForm\').clear();
                        }'
                    )

                )
            );
        
            $this->widget(
                'booster.widgets.TbButton',
                array(
                    'label' => 'Close',
                    'url' => '#',
                    'htmlOptions' => array('data-dismiss' => 'modal'),
                )
            );
        ?>
    </div>
    <?php
    $this->endWidget('imageFormModal');
    // end modal
?>