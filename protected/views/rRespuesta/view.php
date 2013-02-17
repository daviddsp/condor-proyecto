<?php
/* @var $this RRespuestaController */
/* @var $model RRespuesta */

$this->breadcrumbs=array(
	'Rrespuestas'=>array('index'),
	$model->id_rrespuesta,
);

$this->menu=array(
	array('label'=>'List RRespuesta', 'url'=>array('index')),
	array('label'=>'Create RRespuesta', 'url'=>array('create')),
	array('label'=>'Update RRespuesta', 'url'=>array('update', 'id'=>$model->id_rrespuesta)),
	array('label'=>'Delete RRespuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rrespuesta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RRespuesta', 'url'=>array('admin')),
);
?>

<h1>View RRespuesta #<?php echo $model->id_rrespuesta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rrespuesta',
		'respuesta',
		'id_rpregunta',
	),
)); ?>
