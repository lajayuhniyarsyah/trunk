<?php
$this->breadcrumbs=array(
	'Setting Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List SettingDetail','url'=>array('index')),
	array('label'=>'Create SettingDetail','url'=>array('create')),
	array('label'=>'View SettingDetail','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage SettingDetail','url'=>array('admin')),
	);
	?>

	<h1>Update SettingDetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>