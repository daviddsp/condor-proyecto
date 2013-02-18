<?php
/* @var $this RPreguntaController */
/* @var $model RPregunta */

$this->breadcrumbs=array(
	'Rpreguntas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RPregunta', 'url'=>array('index')),
	array('label'=>'Manage RPregunta', 'url'=>array('admin')),
);
?>

<h1>Create RPregunta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>