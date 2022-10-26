<style>
    span>img{
        position: absolute;
        top: 34px;
        right: 28px;
        width: 38px;
        display:block;
        cursor:pointer;
    }
</style>

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="?">Trang chủ</a></li>
                <li class="active">Đăng nhập</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12  mb-30">
                <!-- Login Form s-->
                <form action="?act=login&login=1" method="POST">
                    <div class="login-form">
                        <h4 class="login-title text-md-center">Đăng nhập</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label for="validationCustomemail">Tên đăng nhập</label>
                                <input class="mb-0 form-control " type="text" name="username" placeholder="Nhập tên người dùng">
                                <span style="color:red"><?php if (isset($_GET['login'])) {
                           echo $error_username;
                        } ?></span>
                            </div>

                            <div class="col-12 mb-20">
                                <label for="validationCustompassword">Mật khẩu</label>
                                <input style="position:relative" class="mb-0 form-control password" id="validationCustompassword" type="password" name="password" placeholder="Password"  aria-describedby="inputGroupPrepend">
                                <span style="color:red"><?php if (isset($_GET['login'])) {
                           echo $error_password;
                        } ?></span>
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Nhớ mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Quên mật khẩu</a>
                            </div>
                            <div class="col-md-2">
                                <input  type="submit" style="cursor: pointer;" value="Đăng nhập" name="dangnhap" class="register-button mt-0" ></input>
                            </div>
                        </div>
                        <?php
                    if(isset($msg_error)&&($msg_error!="")){
                        echo "<p style='color:red;font-size:15px'>Note:".$msg_error."</p>";
                    }
                ?>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
<!-- Begin Footer Area -->