<?php
/* @var $this RegisterController */
/* @var $model Register */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'study_id'); ?>
		<?php echo $form->textField($model,'study_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'study_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'major');?>
		<?php
		
echo $form->dropDownList ( $model, 'major', array (
				'SE' => 'SE',
				'IT' => 'IT',
				'ทันตแพทย์' => 'ทันตแพทย์' 
		), array (
				'prompt' => 'Select title' 
		) );
		?>
		<?php echo $form->error($model,'major')?>
</div>


	

	<div class="row">
		<?php echo $form->labelEx($user,'username'); ?>
		<?php echo $form->textField($user,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($user,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->