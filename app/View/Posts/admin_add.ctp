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
<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Chủ đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control','required' => 'false'));
		echo $this->Form->input('top');
		echo $this->Form->input('bottom1');
		echo $this->Form->input('bottom2');
		echo $this->Form->input('publish');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>

</body>
</html>