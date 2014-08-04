<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
);

/*$this->menu=array(
array('label'=>'List Setting','url'=>array('index')),
array('label'=>'Create Setting','url'=>array('create')),
array('label'=>'Update Setting','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Setting','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Setting','url'=>array('admin')),
);*/
?>

<h1>View Setting #<?php echo $model->name; ?></h1>
<?php
	$this->widget('booster.widgets.TbGridView',array(
		'id'=>'setting-grid',
		'dataProvider'=>$details,
		
		'columns'=>array(
			// 'id',
			'param',
			array(
				'name'=>'value',
				'type'=>'html',
				'value'=>function($data){
					if($data['value']){
						$decoded = CJSON::decode($data['value']);
						if(is_array($decoded))
						{
							$rtn = "";
							foreach($decoded as $k=>$val){
								$rtn .= $val.'<br/>';
							}
							return $rtn;
						}
						else
						{
							return $data['value'];
						}	
					}else{
						return null;
					}
					
				}
			),
			array(
				'class'=>'booster.widgets.TbButtonColumn',
			),
		),
	));

	$this->widget(
        'booster.widgets.TbButton',
        array(
            'label' => 'Add New',
            'context' => 'primary',
            'buttonType'=>'link',
            'url'=>$this->createUrl('settingDetail/create',array('for'=>$model->id))
            )
        );
?>