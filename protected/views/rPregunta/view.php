<?php
/* @var $this RPreguntaController */
/* @var $model RPregunta */

$this->breadcrumbs=array(
	'Rpreguntas'=>array('index'),
	$model->id_rpregunta,
);

$this->menu=array(
	array('label'=>'List RPregunta', 'url'=>array('index')),
	array('label'=>'Create RPregunta', 'url'=>array('create')),
	array('label'=>'Update RPregunta', 'url'=>array('update', 'id'=>$model->id_rpregunta)),
	array('label'=>'Delete RPregunta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rpregunta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RPregunta', 'url'=>array('admin')),
);
?>

<h1>View RPregunta #<?php echo $model->id_rpregunta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rpregunta',
		'pregunta',
		'id_remediales',
	),
)); ?>
