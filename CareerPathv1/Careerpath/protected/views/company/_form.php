<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skill'); ?>
		<?php echo $form->textField($model,'skill',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'skill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major_id'); ?>
		<?php echo $form->textField($model,'major_id'); ?>
		<?php echo $form->error($model,'major_id'); ?>
	</div>
	<div class="row">
	<?php echo $form->labelEx($model, 'major_id'); ?>
	<?php
	
echo $form->dropDownList ( $model, 'major_id', CHtml::listData ( Major::model ()->findAll (), 'id','name' ), array (
			'prompt' => '===กรุณาเลือกคลินิก===' 
	) );
	?>
	<?php echo $form->error($model, 'major_id'); ?>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->