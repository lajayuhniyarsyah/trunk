<?php
$this->breadcrumbs=array(
	'Setting Details'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List SettingDetail','url'=>array('index')),
array('label'=>'Manage SettingDetail','url'=>array('admin')),
);
?>

<h1>Create SettingDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>