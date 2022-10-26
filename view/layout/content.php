<!-- Header Area End Here -->
<!-- Begin Slider With Banner Area -->
<div class="slider-with-banner">
   <div class="container">
      <div class="row">
         <!-- Begin Slider Area -->
         <div class="col-lg-8 col-md-8">
            <div class="slider-area">
               <div class="slider-active owl-carousel">
                  <!-- Begin Single Slide Area -->
                  <?php
                  foreach ($dsbanner as $banner) {
                   echo '<div class="single-slide align-center-left  animation-style-01 "><a href="?act=shop"><img  src="upload/banner/' . $banner['img'] . '" alt="" /></a></div>
                            ';
                  }
                  ?>
               </div>
            </div>

         </div>
         <div class="col-lg-4 col-md-4 text-center pt-xs-30">
            <div class="li-banner">
               <a href="?act=shop">
                  <img src="upload/banner small/s10-lite-spec-ft-480x222-1.jpg" alt="">
               </a>
            </div>
            <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
               <a href="?act=shop">
                  <img src="upload/banner small/oppo-a9-2020-ft-480x222-1.jpg" alt="">
               </a>
            </div>
         </div>
         <!-- Single Slide Area End Here -->
      </div>
   </div>
</div>
<!-- Slider Area End Here -->
<!-- Begin Li Banner Area -->

<!-- Li Banner Area End Here -->
</div>
</div>
</div>
<!-- Slider With Banner Area End Here -->
<!-- Begin Product Area -->
<div class="product-area pt-60 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="li-product-tab">
               <ul class="nav li-product-menu">
                  <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Mới</span></a></li>
                  <li><a data-toggle="tab" href="#li-bestseller-product"><span>Khuyến mãi</span></a></li>
                  <li><a data-toggle="tab" href="#li-featured-product"><span>Nổi bật</span></a></li>
               </ul>
            </div>
            <!-- Begin Li's Tab Menu Content Area -->
         </div>
      </div>
      <div class="tab-content">
         <div id="li-new-product" class="tab-pane active show" role="tabpanel">
            <div class="row">
               <div class="product-active owl-carousel">
                 <?php
                 foreach ($dsmoi as $km) {
                  $giamoi = $km['gia'] - ($km['gia'] * $km['khuyenmai']) / 100;
                  ?>
                   <div class="col-lg-12">
                      <div class="single-product-wrap">
                         <div class="product-image">
                            <a href="?act=single-product&idsp=<?php echo $km['idsp'] ?>">
                               <img src="upload/sanpham/<?php echo $km['hinhanh'] ?>" alt="Lis Product Image">
                            </a>
                            <span class="sticker">Mới</span>
                         </div>
                         <div class="product_desc">
                            <div class="product_desc_info">
                               <div class="product-review">
                               </div>
                               <h4>
                                  <a class="product_name" href="?act=single-product">
                                    <?php echo $km['tensp'] ?>
                                  </a>
                               </h4>
                               <div class="price-box">
                                  <span class="new-price new-price-2"><?php echo number_format($giamoi) ?></span>
                                  <span class="old-price"><?php echo number_format($km['gia']) ?></span>
                                  <span class="discount-percentage"><?php echo $km['khuyenmai'] ?> %</span>
                               </div>
                            </div>
                            <div class="add-actions">
                               <ul class="add-actions-link">
                                  <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $km['idsp'] ?>">Thêm vào giỏ</a></li>
                                  <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                  <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <?php
                  }
                  ?>
               </div>
            </div>
         </div>
         <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
            <div class="row">
               <div class="product-active owl-carousel">
                 <?php
                 foreach ($dskhuyenmai as $km) {
                  $giamoi = $km['gia'] - ($km['gia'] * $km['khuyenmai']) / 100;
                  ?>
                   <div class="col-lg-12">
                      <div class="single-product-wrap">
                         <div class="product-image">
                            <a href="?act=single-product&idsp=<?php echo $km['idsp'] ?>">
                               <img src="upload/sanpham/<?php echo $km['hinhanh'] ?>" alt="Lis Product Image">
                            </a>
                            <span class="sticker">Mới</span>
                         </div>
                         <div class="product_desc">
                            <div class="product_desc_info">
                               <div class="product-review">
                               </div>
                               <h4>
                                  <a class="product_name" href="?act=single-product">
                                    <?php echo $km['tensp'] ?>
                                  </a>
                               </h4>
                               <div class="price-box">
                                  <span class="new-price new-price-2"><?php echo number_format($giamoi) ?></span>
                                  <span class="old-price"><?php echo number_format($km['gia']) ?></span>
                                  <span class="discount-percentage"><?php echo $km['khuyenmai'] ?> %</span>
                               </div>
                            </div>
                            <div class="add-actions">
                               <ul class="add-actions-link">
                                  <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $km['idsp'] ?>">Thêm vào giỏ</a></li>
                                  <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                  <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <?php
                  }
                  ?>
               </div>
            </div>
         </div>
         <div id="li-featured-product" class="tab-pane" role="tabpanel">
            <div class="row">
               <div class="product-active owl-carousel">
                 <?php
                 foreach ($dsnoibat as $nb) {
                  $giamoi = $nb['gia'] - ($nb['gia'] * $nb['khuyenmai']) / 100;
                  ?>
                   <div class="col-lg-12">
                      <div class="single-product-wrap">
                         <div class="product-image">
                            <a href="?act=single-product&idsp=<?php echo $nb['idsp'] ?>">
                               <img src="upload/sanpham/<?php echo $nb['hinhanh'] ?>" alt="Lis Product Image">
                            </a>
                            <span class="sticker">Mới</span>
                         </div>
                         <div class="product_desc">
                            <div class="product_desc_info">
                               <div class="product-review">
                               </div>
                               <h4>
                                  <a class="product_name" href="?act=single-product">
                                    <?php echo $nb['tensp'] ?>
                                  </a>
                               </h4>
                               <div class="price-box">
                                  <span class="new-price new-price-2"><?php echo number_format($giamoi) ?></span>
                                  <span class="old-price"><?php echo number_format($nb['gia']) ?></span>
                                  <span class="discount-percentage"><?php echo $nb['khuyenmai'] ?> %</span>
                               </div>
                            </div>
                            <div class="add-actions">
                               <ul class="add-actions-link">
                                  <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $nb['idsp'] ?>">Thêm vào giỏ</a></li>
                                  <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                  <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner">
   <div class="container">
      <div class="row">
         <!-- Begin Single Banner Area -->
         <div class="col-lg-4 col-md-4 text-center">
            <div class="single-banner">
               <a href="#">
                  <img src="upload/img nho/380x145_3-min.jpg" alt="Li's Static Banner">
               </a>
            </div>
         </div>
         <!-- Single Banner Area End Here -->
         <!-- Begin Single Banner Area -->
         <div class="col-lg-4 col-md-4 text-center pt-xs-30">
            <div class="single-banner">
               <a href="#">
                  <img src="upload/img nho/380x145-min.jpg" alt="Li's Static Banner">
               </a>
            </div>
         </div>
         <!-- Single Banner Area End Here -->
         <!-- Begin Single Banner Area -->
         <div class="col-lg-4 col-md-4 text-center pt-xs-30">
            <div class="single-banner">
               <a href="#">
                  <img src="upload/img nho/380145_2-min.jpg" alt="Li's Static Banner">
               </a>
            </div>
         </div>
         <!-- Single Banner Area End Here -->
      </div>
   </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-60 pb-45">
   <div class="container">
      <div class="row">
         <!-- Begin Li's Section Area -->
         <div class="col-lg-12">
            <div class="li-section-title">
               <h2>
                  <span>Phụ kiện </span>
               </h2>
            </div>
            <div class="row">
               <div class="product-active owl-carousel">
                 <?php
                 foreach ($dsphukien as $pk) {
                  $giamoi = $pk['gia'] - ($pk['gia'] * $pk['khuyenmai']) / 100;
                  ?>
                   <div class="col-lg-12">
                      <div class="single-product-wrap">
                         <div class="product-image">
                            <a href="?act=single-product&idsp=<?php echo $pk['idsp'] ?>">
                               <img src="upload/sanpham/<?php echo $pk['hinhanh'] ?>" alt="Lis Product Image">
                            </a>
                            <span class="sticker">Mới</span>
                         </div>
                         <div class="product_desc">
                            <div class="product_desc_info">
                               <div class="product-review">
                               </div>
                               <h4>
                                  <a class="product_name" href="?act=single-product">
                                    <?php echo $pk['tensp'] ?>
                                  </a>
                               </h4>
                               <div class="price-box">
                                  <span class="new-price new-price-2"><?php echo number_format($giamoi) ?></span>
                                  <span class="old-price"><?php echo number_format($pk['gia']) ?></span>
                                  <span class="discount-percentage"><?php echo $pk['khuyenmai'] ?> %</span>
                               </div>
                            </div>
                            <div class="add-actions">
                               <ul class="add-actions-link">
                                  <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $pk['idsp'] ?>">Thêm vào giỏ</a></li>
                                  <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                  <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <?php
                  }
                  ?>
               </div>
            </div>
         </div>
         <!-- Li's Section Area End Here -->
      </div>
   </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <!-- Begin Li's Static Home Image Area -->
            <div class="li-static-home-image"></div>
            <!-- Li's Static Home Image Area End Here -->
            <!-- Begin Li's Static Home Content Area -->
            <div class="li-static-home-content">
               <p>Giảm giá<span>-20% Off</span>Trong tuần này</p>
               <h2>Sản phẩm nổi bật</h2>
               <h2>Meito Accessories 2018</h2>
               <p class="schedule">
                  Giá từ
                  <span> 5.000.000</span>
               </p>
               <div class="default-btn">
                  <a href="?act=shop" class="links">Đặt hàng</a>
               </div>
            </div>
            <!-- Li's Static Home Content Area End Here -->
         </div>
      </div>
   </div>
</div>
<!-- Li's Static Home Area End Here -->
<!-- Begin Li's Trending Product Area -->
<section class="product-area li-trending-product pt-60 pb-45">
   <div class="container">
      <div class="row">
         <!-- Begin Li's Tab Menu Area -->
         <div class="col-lg-12">
            <div class="li-product-tab li-trending-product-tab">
               <h2>
                  <span>Tai nghe</span>
               </h2>

            </div>
            <!-- Begin Li's Tab Menu Content Area -->
            <div class="tab-content li-tab-content li-trending-product-content">
               <div id="home1" class="tab-pane show fade in active">
                  <div class="row">
                     <div class="product-active owl-carousel">
                       <?php
                       foreach ($dstainghe as $tn) {
                        $giamoi = $tn['gia'] - ($tn['gia'] * $tn['khuyenmai']) / 100;
                        ?>
                         <div class="col-lg-12">
                            <div class="single-product-wrap">
                               <div class="product-image">
                                  <a href="?act=single-product&idsp=<?php echo $tn['idsp'] ?>">
                                     <img src="upload/sanpham/<?php echo $tn['hinhanh'] ?>" alt="Lis Product Image">
                                  </a>
                                  <span class="sticker">Mới</span>
                               </div>
                               <div class="product_desc">
                                  <div class="product_desc_info">
                                     <div class="product-review">
                                     </div>
                                     <h4>
                                        <a class="product_name" href="?act=single-product">
                                          <?php echo $tn['tensp'] ?>
                                        </a>
                                     </h4>
                                     <div class="price-box">
                                        <span class="new-price new-price-2"><?php echo number_format($giamoi) ?></span>
                                        <span class="old-price"><?php echo number_format($tn['gia']) ?></span>
                                        <span class="discount-percentage"><?php echo $tn['khuyenmai'] ?> %</span>
                                     </div>
                                  </div>
                                  <div class="add-actions">
                                     <ul class="add-actions-link">
                                        <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $tn['idsp'] ?>">Thêm vào giỏ</a></li>
                                        <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <?php
                        }
                        ?>
                     </div>
                  </div>
               </div>
               <div id="home2" class="tab-pane fade">
                  <div class="row">
                     <div class="product-active owl-carousel">
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product&idsp=<?php echo $km['idsp'] ?>">
                                    <img src="view/vendor/images/product/large-size/11.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product&idsp=<?php echo $km['idsp'] ?>">
                                    <img src="view/vendor/images/product/large-size/7.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product&idsp=<?php echo $km['idsp'] ?>  ">
                                    <img src="view/vendor/images/product/large-size/9.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/5.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/7.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/5.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                     </div>
                  </div>
               </div>
               <div id="home3" class="tab-pane fade">
                  <div class="row">
                     <div class="product-active owl-carousel">
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/3.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/7.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/9.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/1.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/11.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Graphic Corner</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Accusantium dolorem1</a></h4>
                                    <div class="price-box">
                                       <span class="new-price">$46.80</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                        <div class="col-lg-12">
                           <!-- single-product-wrap start -->
                           <div class="single-product-wrap">
                              <div class="product-image">
                                 <a href="?act=single-product">
                                    <img src="view/vendor/images/product/large-size/9.jpg" alt="Li's Product Image">
                                 </a>
                                 <span class="sticker">New</span>
                              </div>
                              <div class="product_desc">
                                 <div class="product_desc_info">
                                    <div class="product-review">
                                       <h5 class="manufacturer">
                                          <a href="?act=shop">Studio Design</a>
                                       </h5>
                                       <div class="rating-box">
                                          <ul class="rating">
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <h4><a class="product_name" href="?act=single-product">Mug Today is a good day</a></h4>
                                    <div class="price-box">
                                       <span class="new-price new-price-2">$71.80</span>
                                       <span class="old-price">$77.22</span>
                                       <span class="discount-percentage">-7%</span>
                                    </div>
                                 </div>
                                 <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active"><a href="?act=shopping-cart">Thêm vào giỏ</a></li>
                                       <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                       <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- single-product-wrap end -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Tab Menu Content Area End Here -->
         </div>
         <!-- Tab Menu Area End Here -->
      </div>
   </div>
</section>
<!-- Li's Trending Product Area End Here -->
<!-- Begin Li's Trendding Products Area -->