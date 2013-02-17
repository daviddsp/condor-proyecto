<?php
/* @var $this EvaRespuestaController */
/* @var $model EvaRespuesta */

$this->breadcrumbs=array(
	'Eva Respuestas'=>array('index'),
	$model->id_respuesta=>array('view','id'=>$model->id_respuesta),
	'Update',
);

$this->menu=array(
	array('label'=>'List EvaRespuesta', 'url'=>array('index')),
	array('label'=>'Create EvaRespuesta', 'url'=>array('create')),
	array('label'=>'View EvaRespuesta', 'url'=>array('view', 'id'=>$model->id_respuesta)),
	array('label'=>'Manage EvaRespuesta', 'url'=>array('admin')),
);
?>

<h1>Update EvaRespuesta <?php echo $model->id_respuesta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>