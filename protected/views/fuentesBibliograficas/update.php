<?php
/* @var $this FuentesBibliograficasController */
/* @var $model FuentesBibliograficas */

$this->breadcrumbs=array(
	'Fuentes Bibliograficases'=>array('index'),
	$model->id_fuentes_bibliograficas=>array('view','id'=>$model->id_fuentes_bibliograficas),
	'Update',
);

$this->menu=array(
	array('label'=>'List FuentesBibliograficas', 'url'=>array('index')),
	array('label'=>'Create FuentesBibliograficas', 'url'=>array('create')),
	array('label'=>'View FuentesBibliograficas', 'url'=>array('view', 'id'=>$model->id_fuentes_bibliograficas)),
	array('label'=>'Manage FuentesBibliograficas', 'url'=>array('admin')),
);
?>

<h1>Update FuentesBibliograficas <?php echo $model->id_fuentes_bibliograficas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>