<?php
/* @var $this EjemplosController */
/* @var $model Ejemplos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ejemplos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ejemplos'); ?>
		<?php echo $form->textField($model,'nombre_ejemplos',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_ejemplos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejemplo'); ?>
		<?php echo $form->textField($model,'ejemplo',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'ejemplo'); ?>
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