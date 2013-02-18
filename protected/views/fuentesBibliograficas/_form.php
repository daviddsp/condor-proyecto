<?php
/* @var $this FuentesBibliograficasController */
/* @var $model FuentesBibliograficas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fuentes-bibliograficas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_fuente_bibliograficas'); ?>
		<?php echo $form->textField($model,'nombre_fuente_bibliograficas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_fuente_bibliograficas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fuente_bibliografica'); ?>
		<?php echo $form->textField($model,'fuente_bibliografica',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fuente_bibliografica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_leccion'); ?>
		<?php echo $form->textField($model,'id_leccion'); ?>
		<?php echo $form->error($model,'id_leccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->