<?php
/* @var $this FuentesBibliograficasController */
/* @var $model FuentesBibliograficas */

$this->breadcrumbs=array(
	'Fuentes Bibliograficases'=>array('index'),
	$model->id_fuentes_bibliograficas,
);

$this->menu=array(
	array('label'=>'List FuentesBibliograficas', 'url'=>array('index')),
	array('label'=>'Create FuentesBibliograficas', 'url'=>array('create')),
	array('label'=>'Update FuentesBibliograficas', 'url'=>array('update', 'id'=>$model->id_fuentes_bibliograficas)),
	array('label'=>'Delete FuentesBibliograficas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fuentes_bibliograficas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FuentesBibliograficas', 'url'=>array('admin')),
);
?>

<h1>View FuentesBibliograficas #<?php echo $model->id_fuentes_bibliograficas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fuentes_bibliograficas',
		'nombre_fuente_bibliograficas',
		'fuente_bibliografica',
		'id_leccion',
	),
)); ?>
