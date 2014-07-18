<?php
$this->breadcrumbs=array(
	'Product Lists'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ProductList','url'=>array('index')),
array('label'=>'Manage ProductList','url'=>array('admin')),
);
?>

<h1>Create ProductList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>