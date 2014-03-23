<?php
/* @var $this TopicController */
/* @var $model Topic */

$this->breadcrumbs=array(
	'Topics'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Topic', 'url'=>array('index'),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Create Topic', 'url'=>array('create'),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Update Topic', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Delete Topic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Topic', 'url'=>array('admin'),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'กลับไปก่อนหน้านี้', 'url'=>array('index')),
);
?>

<h1>View Topic #<?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		'title',
		array(
		'name'=>'detail',
		'type'=>'html', // show text from html format
		'value'=>$model->detail,
),
		'create_date',
		'update_date',
	),
)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic-grid',
		'dataProvider' => $comment->search ( '$model=>id', 'search', array (
				'topic_id' => $comment->topic_id = $model->id
		) ),	
	'columns'=>array(
			array (
		'name' => 'id',
		'value' => '$this->grid->dataProvider->pagination->offset+$row+1'
),
		'content',

			'email',
	'date',
	

	),
)); ?>
		
<?php if(Yii::app()->user->id !== null){ ?>		
		
<h1>แสดงความคิดเห็น</h1>
		<div class="form">

	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'topic1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		
)); ?>
	
	
		
<div class="row">
		<?php echo $form->labelEx($comment,'content'); ?>
		

<?php $this->widget('application.extensions.cleditor.ECLEditor', array(
		'model'=>$comment,
		'attribute'=>'content', //Model attribute name. Nome do atributo do modelo.
		'options'=>array(
				'width'=>'500',
				'height'=>250,
				'useCSS'=>true,
		),
		'value'=>$comment->content, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
));
        ?>
        
		<?php echo $form->error($comment,'content'); ?>
		
		
		<div class="row buttons">
		<?php echo CHtml::submitButton($comment->isNewRecord ? 'แสดงความคิดเห็น' : 'save'); ?>
	</div>
		
	</div>
<?php $this->endWidget(); ?>	</div>

<?php }else{?>
<p style="color: red;">***หากต้องการแสดงความคิดเห็น กรุณา สมัครสมาชิก หรือ ลงชื่อเข้าใช้งาน ก่อน</p>
<?php }?>
