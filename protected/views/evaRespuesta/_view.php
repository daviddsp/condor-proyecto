<?php
/* @var $this EvaRespuestaController */
/* @var $data EvaRespuesta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_respuesta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_respuesta), array('view', 'id'=>$data->id_respuesta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->id_pregunta); ?>
	<br />


</div>