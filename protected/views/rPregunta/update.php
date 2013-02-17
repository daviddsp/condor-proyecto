<?php
/* @var $this RPreguntaController */
/* @var $model RPregunta */

$this->breadcrumbs=array(
	'Rpreguntas'=>array('index'),
	$model->id_rpregunta=>array('view','id'=>$model->id_rpregunta),
	'Update',
);

$this->menu=array(
	array('label'=>'List RPregunta', 'url'=>array('index')),
	array('label'=>'Create RPregunta', 'url'=>array('create')),
	array('label'=>'View RPregunta', 'url'=>array('view', 'id'=>$model->id_rpregunta)),
	array('label'=>'Manage RPregunta', 'url'=>array('admin')),
);
?>

<h1>Update RPregunta <?php echo $model->id_rpregunta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>