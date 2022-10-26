<?php
$sanpham = new Products();
$dssanpham = $sanpham->getList();
$danhmuc = new danhmuc();
$dsdanhmuc = $danhmuc->getCategory();
?>
<div class="page-content">
   <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h3 class="card-title">Quản lý sản phẩm</h3>
               <?php
               if (isset($_GET['edit']) && ($_GET['edit']) == 1) {
                $idsp = $_GET['idsp'];
                $sanpham_chitiet = $sanpham->getProductId($idsp);
                ?>
                <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-2">
                         <label class="form-control-label" for="exampleFormControlSelect1">Danh mục<span>*</span></label>
                         <select class="form-control" id="exampleFormControlSelect1" name="madm" required="required">
                           <?php
                           foreach ($dsdanhmuc as $danhmuc) {
                            echo '<option value="' . $danhmuc['madm'] . '"';
                            if ($sanpham_chitiet[0]['madm'] == $danhmuc['madm']) {
                             echo ' selected';
                            }
                            echo '>' . $danhmuc['tendm'] . '</option>';
                           }
                           ?>                            
                         </select>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Tên sản phẩm<span>*</span></label>
                            <input type="text" class="form-control"  name="tensp" value="<?php echo $sanpham_chitiet[0]['tensp']; ?>" required="required">
                         </div> 
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Giá<span>*</span></label>
                            <input type="number" class="form-control" min="0" id="exampleFormControlInput1" name="gia" required="required" value="<?php echo $sanpham_chitiet[0]['gia']; ?>">
                         </div>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Số lượng<span>*</span></label>
                            <input type="number" class="form-control" min="0" id="exampleFormControlInput1" name="soluong" required="required" value="<?php echo $sanpham_chitiet[0]['soluong']; ?>">
                         </div>
                      </div><div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Dung lượng</label>
                            <input type="text" class="form-control" name="dungluong" value="<?php echo $sanpham_chitiet[0]['dungluong']; ?>">
                         </div> 
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Màu sắc</label>
                            <input type="text" class="form-control" name="mausac"  value="<?php echo $sanpham_chitiet[0]['mausac']; ?>">
                         </div> 
                      </div>
                      <div class="form-group">
                         <input type="hidden" class="form-control" name="mota" value="<?php echo $sanpham_chitiet[0]['mota']; ?>">
                      </div> 
                   </div>
                   <div class="row">
                      <div class="form-group col-md-3">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Chi tiết ngắn</label>
                            <textarea class="form-control" id="mota" rows="3" name="chitietngan" ><?php echo $sanpham_chitiet[0]['chitietngan']; ?></textarea>
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Đã bán</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="daban" min="0" value="<?php echo $sanpham_chitiet[0]['daban']; ?>">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Trạng thái</label>
                            <input type="number" class="form-control" name="trangthai" min="0" value="value="<?php echo $sanpham_chitiet[0]['trangthai']; ?>"">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Khuyến mãi</label>
                            <input type="number" class="form-control" name="khuyenmai" min="0" value="<?php echo $sanpham_chitiet[0]['khuyenmai']; ?>">
                         </div>                               
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh<span>*</span></label>
                               <input type="file" class="custom-file-input" name="hinhanh" >
                            </div>                                                                                                                     
                         </div>
                         <?php
                         if ($sanpham_chitiet[0]['hinhanh'] != "") {
                          echo '<img src="upload/sanpham/' . $sanpham_chitiet[0]['hinhanh'] . '" width="80px">';
                         }
                         ?> 
                      </div>
                      <div class="form-group col-md-9">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Chi tiết</label>
                            <textarea class="form-control" id="mota" rows="3" name="chitiet" required><?php echo $sanpham_chitiet[0]['chitiet']; ?></textarea>
                            <script>
                             CKEDITOR.replace('chitiet',
                                     {
                                       filebrowserBrowseUrl: 'admin/ckfinder/ckfinder.html',
                                       filebrowserImageBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Images',
                                       filebrowserFlashBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Flash',
                                       filebrowserUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                       filebrowserImageUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                       filebrowserFlashUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                     });
                            </script>  
                         </div>
                      </div>
                   </div>
                   <input type="submit" class="btn btn-danger" name="update" value="Cập nhật sản phẩm">
                   <input type="hidden" name="idsp" value="<?= $_GET['idsp'] ?>">              
                </form>
               <?php } else { ?>                
                <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data" >
                   <div class="row">
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Danh mục<span>*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="madm" required="required">
                              <?php
                              foreach ($dsdanhmuc as $danhmuc) {
                               echo '<option value="' . $danhmuc['madm'] . '">' . $danhmuc['tendm'] . '</option>';
                              }
                              ?>                            
                            </select>
                         </div>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Tên sản phẩm<span>*</span></label>
                            <input type="text" class="form-control" name="tensp" required="required">
                         </div> 
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Giá<span>*</span></label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" min="0" name="gia" required="required">
                         </div> 
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Số lượng<span>*</span></label>
                            <input type="number" class="form-control" min="0" id="exampleFormControlInput1" name="soluong" required="required">
                         </div>
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Dung lượng</label>
                            <input type="text" class="form-control" name="dungluong" >
                         </div> 
                      </div>
                      <div class="form-group col-md-2">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Màu sắc</label>
                            <input type="text" class="form-control" name="mausac" >
                         </div> 
                      </div>
                      <input type="hidden" class="form-control" name="mota" >
                   </div>
                   <div class="row">
                      <div class="form-group col-md-3">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Chi tiết ngắn</label>
                            <textarea class="form-control" id="mota" rows="3" name="chitietngan"></textarea>
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Đã bán</label>
                            <input type="number" class="form-control" min="0" id="exampleFormControlInput1" name="daban">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Trạng thái</label>
                            <input type="number" class="form-control" min="0" name="trangthai">
                         </div>
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Khuyến mãi</label>
                            <input type="number" class="form-control" min="0" name="khuyenmai">
                         </div>                               
                         <div class="form-group">
                            <div class="custom-file">
                               <label class="custom-file-label" for="exampleFormControlFile1">Hình ảnh<span>*</span></label>
                               <input type="file" class="custom-file-input" name="hinhanh" required="required">
                            </div>
                         </div>
                      </div>
                      <div class="form-group col-md-9">
                         <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Chi tiết</label>
                            <textarea class="form-control" id="mota" rows="3" name="chitiet"></textarea>
                            <script>
                             CKEDITOR.replace('chitiet',
                                     {
                                       filebrowserBrowseUrl: 'admin/ckfinder/ckfinder.html',
                                       filebrowserImageBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Images',
                                       filebrowserFlashBrowseUrl: 'admin/ckfinder/ckfinder.html?type=Flash',
                                       filebrowserUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                       filebrowserImageUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                       filebrowserFlashUploadUrl: 'admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                     });
                            </script>  
                         </div>
                      </div>
                   </div>
                   <input type="submit" class="btn btn-danger" name="add" value="Thêm sản phẩm">
                </form>
               <?php } ?>
               <br>      
            </div>
            <div class="card-body">
               <h3>Danh sách sản phẩm</h3>
               <table class="table table-bordered table-striped table-sm" id="dataTableExample">
                  <thead>
                     <tr>
                        <th>STT</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Trạng thái</th>               
                        <th>Số lượng</th>
                        <th>Hình ảnh</th>
                        <th>Khuyến mãi</th>
                        <th>Đã bán</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stt = 1;
                    foreach ($dssanpham as $sanpham) {
                     ?>
                      <tr>
                         <td><?php echo $stt; ?></td>
                         <td><?php echo $sanpham['madm']; ?></td>
                         <td><?php echo $sanpham['tensp']; ?></td>                 
                         <td><?php echo number_format($sanpham['gia']); ?></td>
                         <td><?php echo $sanpham['trangthai']; ?></td>
                         <td><?php echo $sanpham['soluong']; ?></td>
                         <td><img src="upload/sanpham/<?php echo $sanpham['hinhanh']; ?>" width="40px"></td>
                         <td><?php echo $sanpham['khuyenmai']; ?></td>                 
                         <td><?php echo $sanpham['daban']; ?></td>
                         <td><a href="<?php echo 'admin.php?act=qlsp&edit=1&idsp=' . $sanpham['idsp']; ?>" class="btn btn-danger">Sửa</a></td>
                         <td><a href="<?php echo 'admin.php?act=qlsp&del=1&idsp=' . $sanpham['idsp']; ?>" class="btn btn-danger">Xóa</a></td>
                      </tr>
                      <?php
                      $stt++;
                     }
                     ?>
                  </tbody>

               </table>
            </div>
         </div>
      </div>
   </div>
</div>



