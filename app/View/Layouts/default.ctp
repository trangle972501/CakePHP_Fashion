<!DOCTYPE html>
<html lang="vi">
  <head>
         <?php echo $this->Html->charset(); ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
          <?php echo $this->fetch('title'); ?>
        </title>
  
      <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-theme.min');

        echo $this->Html->css('bootstrap-datepicker');

        echo $this->Html->css('style');
        echo $this->Html->css('justified-nav');// Thiết lập style cho trang cho người dùng. File này được lấy từ nguốn file css của giao diện tải về 


        echo $this->html->script('jquery-1.11.3.min');
        echo $this->html->script('bootstrap.min');
        echo $this->html->script('simpleCart.min');
        echo $this->html->script('bootstrap-datepicker.min');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
      ?>
      <script type="text/javascript">
        simpleCart({
          checkout: {
            type: "PayPal",
            email: "meocon20091997conyeumelam@gmail.com",
            sandbox: true
          }
        });
      </script>
</head>

<body>


    <div class="container">

    <div class="row">
          <div class="col-md-12">
           <?php
           echo $this->element('header');
           ?> 
         </div>
    </div>

    <div class="row">
	<div class="col-md-3">
     <?php
           echo $this->element('left');
          ?>
          
        </div>
     <div class="col-md-9">
            <?php echo $this->Session->flash(); ?>
           <?php echo $this->fetch('content'); ?>
        </div>
     
       
       
    </div>

<hr>
  <div class="row">
          <div class="col-md-12">
           <?php
           echo $this->element('parner');
           ?> 
         </div>
    </div>
 <div class="row">
          <div class="col-md-12">
           <?php
           echo $this->element('footer');
           ?> 
         </div>
    </div>
   </div>



</body>


</html>



