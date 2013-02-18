<?php
/* @var $this RRespuestaController */
/* @var $model RRespuesta */

$this->breadcrumbs=array(
	'Rrespuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RRespuesta', 'url'=>array('index')),
	array('label'=>'Manage RRespuesta', 'url'=>array('admin')),
);
?>

<h1>Create RRespuesta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>