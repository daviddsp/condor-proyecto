<?php
/* @var $this RemedialesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Remediales',
);

$this->menu=array(
	array('label'=>'Create Remediales', 'url'=>array('create')),
	array('label'=>'Manage Remediales', 'url'=>array('admin')),
);
?>

<h1>Remediales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
