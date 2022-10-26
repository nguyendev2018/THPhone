<?php
$products = new Products();
$showDm = $products->showDm();
$theLoai = $products->theLoai();
$showProduct = $products->showProduct();
$count = count($showProduct);
?>
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
   <div class="container">
      <div class="breadcrumb-content">
         <ul>
            <li><a href="?">Trang chủ</a></li>
            <li class="active">Cửa hàng</li>
         </ul>
      </div>
   </div> 
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60 pt-sm-30">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 order-1 order-lg-2">
            <!-- shop-top-bar start -->
            <div class="shop-top-bar mt-30">
               <div class="shop-bar-inner">
                  <div class="product-view-mode">
                     <!-- shop-item-filter-list start -->
                     <ul class="nav shop-item-filter-list" role="tablist">
                        <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                     </ul>
                     <!-- shop-item-filter-list end -->
                  </div>
                  <div class="toolbar-amount">
                     <span>Từ 1 đến 12 của  <?php echo $count ?></span>
                  </div>
               </div>
               <!-- product-select-box start -->
               <div class="product-select-box">
               <div class="product-short">
                                    <p>Lọc theo:</p>
                                    <select class="nice-select">
                                            <option value="trending">Liên quan</option>
                                            <option value="sales">Tên (A - Z)</option>
                                            <option value="sales">Tên (Z - A)</option>
                                            <option value="rating">Giá (Thấp &gt; Cao)</option>
                                            <option value="date">Xếp hạng</option>
                                         
                                        </select>
                                </div>
               </div>
               <!-- product-select-box end -->
            </div>
            <!-- shop-top-bar end -->
            <!-- shop-products-wrapper start -->
            <div class="shop-products-wrapper">
               <div class="tab-content">
                  <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                     <div class="product-area shop-product-area">
                        <div class="row">
                          <?php
                          foreach ($showProduct as $data1):
                           ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                               <!-- single-product-wrap start -->
                               <div class="single-product-wrap">
                                  <div class="product-image">
                                     <a href="?act=single-product&idsp=<?php echo $data1['idsp'] ?>">
                                        <img src="upload/sanpham/<?php echo $data1['hinhanh']; ?>" alt="Li's Product Image">
                                     </a>
                                     <span class="sticker">Mới</span>
                                  </div>
                                  <div class="product_desc">
                                     <div class="product_desc_info">
                                        <div class="product-review">
                                           <h5 class="manufacturer">
                                              <a href="?act=single-product"><?php echo $data1['tendm'] ?></a>
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
                                        <h4><a class="product_name" href="?act=single-product"><?php echo $data1['tensp']; ?></a></h4>
                                        <div class="price-box">
                                           <span class="new-price"><?php echo number_format($data1['gia']) . "đ" ?></span>
                                        </div>
                                     </div>
                                     <div class="add-actions">
                                        <ul class="add-actions-link">
                                           <li class="add-cart active"><a href="?act=cart&action=addcart&idsp=<?php echo $data1['idsp'] ?>">Thêm giỏ hàng</a></li>
                                           <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                           <li><a class="links-details" href="?act=wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                               <!-- single-product-wrap end -->
                            </div>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
                  <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                     <div class="row">
                        <div class="col">
                          <?php
                          foreach ($showProduct as $data1):
                           ?>
                            <div class="row product-layout-list">
                               <div class="col-lg-3 col-md-5 ">
                                  <div class="product-image">
                                     <a href="?act=single-product">
                                        <img src="upload/sanpham/<?php echo $data1['hinhanh']; ?>" alt="Li's Product Image">
                                     </a>
                                     <span class="sticker">Mới</span>
                                  </div>
                               </div>
                               <div class="col-lg-5 col-md-7">
                                  <div class="product_desc">
                                     <div class="product_desc_info">
                                        <div class="product-review">
                                           <h5 class="manufacturer">
                                              <a href="?act=single-product"><?php echo $data1['tendm'] ?></a>
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
                                        <h4><a class="product_name" href="?act=single-product"><?php echo $data1['tensp']; ?></a></h4>
                                        <div class="price-box">
                                           <span class="new-price"><?php echo number_format($data1['gia']) . "đ" ?></span>
                                        </div>
                                        <p><?php echo $data1['chitietngan']; ?></p>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-4">
                                  <div class="shop-add-action mb-xs-30">
                                     <ul class="add-actions-link">
                                        <li class="add-cart"><a href="?act=cart&action=addcart&idsp=<?php echo $data1['idsp'] ?>">Thêm giỏ hàng</a></li>
                                        <li class="wishlist"><a href="?act=wishlist"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                     </ul>
                                  </div>
                               </div>
                            </div> 
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
                  <div class="paginatoin-area">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 pt-xs-15">
                           <p>Từ 1 đến 12 của  <?php echo $count ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <ul class="pagination-box pt-xs-20 pb-xs-15">
                              <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Lùi</a>
                              </li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li>
                                 <a href="#" class="Next"> Kế <i class="fa fa-chevron-right"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- shop-products-wrapper end -->
         </div>
         <div class="col-lg-3 order-2 order-lg-1">
            <!--sidebar-categores-box end  -->
            <!--sidebar-categores-box start  -->
            <div class="sidebar-categores-box">
               <div class="sidebar-title">
                  <h2>Cửa hàng</h2>
               </div>
               <!-- btn-clear-all start -->
               <!-- btn-clear-all end -->
               <!-- filter-sub-area start -->
               <!-- filter-sub-area end -->
               <!-- filter-sub-area start -->
               <div class="filter-sub-area pt-sm-10 pt-xs-10">
                  <h5 class="filter-sub-titel">Thể loại</h5>
                  <div class="categori-checkbox">
                     <ul>
                    
                       <?php foreach ($showDm as $dm) { ?>
                         <li><a href="?act=showdm&madm=<?php echo $dm['madm'] ?>"><?php echo $dm['tendm']; ?></a></li>
                       <?php } ?>
                    
                        <li><a href="?act=showdm&dequi=0">Điện thoại</a></li>
                        

                     </ul>
                  </div>
               </div>
               <!-- filter-sub-area end -->
               <!-- filter-sub-area start -->
               <div class="filter-sub-area pt-sm-10 pt-xs-10">
                  <h5 class="filter-sub-titel">Chọn dung lượng</h5>
                  <div class="size-checkbox">
                     <form action="#">
                        <ul>
                           <li><a href="?act=showdm&dungluong=32Gb">32Gb</a></li>
                           <li><a href="?act=showdm&dungluong=64Gb">64Gb</a></li>
                           <li><a href="?act=showdm&dungluong=128Gb">128Gb</a></li>
                           <li><a href="?act=showdm&dungluong=512Gb">521Gb</a></li>
                        </ul>
                     </form>
                  </div>
               </div>
               <!-- filter-sub-area end -->
               <!-- filter-sub-area start -->
               <div class="filter-sub-area pt-sm-10 pt-xs-10">
                  <h5 class="filter-sub-titel">Color</h5>
                  <div class="color-categoriy">
                     <form action="#">
                        <ul>
                           <li><span class="white"></span><a href="?act=showdm&mausac=trang">Trắng</a></li>
                           <li><span class="black"></span><a href="?act=showdm&mausac=den">Đen</a></li>
                           <li><span class="Orange"></span><a href="?act=showdm&mausac=do">Đỏ</a></li>
                           <li><span class="Blue"></span><a href="?act=showdm&mausac=xanh">Xanh</a></li>
                           <li><span class="yellow"></span><a href="?act=showdm&mausac=vang">Vàng</a></li>
                        </ul>
                     </form>
                  </div>
               </div>
               <!-- filter-sub-area end -->
            </div>
            <!--sidebar-categores-box end  -->
         </div>
      </div>
   </div>
</div>
<!-- Content Wraper Area End Here -->
