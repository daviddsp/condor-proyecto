<?php
/* @var $this FuentesBibliograficasController */
/* @var $data FuentesBibliograficas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fuentes_bibliograficas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fuentes_bibliograficas), array('view', 'id'=>$data->id_fuentes_bibliograficas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_fuente_bibliograficas')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_fuente_bibliograficas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuente_bibliografica')); ?>:</b>
	<?php echo CHtml::encode($data->fuente_bibliografica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_leccion); ?>
	<br />


</div>