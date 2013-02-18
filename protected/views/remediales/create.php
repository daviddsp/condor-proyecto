<?php
/* @var $this RemedialesController */
/* @var $model Remediales */

$this->breadcrumbs=array(
	'Remediales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Remediales', 'url'=>array('index')),
	array('label'=>'Manage Remediales', 'url'=>array('admin')),
);
?>

<h1>Create Remediales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>