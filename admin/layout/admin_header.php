<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Admin THphone</title>

      <link rel="stylesheet" href="admin/layout/assets/vendors/core/core.css">
      <!-- endinject -->
      <!-- plugin css for this page -->
      <link rel="stylesheet" href="admin/layout/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
      <!-- end plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="admin/layout/assets/fonts/feather-font/css/iconfont.css">
      <!-- endinject -->
      <!-- Layout styles -->  
      <link rel="stylesheet" href="admin/layout/assets/css/demo_1/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="../assets/images/favicon.png" />
      <script type="text/javascript" src="admin/ckeditor/ckeditor.js"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
      <!-- datatable -->
      <link href="admin/layout/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
      <script>
       window.dataLayer = window.dataLayer || [];
       function gtag() {
         dataLayer.push(arguments);
       }
       gtag('js', new Date());

       gtag('config', 'UA-146586338-1');
      </script>
   </head>
   <body>
      <div class="main-wrapper">
         <nav class="sidebar">
            <div class="sidebar-header">
               <a href="index.php" class="sidebar-brand">
                  <img src="upload/logo/4.jpg" width="80%">
               </a>
               <div class="sidebar-toggler not-active">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </div>
            <div class="sidebar-body">
               <ul class="nav">
                  <li class="nav-item nav-category">Main</li>
                  <li class="nav-item">
                     <a href="admin.php?act=homepage" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Dashboard</span>
                     </a>
                  </li>
                  <li class="nav-item nav-category">Quản lí</li>                
                  <li class="nav-item">
                     <a href="admin.php?act=qldmsp" class="nav-link">
                        <i class="link-icon" data-feather="layers"></i>
                        <span class="link-title">Danh mục</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qlsp" class="nav-link">
                        <i class="link-icon" data-feather="smartphone"></i>
                        <span class="link-title">Sản phẩm</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qlbl" class="nav-link">
                        <i class="link-icon" data-feather="message-circle"></i>
                        <span class="link-title">Bình luận</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qlnd" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Tài khoản</span>
                     </a>
                  </li>
                  
                  <li class="nav-item">
                     <a href="admin.php?act=qlhd" class="nav-link">
                        <i class="link-icon" data-feather="shopping-cart"></i>
                        <span class="link-title">Hóa đơn</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qlht" class="nav-link">
                        <i class="link-icon" data-feather="phone"></i>
                        <span class="link-title">Hỗ trợ</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qlbn" class="nav-link">
                        <i class="link-icon" data-feather="image"></i>
                        <span class="link-title">Banner</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="admin.php?act=qltt" class="nav-link">
                        <i class="link-icon" data-feather="edit-2"></i>
                        <span class="link-title">Tin tức</span>
                     </a>
                  </li>

               </ul>
            </div>
         </nav>

         <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
               <a href="#" class="sidebar-toggler">
                  <i data-feather="menu"></i>
               </a>
               <div class="navbar-content">
                  
                  <ul class="navbar-nav">
                     
                     <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="admin/layout/assets/images/faces/face1.jpg" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                           <div class="dropdown-header d-flex flex-column align-items-center">
                              <div class="figure mb-3">
                                 <img src="admin/layout/assets/images/faces/face1.jpg" alt="">
                              </div>
                              <div class="info text-center">
                                 <p class="name font-weight-bold mb-0"><?=$_SESSION['tennd'] ?></p>
                                 <p class="email text-muted mb-3"><?=$_SESSION['email'] ?></p>
                              </div>
                           </div>
                           <div class="dropdown-body">
                              <ul class="profile-nav p-0 pt-3">
                                 
                                 <li class="nav-item">
                                    <a href="admin.php?act=logout" class="nav-link">
                                       <i data-feather="log-out"></i>
                                       <span>Log Out</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>