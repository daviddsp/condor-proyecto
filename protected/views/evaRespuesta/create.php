<?php
/* @var $this EvaRespuestaController */
/* @var $model EvaRespuesta */

$this->breadcrumbs=array(
	'Eva Respuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EvaRespuesta', 'url'=>array('index')),
	array('label'=>'Manage EvaRespuesta', 'url'=>array('admin')),
);
?>

<h1>Create EvaRespuesta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>