<?php
/* @var $this EjemplosController */
/* @var $data Ejemplos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejemplos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ejemplos), array('view', 'id'=>$data->id_ejemplos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ejemplos')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ejemplos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ejemplo')); ?>:</b>
	<?php echo CHtml::encode($data->ejemplo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_leccion); ?>
	<br />


</div>