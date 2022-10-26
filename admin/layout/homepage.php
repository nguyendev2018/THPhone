<div class="page-content">
   <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
         <h4 class="mb-3 mb-md-0"> Dashboard</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
         <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
            <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
            <input type="text" class="form-control">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 col-xl-12 stretch-card">
         <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Khách hàng</h6>
                        <div class="dropdown mb-2">
                           <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-md-12 col-xl-5">
                           <h2 class="mb-2">
                             <?php
                             $kh = new Khachhang();
                             $dskh = $kh->getList();
                             $slkh = count($dskh);
                             echo $slkh;
                             ?>
                           </h2>
                        </div>                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Đơn hàng</h6>
                        <div class="dropdown mb-2">
                           <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                           <h3 class="mb-2">
                             <?php
                             $dh = new Hoadon();
                             $dsdh = $dh->getList();
                             $sldh = count($dsdh);
                             echo $sldh;
                             ?>
                           </h3>
                           <div class="d-flex align-items-baseline">
                             <?php
                             $dh = new Hoadon();
                             $year = date("Y");
                             $tonghdht = $dh->getListByYear($year);
                             $tonghdnt = $dh->getListByYear(($year - 1));
                             $tangtruong = (($tonghdht[0][0] - $tonghdnt[0][0]) / $tonghdnt[0][0]);
                             ?>
                              <p class="text-<?php echo $tangtruong > 0 ? 'success' : 'danger'; ?>">
                                 <span>
                                   <?php echo ($tangtruong * 100) . '%'; ?>
                                 </span>                                
                                 <i data-feather="arrow-<?php echo $tangtruong > 0 ? 'up' : 'down'; ?>" class="icon-sm mb-1"></i>
                              </p>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Doanh thu</h6>
                        <div class="dropdown mb-2">
                           <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-10 col-md-12 col-xl-7">
                           <h3 class="mb-2">
                             <?php
                             $dh = new Hoadon();
                             $year = date("Y");
                             $tongdtht = $dh->getRevenueByYear($year);
                             $tongdtnt = $dh->getRevenueByYear(($year - 1));
                             $tangtruong = (($tongdtht[0][0] - $tongdtnt[0][0]) / $tongdtnt[0][0]);
                             echo number_format($tongdtht[0][0]);
//                             echo number_format($tongdtnt[0][0]);
                             ?>
                           </h3>
                           <div class="d-flex align-items-baseline">
                              <p class="text-<?php echo $tangtruong > 0 ? 'success' : 'danger'; ?>">
                                 <span> <?php echo number_format($tangtruong * 100) . '%'; ?></span>
                                 <i data-feather="arrow-<?php echo $tangtruong > 0 ? 'up' : 'down'; ?>" class="icon-sm mb-1"></i>
                              </p>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- row -->



   <div class="row">
      <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Số đơn hàng mỗi tháng</h6>
                  <div class="dropdown mb-2">
                     <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                     </div>
                  </div>
               </div>
               <p class="text-muted mb-4">Số liệu dựa trên tổng đơn hàng hàng tháng.</p>
               <div id="chart-container">
                  <canvas id="graphCanvas"></canvas>
               </div>
            </div> 
         </div>
      </div>
      <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Dung lượng lưu trữ</h6>
                  <div class="dropdown mb-2">
                     <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                     </div>
                  </div>
               </div>
               <div id="progressbar1" class="mx-auto"></div>
               <div class="row mt-4 mb-3">
                  <div class="col-6 d-flex justify-content-end">
                     <div>
                        <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Tổng dung lượng <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                        <h5 class="font-weight-bold mb-0 text-right"><?php echo number_format((disk_total_space("/") / 1073741824), 0); ?>TB</h5>
                     </div>
                  </div>
                  <div class="col-6">
                     <div>
                        <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Dung lượng đã dùng</label>
                        <h5 class="font-weight-bold mb-0"><?php echo number_format((disk_free_space("/") / 1073741824), 0); ?>TB</h5>
                     </div>
                  </div>
               </div>
               <button class="btn btn-primary btn-block">Nâng cấp</button>
            </div>
         </div>
      </div>
   </div> <!-- row -->
</div>
<style type="text/css">
#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="admin/hoadon/js/jquery.min.js"></script>
<script type="text/javascript" src="admin/hoadon/js/Chart.min.js"></script>
<script>
 $(document).ready(function () {
   showGraph();
 });

 function showGraph()
 {
   {
     $.post("admin/hoadon/chart.php",
             function (data)
             {
               console.log(data);
               var name = [];
               var marks = [];

               for (var i in data) {
                 name.push(data[i].thang);
                 marks.push(data[i].soluong);
               }

               var chartdata = {
                 labels: name,
                 datasets: [
                   {
                     label: 'Số lượng đơn hàng mỗi tháng',
                     backgroundColor: '#4e5bf2',
                     borderColor: '#46d5f1',
                     hoverBackgroundColor: '#CCCCCC',
                     hoverBorderColor: '#666666',
                     data: marks
                   }
                 ]
               };

               var graphTarget = $("#graphCanvas");

               var barGraph = new Chart(graphTarget, {
                 type: 'bar',
                 data: chartdata
               });
             });
   }
 }
</script>



