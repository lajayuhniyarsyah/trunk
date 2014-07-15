<?php
$this->breadcrumbs=array(
	'Setting Details',
);

$this->menu=array(
array('label'=>'Create SettingDetail','url'=>array('create')),
array('label'=>'Manage SettingDetail','url'=>array('admin')),
);
?>

<h1>Setting Details</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
