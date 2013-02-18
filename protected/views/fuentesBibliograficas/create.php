<?php
/* @var $this FuentesBibliograficasController */
/* @var $model FuentesBibliograficas */

$this->breadcrumbs=array(
	'Fuentes Bibliograficases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FuentesBibliograficas', 'url'=>array('index')),
	array('label'=>'Manage FuentesBibliograficas', 'url'=>array('admin')),
);
?>

<h1>Create FuentesBibliograficas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>