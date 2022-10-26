<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>THphone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/vendor/images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="view/vendor/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/vendor/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="view/vendor/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="view/vendor/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="view/vendor/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="view/vendor/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="view/vendor/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="view/vendor/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="view/vendor/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="view/vendor/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="view/vendor/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="view/vendor/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="view/vendor/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="view/vendor/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="view/vendor/css/responsive.css">
    <!-- Modernizr js -->
    <script src="view/vendor/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Số điện thoại:</span><a href="#">(+123) 123 321 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    <li>
                                        <div class="ht-setting-trigger"><span>Cài đặt</span></div>
                                        <div class="setting ht-setting">
                                            <ul class="ht-setting-list">
                                                <li><a href="?act=checkout">Tài khoản</a></li>
                                                <li><a href="?act=checkout">Checkout</a></li>
                                                <li><a href="?act=login-register">Sign In</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Setting Area End Here -->
                                    <!-- Begin Currency Area -->
                                    <li>
                                        <span class="currency-selector-wrapper">Tiền tệ :</span>
                                        <div class="ht-currency-trigger"><span>USD $</span></div>
                                        <div class="currency ht-currency">
                                            <ul class="ht-setting-list">
                                                <li><a href="#">EUR €</a></li>
                                                <li class="active"><a href="#">USD $</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                    <!-- Begin Language Area -->
                                    <li>
                                        <ul style="display:flex">
                                        <?php
                                            if(isset($_SESSION['iduser'])){
                                                echo '<li style="padding-right:10px"> <a href="index.php?act=thongtinuser">'.$_SESSION['username'].'</a> </li>';
                                                echo '<li> <a href="index.php?act=logout">Logout</a> </li>';
                                            }else{
                                        ?>
                                            <li> <a href="index.php?act=login">Đăng nhập / </a> </li>
                                            <li> <a href="index.php?act=register">Đăng ký</a> </li>
                                            <?php }?>
                                        </ul>
                                    </li>
                                    <!-- Language Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="index.html">
                                    <img src="upload/logo/4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <!-- Begin Header Middle Searchbox Area -->
                            <form action="#" class="hm-searchbox">

                                <select class="nice-select select-search-category">
                                        <option value="0">Tất cả</option>                         
                                        <option value="10">Laptops</option>                     
                                        <option value="17">- -  Prime Video</option>                    
                                        <option value="20">- - - -  All Videos</option>                     
                                        <option value="21">- - - -  Blouses</option>                        
                                        <option value="22">- - - -  Evening Dresses</option>                
                                        <option value="23">- - - -  Summer Dresses</option>                     
                                        <option value="24">- - - -  T-shirts</option>                       
                                        <option value="25">- - - -  Rent or Buy</option>                        
                                        <option value="26">- - - -  Your Watchlist</option>                     
                                        <option value="27">- - - -  Watch Anywhere</option>                     
                                        <option value="28">- - - -  Getting Started</option>         
                                        <option value="18">- - - -  Computers</option>                      
                                    
                                    </select>
                                <input type="text" name="kyw" placeholder="Nhập từ khóa muốn tìm kiếm" required>
                                <input  type="submit" name="timkiem" value="Tìm kiếm" style="width: 129px;background: #fed700;text-align: center;font-size: 14px;border-radius: 5px;padding: 0"></input>
                            </form>
                            <!-- Header Middle Searchbox Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="header-middle-right">
                                <ul class="hm-menu">
                                    <!-- Begin Header Middle Wishlist Area -->
                                    <li class="hm-wishlist">
                                        <a href="?act=wishlist">
                                            <span class="cart-item-count wishlist-item-count">0</span>
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </li>
                                    <!-- Header Middle Wishlist Area End Here -->
                                    <!-- Begin Header Mini Cart Area -->
                                    <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                            </span>
                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                                <li>
                                                    <a href="?act=single-product" class="minicart-product-image">
                                                        <img src="view/vendor/images/product/small-size/5.jpg" alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="?act=single-product">Aenean eu tristique</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                </li>
                                                <li>
                                                    <a href="?act=single-product" class="minicart-product-image">
                                                        <img src="view/vendor/images/product/small-size/6.jpg" alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="?act=single-product">Aenean eu tristique</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                </li>
                                            </ul>
                                            <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                            <div class="minicart-button">
                                                <a href="?act=shopping-cart" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>View Full Cart</span>
                                                </a>
                                                <a href="?act=checkout" class="li-button li-button-fullwidth">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Header Mini Cart Area End Here -->
                                </ul>
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li class="dropdown-holder"><a href="?">Trang chủ</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="?act=shop">Cửa hàng</a>
                                            <ul class="megamenu hb-megamenu">
                                                <li>
                                                    <ul>
                                                        <li><a href="shop-3-column.html">Điện thoại</a></li>
                                                        <li><a href="shop-4-column.html">Tai nghe</a></li>
                                                        <li><a href="shop-left-sidebar.html">Phụ kiện</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                            <li class="dropdown-holder"><a href="?act=blog">Bài viết</a>
                                            </li>
                                            <li class="megamenu-holder"><a href="?">Tài khoản</a>
                                            <ul class="megamenu hb-megamenu">
                                                <li>
                                                    <ul>
                                                        <li><a href="?act=login">Đăng nhập</a></li>
                                                        <li><a href="?act=register">Đăng ký</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            </li>
                                            <li><a href="?act=about">Giới thiệu</a></li>
                                            <li><a href="?act=contact">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Bottom Menu Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>