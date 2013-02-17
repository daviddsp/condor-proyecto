<?php
/* @var $this EvaPreguntaController */
/* @var $model EvaPregunta */

$this->breadcrumbs=array(
	'Eva Preguntas'=>array('index'),
	$model->id_pregunta=>array('view','id'=>$model->id_pregunta),
	'Update',
);

$this->menu=array(
	array('label'=>'List EvaPregunta', 'url'=>array('index')),
	array('label'=>'Create EvaPregunta', 'url'=>array('create')),
	array('label'=>'View EvaPregunta', 'url'=>array('view', 'id'=>$model->id_pregunta)),
	array('label'=>'Manage EvaPregunta', 'url'=>array('admin')),
);
?>

<h1>Update EvaPregunta <?php echo $model->id_pregunta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>