<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Major', 'url'=>array('index')),
	array('label'=>'Manage Major', 'url'=>array('admin')),
);
?>

<h1>Create Major</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>