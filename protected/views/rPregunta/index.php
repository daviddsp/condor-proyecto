<?php
/* @var $this RPreguntaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rpreguntas',
);

$this->menu=array(
	array('label'=>'Create RPregunta', 'url'=>array('create')),
	array('label'=>'Manage RPregunta', 'url'=>array('admin')),
);
?>

<h1>Rpreguntas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
