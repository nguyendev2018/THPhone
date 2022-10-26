
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active">Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here --> 
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <!--Accordion Start-->
                                <?php
                                if(isset($_SESSION['iduser'])){
                                $idnd=$_SESSION['iduser'];
                                $products=new Cart();
                                $show_user=$products->show_user($idnd);   
                                $tennd=$show_user["tennd"];
                                $diachi=$show_user["diachi"];
                                $email=$show_user["email"];
                                $dienthoai=$show_user["dienthoai"];
                            
                            }else { 
                                $idnd="";
                                $tennd="";
                                $diachi="";
                                $email="";
                                $dienthoai="";
                                echo `<h3><a href="?act=login" id="showlogin">Nhấn vào đây để đăng nhập</a></h3>`;
                            }
                                
                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <form action="index.php?act=checkout&idnd=<?php echo $idnd; ?>" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                           
                                <div class="checkbox-form">
                                    <h3>Hóa đơn chi tiết</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Họ Tên<span class="required">*</span></label>
                                                <input placeholder="" name="tennd" value="<?php echo $tennd ?>" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input placeholder="Address" value="<?php echo $diachi ?>" name="diachi" type="text">
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email  <span class="required">*</span></label>
                                                <input name="email" placeholder="" value="<?php echo $email ?>" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Điện thoại  <span class="required">*</span></label>
                                                <input name="dienthoai" value="<?php echo $dienthoai ?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                             
                                </div>
                           
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Hàng của bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-total">Toàn bộ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 

                                        $sub_total=0;
                                        foreach ($_SESSION["cart_view"] as $item){
                                            $sub_total+=$item['total'];
                                            
                                        ?>
                                            <tr class="cart_item">
                                              <td class="cart-product-name"> <?php echo $item["tensp"]  ?><strong class="product-quantity"> × <?php echo $item["qty"] ?></strong></td>
                                              <td class="cart-product-total"><span class="amount"><?php echo number_format($item["gia"])."đ" ?></span></td>  
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Tổng số tiền</th>
                                                <td><strong><span class="amount"><?php echo number_format($sub_total)."đ" ?></span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Chuyển tiền trực tiếp qua ngân hàng
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Order ID của bạn như là tài liệu tham khảo thanh toán. Chỗ đặt của bạn sẽ không được vận chuyển cho đến khi quỹ đã xóa trong tài khoản của chúng tôi.</p>
                                              </div>
                                            </div>
                                          </div>                                                                                
                                        </div>         
                                          </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input name="place_oder" value="Đặt hàng" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                       
                    </div>
                    
            <!--Checkout Area End-->
    
