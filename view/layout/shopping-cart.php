
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active">Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-12">
                            
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Hủy bỏ</th>
                                                <th class="li-product-thumbnail">Hình ảnh</th>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="li-product-price">Giá tiền</th>
                                                <th class="li-product-quantity">Số lượng</th>
                                                <th class="li-product-subtotal">Tổng giá</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        <?php
                                            if(!empty($_SESSION["cart_view"])){
                                            $sub_total=0; 
                                            foreach ($_SESSION["cart_view"] as $item){
                                            $sub_total+=$item['total']; ?>
                                            <tr>
                                            <form action="index.php?act=cart&action=update_item&idsp=<?php echo $item['idsp'] ?>" method="post">
                                                <td class="li-product-remove"><a href="?act=cart&action=deletecart&idsp=<?php echo $item['idsp'] ?>"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail" ><a  href="#"><img style="width:100px;height:115px;" src="upload/sanpham/<?php echo $item['hinhanh'];?>" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#"><?php echo $item['tensp'] ?></a></td>
                                                <td class="li-product-price"><span class="amount"><?php echo number_format($item['gia'])."đ" ?></span></td>
                                                <td class="quantity">
                                                    <label>Số lượng</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="qty" value="<?php echo $item['qty'];  ?>" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                    <div class="coupon2">
                                                <input class="button" name="update_cart" value="Cập nhật" type="submit">
                                            </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount"><?php echo number_format($item['total'])."đ"; ?></span></td>
                                            </tr>
                                            </form> 
                                            <?php
                                                }
                                            }else {
                                                 echo "Bạn chưa có sản phẩm nào!!";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Thanh toán</h2>
                                            <ul>
                                                <li>Tổng giá <span><?php if(isset($sub_total)){
                                                    echo number_format($sub_total)."đ";
                                                }else{
                                                    echo 0;
                                                }  ?></span></li>
                                            </ul>
                                           <a href="?act=checkout">Tiến hành thanh toán </a>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
     