<?php
/* @var $this FuentesBibliograficasController */
/* @var $model FuentesBibliograficas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_fuentes_bibliograficas'); ?>
		<?php echo $form->textField($model,'id_fuentes_bibliograficas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_fuente_bibliograficas'); ?>
		<?php echo $form->textField($model,'nombre_fuente_bibliograficas',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuente_bibliografica'); ?>
		<?php echo $form->textField($model,'fuente_bibliografica',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_leccion'); ?>
		<?php echo $form->textField($model,'id_leccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->