<?php
/* @var $this FuentesBibliograficasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fuentes Bibliograficases',
);

$this->menu=array(
	array('label'=>'Create FuentesBibliograficas', 'url'=>array('create')),
	array('label'=>'Manage FuentesBibliograficas', 'url'=>array('admin')),
);
?>

<h1>Fuentes Bibliograficases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
