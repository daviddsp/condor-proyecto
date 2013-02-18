<?php
/* @var $this RemedialesController */
/* @var $model Remediales */

$this->breadcrumbs=array(
	'Remediales'=>array('index'),
	$model->id_remediales=>array('view','id'=>$model->id_remediales),
	'Update',
);

$this->menu=array(
	array('label'=>'List Remediales', 'url'=>array('index')),
	array('label'=>'Create Remediales', 'url'=>array('create')),
	array('label'=>'View Remediales', 'url'=>array('view', 'id'=>$model->id_remediales)),
	array('label'=>'Manage Remediales', 'url'=>array('admin')),
);
?>

<h1>Update Remediales <?php echo $model->id_remediales; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>