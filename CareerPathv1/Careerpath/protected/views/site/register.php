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
		
		
));
?>
<?php
$this->menu=array(
	array('label'=>'List Topic', 'url'=>array('index')),
	);?>
	<h1>ลงทะเบียนระบบสหกิจศึกษา</h1>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($member_profile,'fname'); ?>
		<?php echo $form->textField($member_profile,'fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($member_profile,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($member_profile,'lname'); ?>
		<?php echo $form->textField($member_profile,'lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($member_profile,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($member_profile,'study_id'); ?>
		<?php echo $form->textField($member_profile,'study_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($member_profile,'study_id'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($member_profile,'major');?>
		<?php
		
echo $form->dropDownList ( $member_profile, 'major', array (
				'se' => 'SE',
				'it' => 'IT',
				'geo' => 'GeO' ,
				'etm' => 'ETM' ,
				'eb' => 'E-Biz' ,

		), array (
				'prompt' => 'เลือกสาขา' 
		) );
		?>
		<?php echo $form->error($member_profile,'major')?>
</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	
	<div class="row buttons">
		
		<?php echo CHtml::submitButton('ยืนยัน'); ?>
	</div>
	
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->