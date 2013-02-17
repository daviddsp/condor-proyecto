<?php
/* @var $this RRespuestaController */
/* @var $data RRespuesta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rrespuesta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rrespuesta), array('view', 'id'=>$data->id_rrespuesta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rpregunta')); ?>:</b>
	<?php echo CHtml::encode($data->id_rpregunta); ?>
	<br />


</div>