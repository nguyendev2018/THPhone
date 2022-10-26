
<?php
$Products = new Products();
$idsp = $_GET['idsp'];
$show_one_bl = $Products->show_one_bl($idsp);
$ngay = date("Y") . ":" . date("m") . ":" . date("d") . ":" . date("H") . ":" . date("i") . ":" . date("s");
if (isset($_POST['confirm']) && isset($_SESSION['iduser'])) {

 $idnd = $_SESSION['iduser'];
 $noidung = $_POST['noidung'];
 $insert_bl = $Products->insert_bl($idnd, $idsp, $noidung, $ngay);
 if ($insert_bl) {

  echo "<script>window.history.back()</script>";
 }
}if (isset($_POST['confirm']) && !isset($_SESSION['iduser'])) {
 echo "<script>window.open('index.php?act=login','_self', 1);</script>";
}

$Products = new Products();
$show_detail_products = $Products->show_detail_products($idsp);
foreach ($show_detail_products as $data):
 ?>
 <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
       <!-- Begin Header Area -->

       <!-- Header Area End Here -->
       <!-- Begin Li's Breadcrumb Area -->
       <div class="breadcrumb-area">
          <div class="container">
             <div class="breadcrumb-content">
                <ul>
                   <li><a href="index.php?act=home">Trang Chủ</a></li>
                   <li class="active">Chi Tiết Sản Phẩm</li>
                </ul>
             </div>
          </div>
       </div>
       <!-- Li's Breadcrumb Area End Here -->
       <!-- content-wraper start -->
       <div class="content-wraper">
          <div class="container">
             <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                   <!-- Product Details Left -->
                   <div class="product-details-left">
                      <div class="product-details-images slider-navigation-1">
                         <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="upload/sanpham/<?php echo $data['hinhanh']; ?>" data-gall="myGallery">
                               <img src="upload/sanpham/<?php echo $data['hinhanh']; ?>" alt="product image">
                            </a>
                         </div>
                      </div>
                   </div>
                   <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                   <div class="product-details-view-content pt-60">
                      <div class="product-info">
                         <h2><?php echo $data['tensp']; ?></h2>
                         <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                               <li><i class="fa fa-star-o"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                               <li class="no-star"><i class="fa fa-star-o"></i></li>
                               <li class="no-star"><i class="fa fa-star-o"></i></li>

                            </ul>
                         </div>
                         <div class="price-box pt-20">
                            <span class="new-price new-price-2"><?php echo number_format($data['gia']) . "đ"; ?></span>
                         </div>
                         <div class="product-desc">
                            <p>
                               <span><?php echo $data['chitietngan'] ?>
                               </span>
                            </p>
                         </div>
                         <div class="single-add-to-cart">
                            <form action="index.php?act=cart&action=addcart2&idsp=<?php echo $data['idsp'] ?>" class="cart-quantity" method="post">
                               <div class="quantity">
                                  <label>Số lượng</label>
                                  <div class="cart-plus-minus">
                                     <input name="qty" class="cart-plus-minus-box" value="1" type="text">
                                     <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                     <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                  </div>
                               </div>
                               <input style="width:219px;" type="submit" name="addcart" class="add-to-cart" value="Thêm giỏ hàng" >
                            </form>
                         </div>
                         <div class="product-additional-info pt-25">
                            <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào danh sách yêu thích</a>
                            <div class="product-social-sharing pt-25">
                               <ul>
                                  <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                  <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                  <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                  <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                               </ul>
                            </div>
                         </div>
                         <div class="block-reassurance">
                            <ul>
                               <li>
                                  <div class="reassurance-item">
                                     <div class="reassurance-icon">
                                        <i class="fa fa-check-square-o"></i>
                                     </div>
                                     <p>Chính sách bảo mật </p>
                                  </div>
                               </li>
                               <li>
                                  <div class="reassurance-item">
                                     <div class="reassurance-icon">
                                        <i class="fa fa-truck"></i>
                                     </div>
                                     <p>Chính sách giao hàng</p>
                                  </div>
                               </li>
                               <li>
                                  <div class="reassurance-item">
                                     <div class="reassurance-icon">
                                        <i class="fa fa-exchange"></i>
                                     </div>
                                     <p> Chính sách hoàn trả </p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div> 
             </div>
          </div>
       </div>
       <!-- content-wraper end -->
       <!-- Begin Product Area -->
       <div class="product-area pt-35">
          <div class="container">
             <div class="row">
                <div class="col-lg-12">
                   <div class="li-product-tab">
                      <ul class="nav li-product-menu">
                      <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                         <li><a data-toggle="tab" href="#reviews"><span>Đánh giá </span></a></li>
                      </ul>               
                   </div>
                   <!-- Begin Li's Tab Menu Content Area -->
                </div>
             </div>
             <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                   <div class="product-description">
                      <span><?php echo $data['chitiet']; ?></span>
                   </div>
                </div>
                <div id="reviews" class="tab-pane" role="tabpanel">
                   <div class="product-reviews">
                      <div class="product-details-comment-block">
                         <div class="comment-review">
                            <span>Grade</span>
                            <ul class="rating">
                               <li><i class="fa fa-star-o"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                               <li class="no-star"><i class="fa fa-star-o"></i></li>
                               <li class="no-star"><i class="fa fa-star-o"></i></li>
                            </ul>
                         </div>
                         <?php foreach ($show_one_bl as $data1): ?>
                          <div class="comment-author-infos pt-25">
                             <span><?php echo $data1['username'] ?></span><br>
                             <span style="font-size:12px;margin-left:10px;"> - <?php echo $data1['noidung'] ?></span>
                             <em><?php echo $data1['ngayBinhluan'] ?></em>
                          </div>
                         <?php endforeach ?>
                         <div class="review-btn">
                            <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết bình luận</a>
                         </div>
                         <!-- Begin Quick View | Modal Area -->
                         <div class="modal fade modal-wrapper" id="mymodal" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                  <div class="modal-body">
                                     <h3 class="review-page-title">Viết bình luận</h3>
                                     <div class="modal-inner-area row">
                                        <div class="col-lg-6">
                                           <div class="li-review-content">
                                              <!-- Begin Feedback Area -->
                                              <div class="feedback-area">
                                                 <div class="feedback">
                                                    <form action="#" method="post">
                                                       <p class="your-opinion">
                                                          <label>Đánh giá</label>
                                                          <span>
                                                             <select class="star-rating">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                             </select>
                                                          </span>
                                                       </p>
                                                       <p class="feedback-form">
                                                          <label for="feedback">Viết bình luận</label>
                                                          <input id="feedback" name="noidung" cols="45" rows="8" aria-required="true"></i>
                                                       </p>
                                                       <div class="feedback-input">
                                                          <div class="feedback-btn pb-15">
                                                             <a href="#" class="close" data-dismiss="modal" aria-label="Close">Đóng</a>
                                                             <input style="background: #242424;color: #fff !important;width: 80px;font-size: 14px;height: 30px;line-height: 30px;text-align: center;left: 110px;right: auto;top: 0;display: block;: all 0.3s ease-in-out;" type="submit"  name="confirm" Value="Đồng ý"></a>
                                                          </div>
                                                       </div>
                                                    </form>
                                                 </div>
                                              </div>
                                              <!-- Feedback Area End Here -->
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>   
                         <!-- Quick View | Modal Area End Here -->
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
 </body>
<?php endforeach ?>
</html>
