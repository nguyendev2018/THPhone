<?php
$nguoidung = new Khachhang();
$dsnd = $nguoidung->getList();
?>

<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Quản lý người dùng</h3>
               <?php
               if (isset($_GET['edit']) && ($_GET['edit']) == 1) {
                $idnd = $_GET['idnd'];
                $nd = new Khachhang();
                $ndct = $nd->getListById($idnd);
                ?>
                <form action="admin.php?act=qlnd" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-4">                    
                         <div class="form-group" id="tennd">
                            <label for="exampleFormControlSelect1"> Tên người dùng<span>*</span></label>
                            <input type="text" class="form-control" name="tennd" required="required" value="<?php echo $ndct['tennd']; ?>" disabled>
                         </div>                     
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="username">
                            <label for="exampleFormControlSelect1"> User Name<span>*</span></label>
                            <input type="text" class="form-control" name="username" required="required" value="<?php echo $ndct['username']; ?>" disabled>
                         </div>
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="dequi">
                            <label for="exampleFormControlSelect1"> Email<span>*</span></label>
                            <input type="email" class="form-control" name="email" required="required" value="<?php echo $ndct['email']; ?>" disabled>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="dequi">
                            <label for="exampleFormControlSelect1"> Password<span>*</span></label>
                            <input type="password" class="form-control"  name="password" required="required" value="<?php echo $ndct['password']; ?>" disabled>
                         </div>
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="diachi">
                            <label for="exampleFormControlSelect1"> Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi"  value="<?php echo $ndct['diachi']; ?>" disabled>
                         </div>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group"  id="dienthoai">
                            <label for="exampleFormControlSelect1"> Điện thoại<span>*</span></label>
                            <input type="text" class="form-control"  name="dienthoai" value="<?php echo $ndct['dienthoai']; ?>" disabled>
                         </div>
                      </div>
                      <div class="form-group col-md-2">                         
                         <label for="exampleFormControlSelect1"> Phân quyền<span>*</span></label>
                         <select class="form-control" id="exampleFormControlSelect1" name="phanquyen">                               
                            <option value="0" <?php echo $ndct['phanquyen'] == 0 ? 'selected' : ''; ?>>Khách hàng</option>
                            <option value="1" <?php echo $ndct['phanquyen'] == 1 ? 'selected' : ''; ?>>Quản trị</option>
                         </select>                        
                      </div> 
                   </div>
                   <div class="form-group">
                      <input type="submit" class="btn btn-danger" name="update" value="Cập nhật tài khoản">
                      <input type="hidden" name="idnd" value="<?= $_GET['idnd'] ?>">
                   </div>
                </form> 
               <?php } else { ?>
                <form action="admin.php?act=qlnd" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-4">                    
                         <div class="form-group" id="tennd">
                            <label for="exampleFormControlSelect1"> Tên người dùng<span>*</span></label>
                            <input type="text" class="form-control" name="tennd" required="required">
                         </div>                     
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="username">
                            <label for="exampleFormControlSelect1"> User Name<span>*</span></label>
                            <input type="text" class="form-control" name="username" required="required">
                         </div>
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="dequi">
                            <label for="exampleFormControlSelect1"> Email<span>*</span></label>
                            <input type="email" class="form-control" name="email" required="required">
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="password">
                            <label for="exampleFormControlSelect1"> Password<span>*</span></label>
                            <input type="password" class="form-control"  name="password" required="required">
                         </div>
                      </div>
                      <div class="form-group col-md-4">
                         <div class="form-group"  id="diachi">
                            <label for="exampleFormControlSelect1"> Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" >
                         </div>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group"  id="dienthoai">
                            <label for="exampleFormControlSelect1"> Điện thoại</label>
                            <input type="text" class="form-control"  name="dienthoai">
                         </div>
                      </div>
                      <div class="form-group col-md-2">

                         <label for="exampleFormControlSelect1"> Phân quyền<span>*</span></label>
                         <select class="form-control" id="exampleFormControlSelect1" name="phanquyen">                               
                            <option value="0">Khách hàng</option>
                            <option value="1">Quản trị</option>
                         </select>

                      </div>                    
                   </div>
                   <div class="form-group">
                      <input type="submit" class="btn btn-danger" name="add" value="Thêm tài khoản">                           
                   </div>
                </form>
               <?php } ?>               
               <h3>Danh sách tài khoản</h3>
               <table class="table table-striped table-bordered table-sm" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Tên ND</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Phân quyền</th>  
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($dsnd as $nd) {
                     ?>
                      <tr>
                         <td><?php echo $i; ?></td>
                         <td><?php echo $nd['tennd']; ?></td>                                
                         <td><?php echo $nd['username']; ?></td>                                                                                 
                         <td><?php echo $nd['email']; ?></td>                                                                                 
                         <td><?php echo $nd['dienthoai']; ?></td>                                                                                 
                         <td><?php echo $nd['diachi']; ?></td>                                                                                 
                         <td><?php echo $nd['phanquyen'] == 1 ? 'Quản trị' : 'Khách hàng'; ?></td>                                                                                 
                         <td><a href="<?php echo 'admin.php?act=qlnd&edit=1&idnd=' . $nd['idnd']; ?>" class="btn btn-danger">Sửa</a></td>                         
                         <td><a href="<?php echo 'admin.php?act=qlnd&del=1&idnd=' . $nd['idnd']; ?>" class="btn btn-danger">Xóa</a></td>                         
                      </tr>
                      <?php
                      $i++;
                     }
                     ?> 
                  </tbody>        
               </table>
            </div>
         </div>
      </div>
   </div>  
</div>

