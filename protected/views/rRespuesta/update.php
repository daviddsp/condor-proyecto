<?php
/* @var $this RRespuestaController */
/* @var $model RRespuesta */

$this->breadcrumbs=array(
	'Rrespuestas'=>array('index'),
	$model->id_rrespuesta=>array('view','id'=>$model->id_rrespuesta),
	'Update',
);

$this->menu=array(
	array('label'=>'List RRespuesta', 'url'=>array('index')),
	array('label'=>'Create RRespuesta', 'url'=>array('create')),
	array('label'=>'View RRespuesta', 'url'=>array('view', 'id'=>$model->id_rrespuesta)),
	array('label'=>'Manage RRespuesta', 'url'=>array('admin')),
);
?>

<h1>Update RRespuesta <?php echo $model->id_rrespuesta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>