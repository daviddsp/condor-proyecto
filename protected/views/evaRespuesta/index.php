<?php
/* @var $this EvaRespuestaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eva Respuestas',
);

$this->menu=array(
	array('label'=>'Create EvaRespuesta', 'url'=>array('create')),
	array('label'=>'Manage EvaRespuesta', 'url'=>array('admin')),
);
?>

<h1>Eva Respuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
