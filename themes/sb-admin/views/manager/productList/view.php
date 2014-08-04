<?php
$this->breadcrumbs=array(
	'Product Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ProductList','url'=>array('index')),
array('label'=>'Create ProductList','url'=>array('create')),
array('label'=>'Update ProductList','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ProductList','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ProductList','url'=>array('admin')),
);
?>

<h1>View ProductList #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'product_id',
		'size',
		'stock',
),
)); ?>
