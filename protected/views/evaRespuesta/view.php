<?php
/* @var $this EvaRespuestaController */
/* @var $model EvaRespuesta */

$this->breadcrumbs=array(
	'Eva Respuestas'=>array('index'),
	$model->id_respuesta,
);

$this->menu=array(
	array('label'=>'List EvaRespuesta', 'url'=>array('index')),
	array('label'=>'Create EvaRespuesta', 'url'=>array('create')),
	array('label'=>'Update EvaRespuesta', 'url'=>array('update', 'id'=>$model->id_respuesta)),
	array('label'=>'Delete EvaRespuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_respuesta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EvaRespuesta', 'url'=>array('admin')),
);
?>

<h1>View EvaRespuesta #<?php echo $model->id_respuesta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_respuesta',
		'respuesta',
		'id_pregunta',
	),
)); ?>
