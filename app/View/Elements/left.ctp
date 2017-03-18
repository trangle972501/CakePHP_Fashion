<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
<style type="text/css" media="screen">
  .nav-pills>li {
    float: left;
    width: 100%;
}
</style>
</head>
<body>

<!-- Đây là phần hiển thị danh mục -->
<ul class="nav nav-pills">
  <li role="presentation" class="btn btn-danger"><a href="#">Danh mục sản phẩm</a></li>
  
</ul>
<ul class="list-group">

  <?php
        $categories = $this->requestAction('categories/');
        foreach ($categories as $category)
        {
          ?>
          <li class="list-group-item" ><a href="<?php echo $this->webroot.'categories/view/'.$category['Category']['id']; ?>">
          <?php echo $category['Category']['name'];?></a></li>
          <?php
        }
  ?>
</ul>

<!-- Đây là phần dùng để hiển thị Sản phẩm nổi bật -->
<ul class="nav nav-pills">
  <li role="presentation" class="btn btn-danger"><a href="#">Sản phẩm nổi bật</a></li>
  
</ul>
<?php
    $products = $this->requestAction('products/');
    foreach ($products as $product)
    {
      ?>
      <div class="media">
        <div class="pull-left">
          <a href="<?php echo $this->webroot;?>products/view/
          <?php echo $product['Product']['id'];?>">
          <img class="media-object" img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/thumb_'.$product['Product']['image'];?>" >
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">
         
        <?php echo h($product['Product']['name']); ?><br>
        
          </h4>
          <?php echo h($product['Product']['price']); ?>



        </div>
      </div>
<?php
    }
?>
<p>
  <!-- Đây là phần dùng để hiển thị quảng cáo -->
  <ul class="nav nav-pills">
  <li role="presentation" class="btn btn-danger"><a href="#">Sản phẩm quảng cáo</a></li>
  
</ul>
<p>
<?php
    $images = $this->requestAction('images/');
    foreach ($images as $images)
    {
    ?>
 <a href="#" class="thumbnail">
      <img src="<?php echo $this->webroot.'files/image/image/'.$images['Image']['id'].'/thumb_'.$images['Image']['image'];?>" >
 </a>
  <?php
  }
 ?>
</body>
</html>