<?php
/* @var $this RemedialesController */
/* @var $model Remediales */

$this->breadcrumbs=array(
	'Remediales'=>array('index'),
	$model->id_remediales,
);

$this->menu=array(
	array('label'=>'List Remediales', 'url'=>array('index')),
	array('label'=>'Create Remediales', 'url'=>array('create')),
	array('label'=>'Update Remediales', 'url'=>array('update', 'id'=>$model->id_remediales)),
	array('label'=>'Delete Remediales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_remediales),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Remediales', 'url'=>array('admin')),
);
?>

<h1>View Remediales #<?php echo $model->id_remediales; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_remediales',
		'nombre_remediales',
		'descripcion',
		'id_evaluaciones',
	),
)); ?>
