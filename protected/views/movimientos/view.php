<?php
/* @var $this MovimientosController */
/* @var $model Movimientos */

$this->breadcrumbs=array(
	'Movimientoses'=>array('index'),
	$model->usuario,
);

$this->menu=array(
	array('label'=>'List Movimientos', 'url'=>array('index')),
	array('label'=>'Create Movimientos', 'url'=>array('create')),
	array('label'=>'Update Movimientos', 'url'=>array('update', 'id'=>$model->usuario)),
	array('label'=>'Delete Movimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Movimientos', 'url'=>array('admin')),
);
?>

<h1>View Movimientos #<?php echo $model->usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha',
		'hora',
		'proceso',
		'accion',
		'id_usuario',
		'usuario',
	),
)); ?>
