<?php
/* @var $this RRespuestaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrespuestas',
);

$this->menu=array(
	array('label'=>'Create RRespuesta', 'url'=>array('create')),
	array('label'=>'Manage RRespuesta', 'url'=>array('admin')),
);
?>

<h1>Rrespuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
