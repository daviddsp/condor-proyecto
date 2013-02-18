<?php
/* @var $this EvaPreguntaController */
/* @var $model EvaPregunta */

$this->breadcrumbs=array(
	'Eva Preguntas'=>array('index'),
	$model->id_pregunta,
);

$this->menu=array(
	array('label'=>'List EvaPregunta', 'url'=>array('index')),
	array('label'=>'Create EvaPregunta', 'url'=>array('create')),
	array('label'=>'Update EvaPregunta', 'url'=>array('update', 'id'=>$model->id_pregunta)),
	array('label'=>'Delete EvaPregunta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pregunta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EvaPregunta', 'url'=>array('admin')),
);
?>

<h1>View EvaPregunta #<?php echo $model->id_pregunta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pregunta',
		'pregunta',
		'id_evaluaciones',
	),
)); ?>
