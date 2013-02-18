<?php
/* @var $this RemedialesController */
/* @var $data Remediales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_remediales')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_remediales), array('view', 'id'=>$data->id_remediales)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_remediales')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_remediales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evaluaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_evaluaciones); ?>
	<br />


</div>