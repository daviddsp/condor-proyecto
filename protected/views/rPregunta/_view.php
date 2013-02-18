<?php
/* @var $this RPreguntaController */
/* @var $data RPregunta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rpregunta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rpregunta), array('view', 'id'=>$data->id_rpregunta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_remediales')); ?>:</b>
	<?php echo CHtml::encode($data->id_remediales); ?>
	<br />


</div>