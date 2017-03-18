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
<div class="products form">
<?php echo $this->Form->create('Product',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code',array('lable'=>'Mã sản phẩm','class'=>'form-control'));
		echo $this->Form->input('name',array('lable'=>'Tên sản phẩm','class'=>'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh sản phẩm', 'class' => 'form-control', 'type' => 'file'));
		echo $this->Form->input('price',array('lable'=>'Giá sản phẩm','class'=>'form-control'));
		echo $this->Form->input('description',array('lable'=>'Mô tả sản phẩm','class'=>'form-control'));
		echo $this->Form->input('vip',array('lable'=>'Xếp loại sản phẩm','class'=>'checkbox'));
		echo $this->Form->input('promotion',array('lable'=>'Chương trình khuyến mãi','class'=>'form-control'));
		echo $this->Form->input('category_id',array('lable'=>'Danh mục sản phẩm','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
</body>
</html>