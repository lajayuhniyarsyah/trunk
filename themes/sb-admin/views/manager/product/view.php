<?php
    $this->widget(
        'booster.widgets.TbEditableDetailView',
        array(
            'id' => 'product-detail',
            'data' => $model,
            'url' => array(),
            'attributes' => array(
                'name',
                'price',
                'tags',

            )
        )
    );
?>
<br />
<fieldset>
    <legend>Product List</legend>

<?php
    // LISTS
    $this->widget(
        'booster.widgets.TbExtendedGridView',
        array(
            // 'filter' => $imageModel,
            'fixedHeader' => true,
            'type' => 'striped bordered',
            'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $listDataProvider,
            'template' => "{items}",
            'columns' => array(
                 array(
                    'name' => 'size',
                    'class' => 'booster.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:200px'),
                    'editable' => array(
                        'type' => 'text',
                        'url' => array('productList/editable'),
                        'placement'=>'right'
                    )
                ),
                // 'qty',
                // 'stock',
                array(
                    'name' => 'stock',
                    'class' => 'booster.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:200px'),
                    'editable' => array(
                        'type' => 'text',
                        'url' => array('productList/editable'),
                        'placement'=>'top'
                    )
                ),
                /*array(
                    'name'=>'file_name',
                    'value'=>function($data){
                        return Yii::app()->baseUrl.'/images/products/thumb/'.$data->file_name;
                    },
                ),*/
                
                array(
                    'class'=>'booster.widgets.TbButtonColumn',
                    'viewButtonUrl'=>function($data){
                        return array('product/viewImage','id'=>$data->id);
                    },
                    'updateButtonUrl'=>function($data){
                        return array('product/viewImage','id'=>$data->id);
                    },
                    'deleteButtonUrl'=>function($data){
                        return array('product/deleteImage','id'=>$data->id);
                    }
                )
            ),
        )

    );

    $this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Add New List',
            'context' => 'primary',
            'htmlOptions'=>array(
                'id'=>'openListModalForm',
                'data-toggle' => 'modal',
                'data-target' => '#listModalForm',
            )
        )
    );
?>
</fieldset>

<br />
<fieldset>
    <legend>Product Images</legend>


<?php

    // IMAGE


    $this->widget(
        'booster.widgets.TbExtendedGridView',
        array(
            // 'filter' => $imageModel,
            'fixedHeader' => true,
            'type' => 'striped bordered',
            'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $imageDataProvider,
            'template' => "{items}",
            'columns' => array(
                'name',
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
                        return 'images/products/thumb/'.$data->file_name;
                    }
                ),
                array(
                    'name'=>'main_image',
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
                        return array('product/viewImage','id'=>$data->id);
                    },
                    'updateButtonUrl'=>function($data){
                        return array('product/viewImage','id'=>$data->id);
                    },
                    'deleteButtonUrl'=>function($data){
                        return array('product/deleteImage','id'=>$data->id);
                    }
                )
            ),
        )

    );

    Yii::app()->clientScript->registerScript('selectMainImage','
        jQuery(\'input.chkBoxMainImage\').click(function(){
            var imgId = jQuery(this).val();
            jQuery.ajax({
                url: "'.Yii::app()->createAbsoluteUrl('/manager/product/setMainImage').'",
                data: {id : jQuery(this).val(),productId:'.$model->id.' },
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



    // BEGIN MODAL PRODUCT IMAGES
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
                <?php echo $form->textFieldGroup($imageModel,'name'); ?>
            </div>
            <div class="row">
                <?php echo $form->fileFieldGroup($imageModel,'file'); ?>
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
    // END MODAL PRODUCT IMAGES
?>

<?php
    // BEGIN MODAL PRODUCT LIST
    $this->beginWidget(
        'booster.widgets.TbModal',
        array('id'=>'listModalForm')
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
                    'id'=>'listForm',
                    'htmlOptions'=>array(
                        'enctype'=>'multipart/form-data',
                    )
                ));
                echo $form->errorSummary($listModel); 

            ?>
            <div class="row">
                <?php echo $form->textFieldGroup($listModel,'size'); ?>
            </div>
            <div class="row">
                <?php echo $form->textFieldGroup($listModel,'stock'); ?>
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
                    'htmlOptions' => array('data-dismiss' => 'modal','onclick'=>'jQuery(\'#listForm\').submit();'),
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
    // END MODAL PRODUCT LIST

?>



