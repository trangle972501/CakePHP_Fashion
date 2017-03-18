<?php
echo $this->html->script('tinymce/tinymce.min');
?>
<!DOCTYPE html>
<html>
<head>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<div class="images form">
<?php echo $this->Form->create('Image',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('lable'=>'Tên hình ảnh','class'=>'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả hình ảnh', 'class' => 'form-control','required' => 'false'));
		echo $this->Form->input('image',array('lable'=>' Hình ảnh','class'=>'form-control','type'=>'file'));
		echo $this->Form->input('slide',array('lable'=>'Tên hình ảnh','class'=>'checkbox'));
		echo $this->Form->input('advertisement',array('lable'=>'Tên hình ảnh','class'=>'checkbox'));
		echo $this->Form->input('parner',array('lable'=>'Tên hình ảnh','class'=>'checkbox'));
		echo $this->Form->input('publish',array('lable'=>'Tên hình ảnh','class'=>'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Image.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Image.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
</body>
</html>