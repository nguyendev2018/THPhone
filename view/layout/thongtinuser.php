
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="?act=register&register=1" method="post">
                    <div class="login-form">
                        <h4 class="login-title text-md-center"></h4>
                        <div class="row">
                            <div class="col-md-6 mb-20 ">
                                <label>Họ và tên</label>
                                <div class="bader" style="height: 50px;border: 1px solid;line-height: 50px;padding-left: 20px;">
                                <?=$dskh['tennd'];?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-20 ">
                                <label>Tên đăng nhập</label>
                                <div class="bader" style="height: 50px;border: 1px solid;line-height: 50px;padding-left: 20px;">
                                <?=$dskh['username'];?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Email </label>
                                <div class="bader" style="height: 50px;border: 1px solid;line-height: 50px;padding-left: 20px;">
                                <?=$dskh['email'];?>
                                </div>

                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Điện thoại </label>
                                <div class="bader" style="height: 50px;border: 1px solid;line-height: 50px;padding-left: 20px;">
                                    <?=$dskh['dienthoai'];?>
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Địa chỉ </label>
                                <div class="bader" style="height: 50px;border: 1px solid;line-height: 50px;padding-left: 20px;">
                                    <?=$dskh['diachi'];?>
                                </div>
                            </div>
                            <!-- <div class="col-md-12 mb-20">
                                <label>Xác nhận mật khẩu</label>
                                <input class="mb-0" name="xnmatkhau" type="password" placeholder="Xác nhận mật khẩu">
                            </div> -->
                          
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
<!-- Begin Footer Area -->