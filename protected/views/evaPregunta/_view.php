<?php
/* @var $this EvaPreguntaController */
/* @var $data EvaPregunta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pregunta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pregunta), array('view', 'id'=>$data->id_pregunta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evaluaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_evaluaciones); ?>
	<br />


</div>