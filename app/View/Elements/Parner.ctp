<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
	.brnd-logo {
  margin-left: 15px;
}
.ma-brand-slider-contain {
  overflow: hidden;
  padding-top: 10px;
}
.brand-logo-area {
  margin-bottom: 30px;
}
.brand-logo-area .owl-theme .owl-controls {
  position: absolute;
  right: 30px;
  text-align: center;
  top: -47px;
  width: 80px;
}
		.top-footer {
    background: #ee5050 none repeat scroll 0 0;
    height: 12px;
    margin-bottom: 30px;
    margin-top: 25px;
    position: relative;
    text-align: center;
    width: 100%;
}
	</style>
</head>
<body>

<!-- Đây là phần dùng để hiển thị parner -->
<div class="top-footer">
        <div class="top-content-footer">&nbsp;</div>
      </div>
<div class="row">
<marquee behavior="alternate">
<?php                     
      $images = $this->requestAction('images/parner');                     
      foreach ($images as $images)                      
      {                     
      ?>                      
    <div class="col-md-3" 
    <div class="thumbnail" >                 
      <img src="<?php echo $this->webroot.'files/image/image/'.$images['Image']['id'].'/'.$images['Image']['image'];?>" alt="...">                                           
    </div>    
                  
    <?php } ?></marquee>
</div>

			</body>
</html>