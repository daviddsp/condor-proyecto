<?php
/* @var $this MovimientosController */
/* @var $model Movimientos */

$this->breadcrumbs=array(
	'Movimientoses'=>array('index'),
	$model->usuario=>array('view','id'=>$model->usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Movimientos', 'url'=>array('index')),
	array('label'=>'Create Movimientos', 'url'=>array('create')),
	array('label'=>'View Movimientos', 'url'=>array('view', 'id'=>$model->usuario)),
	array('label'=>'Manage Movimientos', 'url'=>array('admin')),
);
?>

<h1>Update Movimientos <?php echo $model->usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>