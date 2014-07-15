<?php
$this->breadcrumbs=array(
	'Setting Details'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List SettingDetail','url'=>array('index')),
array('label'=>'Create SettingDetail','url'=>array('create')),
array('label'=>'Update SettingDetail','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete SettingDetail','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage SettingDetail','url'=>array('admin')),
);
?>

<h1>View SettingDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'setting_id',
		'param',
		'value',
),
)); ?>
