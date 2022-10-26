
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="?">Trang chủ</a></li>
                <li class="active">Đăng ký</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="?act=register&register=1" method="post">
                    <div class="login-form">
                        <h4 class="login-title text-md-center">Đăng ký</h4>
                        <div class="row">
                            <div class="col-md-6 mb-20 ">
                                <label>Họ và tên</label>
                                <input  class="mb-0 email" name="tennd" type="text" placeholder="Nhập họ và tên">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_tennd;
                        } ?></span>
                            </div>
                            <div class="col-md-6 mb-20 ">
                                <label>Tên đăng nhập</label>
                                <input class="mb-0" name="username" type="text" placeholder="Nhập họ và tên">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_username;
                        } ?></span>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Email </label>
                                <input class="mb-0" name="email" type="email" placeholder="Nhập email">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_email;
                        } ?></span>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Điện thoại </label>
                                <input class="mb-0" type="number" name="dienthoai" placeholder="Nhập số điện thoại">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_dienthoai;
                        } ?></span>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Địa chỉ </label>
                                <input class="mb-0" type="text" name="diachi" placeholder="Nhập địa chỉ ">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_diachi;
                        } ?></span>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" name="password" type="password" placeholder="Nhập mật khẩu">
                                <span style="color:red"><?php if (isset($_GET['register'])) {
                           echo $error_password;
                        } ?></span>
                            </div>
                            <!-- <div class="col-md-12 mb-20">
                                <label>Xác nhận mật khẩu</label>
                                <input class="mb-0" name="xnmatkhau" type="password" placeholder="Xác nhận mật khẩu">
                            </div> -->
                            <div class="col-md-2">
                            <input class=" text-md-center btn-lg btn-info" type="submit" value="Đăng ký" name="register">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
<!-- Begin Footer Area -->
