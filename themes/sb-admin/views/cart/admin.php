<?php
    $this->pageTitle = 'Carts';
    $this->pageSubTitle = 'Show All Cart Transactions';
    $this->widget(
        'booster.widgets.TbExtendedGridView',
        array(
            'filter' => $model,
            'fixedHeader' => true,
            'type' => 'striped bordered',
            'headerOffset' => 40,
            // 40px is the height of the main navigation at bootstrap
            'dataProvider' => $model->search(),
            'template' => "{items}",
            'columns' => array(
                'type',
                'code',
                'sess_id',
                'user_id',
                'state',
                array(
                    'class'=>'booster.widgets.TbButtonColumn'
                )
            ),
        )

    );
?>