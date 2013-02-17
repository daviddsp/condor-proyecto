<?php
/* @var $this RemedialesController */
/* @var $model Remediales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_remediales'); ?>
		<?php echo $form->textField($model,'id_remediales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_remediales'); ?>
		<?php echo $form->textField($model,'nombre_remediales',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_evaluaciones'); ?>
		<?php echo $form->textField($model,'id_evaluaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->