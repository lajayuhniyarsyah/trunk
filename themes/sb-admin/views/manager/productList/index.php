<?php
$this->breadcrumbs=array(
	'Product Lists',
);

$this->menu=array(
array('label'=>'Create ProductList','url'=>array('create')),
array('label'=>'Manage ProductList','url'=>array('admin')),
);
?>

<h1>Product Lists</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
