<?php
/* @var $this TopicController */
/* @var $model Topic */

$this->breadcrumbs=array(
	'Topics'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Topic', 'url'=>array('index')),
	array('label'=>'Create Topic', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#topic-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Webboard</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
			array (
		'name' => 'id',
		'value' => '$this->grid->dataProvider->pagination->offset+$row+1'
),
		'title',
	
		'create_date',
		
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width: 30px'),
			'template'=>'{view}',
		),

	),
)); ?>
