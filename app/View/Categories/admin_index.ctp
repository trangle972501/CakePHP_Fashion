<div class="categories index">
	<h2><?php echo __('Danh mục sản phẩm'); ?></h2>

	<table class="table table-hover">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('id', 'ms do'); ?></th>
		<th><?php echo $this->Paginator->sort('parent_id','Danh mục cha'); ?></th>
		<th><?php echo $this->Paginator->sort('name', 'danh muc'); ?></th>
		<th class="actions"><?php echo ('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
	<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
	<td><?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?></td>
	<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
	<td class="actions">
	<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $category['Category']['id']), array('class' => 'btn btn-primary') ); ?>
	<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $category['Category']['id']),array('class' => 'btn btn-primary') ); ?>
	<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $category['Category']['id']),array('class' => 'btn btn-primary'),array('confirm' => __('Bạn có muốn xóa hay không?', $category['Category']['id']))); ?></td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Trang {:page} of {:pages}, Hiện tai {:current} trên tổng của {:count} Tổng, Bắt đầu {:start}, Kết thúc {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Về trước'), array(), null, array('class' => 'Về trước disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Kế tiếp') . ' >', array(), null, array('class' => 'Kế tiếp disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Chức năng'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tạo danh mục'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Hiển thị danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục cha'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
