<?php
$this->breadcrumbs=array(
	'Product Lists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ProductList','url'=>array('index')),
	array('label'=>'Create ProductList','url'=>array('create')),
	array('label'=>'View ProductList','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ProductList','url'=>array('admin')),
	);
	?>

	<h1>Update ProductList <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>