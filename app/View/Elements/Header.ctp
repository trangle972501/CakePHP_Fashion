<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
   <style type="text/css" media="screen">
.container-fluid {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
h1, h2, h3, h4, h5, h6 {
  color: #000000;
  font-family: Oswald;
  font-weight: 700;
}
a {transition: all 0.3s ease 0s;text-decoration:none;color:#777}
a:hover {
  color: #ec4445;
  text-decoration: none;
}
a:active, a:hover {
  outline: 0 none;
}

ul{
list-style: outside none none;
margin: 0;
padding: 0
}
.container{
  width: 1200px;
}
/*body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.428571429;
  color: #333;
  background-color: #fff;
}*/
.clear{clear:both}
/*----------------------------------------*/
/*  2. Header CSS
/*----------------------------------------*/
/*----------------------------------------*/
/*  2.1 top-link CSS
/*----------------------------------------*/
header .top-link {
  background: #585858 none repeat scroll 0 0;
}
.social-header {
  background: #4a4a4a none repeat scroll 0 0;
  float: left;
  padding: 11px 15px;
}
ul.social-header li {
  float: left;
  padding: 0 10px;
}
ul.social-header a {
  color: #969696;
  display: block;
  font-size: 18px;
  position: relative;
  text-align: center;
}
ul.social-header a:hover {
  color: #ee5050;
}
p.welcome-msg {
  color: #bebebe;
  float: left;
  font-size: 12px;
  margin: 0 0 0 15px;
  padding: 11px 0;
}
.top-menu {
  float: right;
  margin-right: -8px;
  width: 145px;
}
.top-menu ul li {
  float: left;
  position: relative;
}
.top-menu ul li a {
  color: #bebebe;
  cursor: pointer;
  display: block;
  font-size: 12px;
  line-height: 34px;
  margin-bottom: -2px;
  margin-top: 2px;
  padding: 0 9.6px;
  text-transform: uppercase;
  text-decoration: none;
  transition: all 300ms ease 0s;
}
.top-menu ul li ul {
  background: #393939 none repeat scroll 0 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 40px;
  transform: scaleY(0);
  transform-origin: 0 0 0;
  transition: all 0.5s ease 0s;
  visibility: hidden;
  width: 150px;
  z-index: 999;
}
.top-menu ul li:hover ul {
  opacity: 1;
  transform: scaleY(1);
  visibility: visible;
}
.top-menu ul li ul li {
  border: medium none;
  float: none;
  height: 34px;
  padding-left: 10px;
  transition: all 0.3s ease 0s;
}
.top-menu ul li ul li:hover{
  background: #515151 none repeat
}
.top-menu ul li ul li a {
  color: #bebebe;
  font-size: 13px;
  margin-top: 0px;
  line-height: 34px;
  text-decoration: none;
  transition: all 0.3s ease 0s;
  text-transform: inherit;
}
.top-menu ul li ul li a:hover{
  color: #ee5050;
}
/*----------------------------------------*/
/*  2.2 logo-and-cart CSS
/*----------------------------------------*/
.logo-and-cart{
    height: auto !important;
    padding: 10px 0;
    position: relative;
    z-index: 100;
}
.logo {
  float: left;
  padding: 30px 0;
  text-decoration: none !important;
}
.links li.first {
  padding-left: 0 !important;
}
.links li {
  display: inline;
}
.header-link ul li.first a::before {
    content: "\f007";
    line-height: 60px;
}
.header-link ul li a {
  position: relative;
  background: #464646;
  width: 20%;
  float: left;
  min-height: 138px;
  border-left: 2px solid #fff;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  color: #ffffff;
  font-family: Oswald;
  font-weight: 600;
  padding: 98px 0 20px;
}
.header-link ul li a::before {
  border: 2px solid #fff;
  border-radius: 100%;
  color: #fff;
  content: "\f004";
  display: inline-block;
  font: 30px/62px FontAwesome;
  height: 62px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  text-align: center;
  text-rendering: auto;
  top: 30px;
  width: 62px;
}
.header-link ul li.first a {
  border-left: 0 none;
}
.links li.last {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
  padding-right: 0 !important;
}
.header-link ul li.last a::before {
  content: "\f011";
}
.header-link ul li a:hover {
  background: #F15757;
}
.header-link ul li a.top-link-cart:before {
    content: "\f07a";
    line-height: 60px;
}
.header-link ul li a.top-link-checkout:before {
    content: "\f0f6";
    line-height: 60px;
    padding-left: 2px;
}
/*----------------------------------------*/
/*  2.3 main-menu-and-search CSS
/*----------------------------------------*/
.menu-area {
  background: #424141 none repeat scroll 0 0;
  margin-bottom: 30px;
  position: relative;
  z-index: 10;
}
.main-menu{}
.main-menu ul {}
.main-menu ul li {
  float: left;
  position: relative;
}
.main-menu ul li:hover a{
  background: #000;
}
.main-menu ul li a{
  color: #fff;
  display: block;
  font-family: Oswald;
  font-size: 16px;
  font-weight: 600;
  line-height: 30px;
  padding: 14px 25px;
  /*padding-top: 10px;
  margin-left: 20px;*/
  text-decoration: none;
  text-transform: uppercase;
}
.main-menu ul li a:hover{
  background: #ee5050 none repeat scroll 0 0;
  color: #fff; 
}
.main-menu ul li:first-child a{
  background: #ee5050 none repeat scroll 0 0;
  color: #fff;    
}
/* mega menu css */
.mega-menu {
  background: #222222 none repeat scroll 0 0;
  left: -131px;
  padding: 30px;
  padding-right: 10px;
  position: absolute;
  width: 1120px;
  visibility: hidden;
  opacity: 0;
  transform: scaleY(0);
  transform-origin: 0 0 0;
  transition: all 0.3s ease 0s;
}
.men{
  left: -229px; 
}
.blog{
  width: 300px;
  left: 0;
  padding-top: 5px;
  padding-right: 30px;
}
.blog .menu-inner{
  width: 100% 
}
.blog .menu-inner ul li a {
  background: inherit;
  color: #fff;
  font-size: 14px;
}
.main-menu ul li:hover .mega-menu{
  opacity: 1;
  transform: scaleY(1);
  visibility: visible;
  transition: all 0.3s ease 0s;
  z-index: 9999;  
}
.menu-inner {
  float: left;
  margin-right: 20px;
  width: 23.1%;
}
.menu-inner span a {
  background: #393939 !important;
  color: #fff !important;
  font-family: arial !important;
  font-size: 16px !important;
  font-weight: normal !important;
  line-height: 17px !important;
  padding: 12px !important;
  text-transform: uppercase !important;
  word-wrap: break-word;
}
.menu-inner span a:hover{
  background: #393939!important;
  color: #ee5050!important;
}
.menu-inner ul{}
.menu-inner ul li{
  border-bottom: 1px solid #343434;
  width: 100%;
}
.menu-inner ul li a {
  background: inherit !important;
  color: #999;
  font-family: arial !important;
  font-size: 12px;
  font-weight: normal;
  line-height: 10px;
  padding-left: 0 !important;
  position: relative;
  text-transform: capitalize;
  transition: all 0.3s ease 0s;
}
.menu-inner ul li:hover a {
  background: inherit!important;
  color: inherit;
}
.menu-inner ul li:first-child a {
  background: inherit;
}
.menu-inner ul li a:hover:before, .menu-inner ul li a:hover {
  color: #ee5050;
}
.menu-inner ul li a:before {
    content: "\f144";
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-family: FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #b0b0b0;
    margin-right: 10px;
    font-size: 14px;
    transition: all 0.3s ease 0s;
}
/* mobile menu css */
.mainmenu{
  margin-left: 15px;
}
.mainmenu ul{}
.mainmenu ul li{
  float: left;
}
.mainmenu ul li a{
  color: #505050;
  display: block;
  font-family: Oswald;
  font-size: 20px;
  font-weight: 600;
  line-height: 60px;
  padding: 5px 30px 0;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 300ms ease 0s;
}
.mainmenu ul li:hover a{
  background: #f06262 none repeat scroll 0 0;
  color: #fff;
}
.mainmenu ul li a.home{
  background: #454545 none repeat scroll 0 0;
  color: #fff;
}
.mainmenu ul li a:hover{}
.mainmenu ul li ul{
  background: #fff none repeat scroll 0 0;
  opacity: 0;
  position: absolute;
  visibility: hidden;
  width: 235px;
  z-index: 99;
  transform: scaleY(0);
  transform-origin: 0 0 0;
  transition: all 0.5s ease 0s;
}
.mainmenu ul li:hover ul{
  opacity: 1;
  transform: scaleY(1);
  visibility: visible;
}
.mainmenu ul li ul li{
  float: none;
  border-bottom: 1px solid #fff;
}
.mainmenu ul li ul li a{
  background: #ffa200 none repeat scroll 0 0 !important;
  color: #fff !important;
  font-size: 18px;
  line-height: 35px;
  padding: 6px 15px 0;
  transition: all 0.5s ease 0s;
}
.mainmenu ul li ul li:last-child{
  border-bottom: 0px solid #fff;
}
.mainmenu ul li ul li a:hover{
  padding-left: 20px;
  background: #505050!important;
}
.mean-container a.meanmenu-reveal {
  float: right;
}
.mobile-menu-area{
  display: none;
}
/* search icon */
.search-icon i {
    background: #585757 none repeat scroll 0 0;
    color: #8b8989;
    font-size: 17px;
    line-height: 37px;
    padding-left: 10px;
    padding-right: 10px;
    transition: all 0.3s ease 0s;
    width: 54px;
}
.search-icon:hover i{
  background: #EE5050;
  color: #fff;
}
.search-icon:hover .search-box{
  top: 130%;
  opacity: 1;
  visibility: visible;  
}
.search-box {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ccc;
    height: 55px;
    right: 0px;
    padding: 10px;
    position: absolute;
    top: 150%;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease 0s;
    width: 257px;
}
.search-content input {
    border: 1px solid #ccc;
    height: 31px;
    padding-left: 10px;
    width: 185px;
}

input {
    line-height: normal;
        color: inherit;
    font: inherit;
    margin: 0;
}
.search-content button.button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
}
button.button {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    cursor: pointer;
    margin: 0;
    overflow: visible;
    padding: 0;
    width: auto;
}

.cart-icon:hover .cart-box{
  top: 130%;
  opacity: 1;
  visibility: visible;  
}
.cart-box{
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ccc;
  right: -20px;
  padding: 16px;
  position: absolute;
  top: 150%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease 0s;
  width: 257px; 
}
.search-icon:hover i {
    background: #EE5050;
    color: #fff;
}
.search-icon i {
    background: #585757 none repeat scroll 0 0;
    color: #8b8989;
    font-size: 40px;
    line-height: 37px;
    padding-left: 10px;
    padding-right: 10px;
    transition: all 0.3s ease 0s;
    width: 37px;
}
.search-box {
  background: #fff none repeat scroll 0 0;
  border: 2px solid #ccc;
  height: 55px;
  right: 0px;
  padding: 10px;
  position: absolute;
  top: 150%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease 0s;
  width: 257px;
}
.search-content button.button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
}
.search-content .button span i {
  border: medium none;
  font-size: 14px;
  height: 31px;
  line-height: 31px;
  padding: 0;
  width: 34px;
  background: #424141;
  transition: all 0.3s ease 0s;
}
.search-content .button:hover span i{
  background: #EE5050;
  color: #fff;  
}
.search-content input {
  border: 1px solid #ccc;
  height: 31px;
  padding-left: 10px;
  width: 185px;
}
.search-area ul {
  float: right;
  margin-right: 15px;
}
.search-area ul li {
  float: left;
  margin-right: 10px;
  position: relative;
  margin-top: 10px;
}


.cart-icon::after {
  background: #585757 none repeat scroll 0 0;
  color: #fff;
  font-size: 20px;
  height: 25px;
  padding-left: 6px;
  position: absolute;
  right: -80px;
  top: -10px;
  width: 25px;
}

.top-cart-content li.item {
  float: left;
  margin: 0 0 10px;
  width: 235px;
}

.block-cart .mini-products-list .product-details .product-name, .block-cart .mini-products-list .product-details .nobr small {
  margin-bottom: 10px;
  width: 80%;
  word-wrap: break-word;
}

.top-cart-content button.button span span {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
  border: 0 none;
  margin-left: 0 !important;
  padding: 0 !important;
}
.top-cart-content button.button:hover span {
  background: #ee5050 none repeat scroll 0 0;
  border-color: #ee5050;
  color: #fff;
}
.top-cart-content .button a {
  color: #fff;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>/images/panner.png" alt=""></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
          <span class="sr-only" > Toggle navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button>
        
      </div>
      <div class="logo-and-cart">
            
              <div class="row">
                <div class="col-md-4 ">
                  <div class="logo">
                    <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>/files/image/image/13/logo.jpg" alt=""></a>
                  </div>
                </div>
                <div class="col-md-8 ">
                  <div class="header-link">
                    <ul class="links">
                      <li class="first"><a title="My Account" href="#">My Account</a></li>
                      <li><a title="My Wishlist" href="#">My Wishlist</a></li>
                      <li><a class="top-link-cart" title="My Cart" href="cart.html">My Cart</a></li>
                      <li><a class="top-link-checkout" title="Checkout" href="checkout.html">Checkout</a></li>
                      <li class=" last"><a class="a-login-link" title="Log In" href="login.html">Log In</a></li>
                    </ul>
                  </div>
                </div>
              </div>
           
        </div>
        <div class="main-menu-and-search">
          <div class="menu-area">
            <div class="row">
              <div class="main-menu">
                <div class="col-md-8">
                  <nav>
                    <ul>
                      <li><a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>/images/home.png" width="30px" height="30px" alt=""></a>
                      </li>
                       <li><a href="#">About us</a></li>
                      <li><a href="#">women</a>
                                <div class="mega-menu">
                                  <div class="menu-inner">
                                    <span><a href="#">Dresses</a></span>
                                    <ul>
                                      <li class="first"><a href="#">Cocktail</a></li>
                                      <li><a href="#">Day</a></li>
                                      <li><a href="#">Evening</a></li>
                                      <li><a href="#">Sports</a></li>
                                    </ul>
                                  </div>
                                  <div class="menu-inner">
                                    <span><a href="#">shoes</a></span>
                                    <ul>
                                      <li class="first"><a href="#">Sports</a></li>
                                      <li><a href="#">run</a></li>
                                      <li><a href="#">sandals</a></li>
                                      <li><a href="#">Books</a></li>
                                    </ul>
                                  </div>
                                  <div class="menu-inner">
                                    <span><a href="#">Handbags</a></span>
                                    <ul>
                                      <li class="first"><a href="#">Blazers</a></li>
                                      <li><a href="#">table</a></li>
                                      <li><a href="#">coats</a></li>
                                      <li><a href="#">kids</a></li>
                                    </ul>
                                  </div>
                                  <div class="menu-inner">
                                    <span><a href="#">Clothing</a></span>
                                    <ul>
                                      <li class="first"><a href="#">T-shirts</a></li>
                                      <li><a href="#">coats</a></li>
                                      <li><a href="#">Jackets</a></li>
                                      <li><a href="#">jeans</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <li><a href="#">men</a>
                                  <div class="mega-menu men">
                                    <div class="menu-inner">
                                      <span><a href="#">Dresses</a></span>
                                      <ul>
                                        <li class="first"><a href="#">Cocktail</a></li>
                                        <li><a href="#">Day</a></li>
                                        <li><a href="#">Evening</a></li>
                                        <li><a href="#">Sports</a></li>
                                      </ul>
                                    </div>
                                    <div class="menu-inner">
                                      <span><a href="#">shoes</a></span>
                                      <ul>
                                        <li class="first"><a href="#">Sports</a></li>
                                        <li><a href="#">run</a></li>
                                        <li><a href="#">sandals</a></li>
                                        <li><a href="#">Books</a></li>
                                      </ul>
                                    </div>
                                    <div class="menu-inner">
                                      <span><a href="#">Handbags</a></span>
                                      <ul>
                                        <li class="first"><a href="#">Blazers</a></li>
                                        <li><a href="#">table</a></li>
                                        <li><a href="#">coats</a></li>
                                        <li><a href="#">kids</a></li>
                                      </ul>
                                    </div>
                                    <div class="menu-inner">
                                      <span><a href="#">Clothing</a></span>
                                      <ul>
                                        <li class="first"><a href="#">T-shirts</a></li>
                                        <li><a href="#">coats</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">jeans</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              <li>
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                             <ul class="dropdown-menu">
                        <?php
                          $types = $this->requestAction('types/');
                          foreach ($types as $type)
                          {
                            ?>
                            <li><a href="<?php echo $this->webroot;?>types/view/<?php echo $type['Type']['id'];?>"><?php echo $type['Type']['name'];?></a></li>
                            <?php
                          }
                        ?>
                      </ul>
                      </li> 
                      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"> </span></a>
                      <ul class="dropdown-menu"> 
                       <?php
                                $posts = $this->requestAction('posts/');
                                foreach ($posts as $post)
                                {
                                  ?>
                                  <li><a href="<?php echo $this->webroot;?>posts/view/<?php echo $post['Post']['id'];?>"><?php echo $post['Post']['title'];?></a></li>
                              

                              <?php
                                }
                              ?>
                     </ul>
                      </li>
                                </li>
                                <li><a href="<?php echo $this->webroot;?>admin/Contacts/add">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="search-area">
                <div class="col-md-4">
                  <nav>
                    <ul>
                      <li>
                              <div class="search-icon">
                            <i> 
                            <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>/images/Search.png" alt="" width="30px" height="30px"></a></i>
                            <div class="search-box">
                              <div class="search-content">
                                        <input type="text" maxlength="128" class="input-text" value="" name="q" id="search" placeholder="search..." autocomplete="off">
                                        <button class="button" title="Search" type="submit"><span><i class="fa fa-search"></i></span></button>
                                    </div>
                            </div>
                          </div>
                              </li>
                              <li>

                                <div class="cart-icon">
                        <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>/images/cart.jpg" alt="" width="40px" height="40px"></a>
                          <div class="cart-box">
                              <div class="text-right cart-button">
                                <p style="text-align:right">
  Tổng Cộng:<span id="simpleCart_grandTotal" class="simpleCart_grandTotal">0 VND</span>
                (<span id="simpleCart_quantity"></span> Sản phẩm)
  </p>
                            <div class="text-right cart-button">
<a class="btn btn-danger simpleCart_empty" href="javascript:;">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Xóa Giỏ</a>
<a class="btn btn-success" href="<?php echo $this->webroot;?>orders/cart">
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
Mua Hàng
  </a>
</div>          </div> 
                    </div>
                    </div>
                              </li>
                    </ul>
                  </nav>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </nav>

</body>
</html>