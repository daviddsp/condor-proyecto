<?php
/* @var $this EjemplosController */
/* @var $model Ejemplos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ejemplos'); ?>
		<?php echo $form->textField($model,'id_ejemplos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ejemplos'); ?>
		<?php echo $form->textField($model,'nombre_ejemplos',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ejemplo'); ?>
		<?php echo $form->textField($model,'ejemplo',array('size'=>60,'maxlength'=>1000)); ?>
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