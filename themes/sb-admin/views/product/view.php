<?php
    $this->widget(
        'booster.widgets.TbEditableDetailView',
        array(
            'id' => 'product-detail',
            'data' => $model,
            // 'url' => $endpoint,
            'attributes' => array(
                'name',
                'price',
                'qty',
                'tags',

            )
        )
    );


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
                array(
                    'name'=>'file_name',
                    'value'=>function($data){
                        return Yii::app()->baseUrl.'/images/products/thumb/'.$data->file_name;
                    },
                ),
                
                array(
                    'class'=>'booster.widgets.TbButtonColumn'
                )
            ),
        )

    );



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

    Yii::app()->clientScript->registerScript('openModal','
        
    ');


    // begin modal
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
                    'htmlOptions' => array('data-dismiss' => 'modal'),
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



