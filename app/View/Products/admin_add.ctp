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
<?php echo $this->Form->create('Product',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Thêm sản phẩm'); ?></legend>
	<?php
		echo $this->Form->input('code', array('label' => 'Mã sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('name', array('label' => 'Tên sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh sản phẩm', 'class' => 'form-control', 'type' => 'file'));
		echo $this->Form->input('price', array('label' => 'Giá sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả sản phẩm', 'class' => 'form-control','required' => 'false'));
		echo $this->Form->input('vip', array('label' => 'Loại sản phẩm Vip', 'class' => 'checkbox'));
		echo $this->Form->input('promotion', array('label' => 'Chương trinh khuyến mãi', 'class' => 'form-control'));
		echo $this->Form->input('category_id', array('label' => 'Danh mục sản phẩm', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Chức năng'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Hiển thị sản phẩm'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Hiển thị danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tạo danh mục mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

</body>
</html>