<?php
/* @var $this EvaPreguntaController */
/* @var $model EvaPregunta */

$this->breadcrumbs=array(
	'Eva Preguntas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EvaPregunta', 'url'=>array('index')),
	array('label'=>'Manage EvaPregunta', 'url'=>array('admin')),
);
?>

<h1>Create EvaPregunta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>