<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	
	<fieldset> 

		<legend><?php echo __('Admin Add Category'); ?></legend>
	<?php
		echo $this->Form->input('parent_id', array('label' => 'Mã danh mục', 'class' => 'form-control'));
		echo $this->Form->input('name', array('label' => 'Tên danh mục', 'class' => 'form-control'));
		echo $this->Form->input('publish', array('label' => 'Xuất bản hay không', 'class' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
