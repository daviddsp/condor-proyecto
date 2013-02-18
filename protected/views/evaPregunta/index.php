<?php
/* @var $this EvaPreguntaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eva Preguntas',
);

$this->menu=array(
	array('label'=>'Create EvaPregunta', 'url'=>array('create')),
	array('label'=>'Manage EvaPregunta', 'url'=>array('admin')),
);
?>

<h1>Eva Preguntas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
