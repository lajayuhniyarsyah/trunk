<?php
    $this->widget(
        'booster.widgets.TbDetailView',
        array(
            'id' => 'product-detail',
            'data' => $model,
            'type'=>'bordered',
            // 'url' => array(),
            'attributes' => array(
                'name',
                array(
                    'name'=>'description',
                    'type'=>'html'
                ),
            )
        )
    );

    $this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Edit Description',
            
            'htmlOptions'=>array(
                'id'=>'openGalleryFormModal',
                'data-toggle' => 'modal',
                'data-target' => '#galleryFormModal',
            )
        )
    );


    $this->widget(
        'booster.widgets.TbGridView',
        array(
            // 'filter' => $imageModel,
            // 'fixedHeader' => true,
            'type' => 'striped bordered',
            // 'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $photos,
            'template' => "{items}",
            'selectionChanged'=>'function(id){
                console.log(jQuery(\'input.chkBoxMainImage:checked\').val());
                jQuery.ajax({
                    url: "'.Yii::app()->createAbsoluteUrl('gallery/setMainImage').'",
                    data: {id : jQuery(\'input.chkBoxMainImage:selected\').val() },
                    type: "POST",
                    success: function(data){
                        if(data.execRow != 0){
                            alert("Main Cover Has Been Set !");
                        }else{
                            alert("Nothing to set");
                        }
                    },
                    error: function(data){
                        alert("Error");
                    }
                });
            }',
            'columns' => array(
                array(
                    'class' => 'booster.widgets.tbEditableColumn',
                    'name'=>'caption',
                    'editable'=>array(
                        'placement'=>'right',
                    ),

                ),
                
                /*array(
                    'name'=>'file_name',
                    'value'=>function($data){
                        return Yii::app()->baseUrl.'/images/products/thumb/'.$data->file_name;
                    },
                ),*/
                array(
                    'name'=>'file',
                    'type'=>'image',
                    'value'=>function($data){
                        return 'images/gallery/thumb/'.$data->file_name;
                    }
                ),
                array(
                    'class' => 'booster.widgets.tbEditableColumn',
                    'name'=>'description',

                    'editable'=>array(
                        'type'=>'textarea',
                        'placement'=>'top',
                        'url'=>$this->createUrl('editDetail'),
                    )
                ),
                array(
                    'header'=>'Main',
                    'class'=>'zii.widgets.grid.CCheckBoxColumn',
                    'value'=>function($data){
                        return $data->id;                        
                    },
                    'checkBoxHtmlOptions'=>array(
                        'class'=>'chkBoxMainImage',
                    )
                ),
                array(
                    'class'=>'booster.widgets.TbButtonColumn',
                    'viewButtonUrl'=>function($data){
                        return array('gallery/viewDetail','id'=>$data->id);
                    },
                    'updateButtonUrl'=>function($data){
                        return array('gallery/updateDetail','id'=>$data->id);
                    },
                    'deleteButtonUrl'=>function($data){
                        return array('gallery/deleteDetail','id'=>$data->id);
                    }
                )
            ),
        )

    );

    Yii::app()->clientScript->registerScript('selectMainImage','
        jQuery(\'input.chkBoxMainImage\').click(function(){
            var imgId = jQuery(this).val();
            jQuery.ajax({
                url: "'.Yii::app()->createAbsoluteUrl('gallery/setMainImage').'",
                data: {id : jQuery(this).val() },
                type: "POST",
                success: function(data){
                    if(data.execRow != 0){
                        alert("Main Cover Has Been Set !");
                    }else{
                        alert("Nothing to set");
                    }
                },
                error: function(data){
                    alert("Error");
                }
            });
        });
    ');



    $this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Add New Image',
            'context' => 'primary',
            'htmlOptions'=>array(
                'id'=>'openImageModalForm',
                'data-toggle' => 'modal',
                'data-target' => '#imageFormModal',
            )
        )
    );
    ?>


    <?php

    $this->beginWidget('booster.widgets.TbModal',array(
        'id'=>'galleryFormModal',
    ));
    ?>
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Gallery #<?php echo CHtml::encode($model->name) ?></h4>
    </div>
    <div class="modal-body">
        <?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
    </div>
    <div class="modal-footer">
        <?php 
            $this->widget(
                'booster.widgets.TbButton',
                array(
                    'context' => 'primary',
                    'label' => 'Save changes',
                    'url' => '#',
                    'htmlOptions' => array('data-dismiss' => 'modal','onclick'=>'jQuery(\'#galleryDescriptionForm\').submit();'),
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
    $this->endWidget();
    // END OF MODAL GALLERY DESCRIPTION
    ?>
    




    <?php
    // begin modal image
    $this->beginWidget(
        'booster.widgets.TbModal',
        array('id'=>'imageFormModal')
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
                    'id'=>'uploadImageForm',
                    'htmlOptions'=>array(
                        'enctype'=>'multipart/form-data',
                    )
                ));

            ?>
            <div class="row">
                <?php echo $form->textFieldGroup($galleryDetail,'caption'); ?>
            </div>
            <div class="row">
                <?php echo $form->fileFieldGroup($galleryDetail,'file'); ?>
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
                    'context' => 'primary',
                    'label' => 'Save changes',
                    'url' => '#',
                    'htmlOptions' => array('data-dismiss' => 'modal','onclick'=>'jQuery(\'#uploadImageForm\').submit();'),
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



