<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="?">Trang chủ</a></li>
                <li class="active">Bài viết</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">
                    <div class="li-blog-sidebar ">
                        <h4 class="li-blog-sidebar-title ">Tin tức mới</h4>
                        <?php foreach($dstintucmoi as $ttmoi) 
                                echo ' <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="?act=blog-details&idtt='.$ttmoi['idtt'].'">
                                        <img style="width:70px" src="upload/tintuc/'.$ttmoi['img'].'" alt="">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="?act=blog-details&idtt='.$ttmoi['idtt'].'">'.$ttmoi['title'].'</a></span>
                                    <span class="li-post-date">
                                        <time datetime="2017-10-03T08:50:40+00:00">' . date("d M", strtotime($ttmoi['ngaydang'])) . '</time>
                                    </span>
                                </div>
                                    </div>' ?>
                    </div>
                    <div class="li-blog-sidebar">
                        <h4 class="li-blog-sidebar-title">Xem gần đây</h4>
                        <?php
                    if (isset($_SESSION['ttgd']) && $_SESSION['ttgd']) {
                        $arr = array_reverse($_SESSION['ttgd']);
                        $count = count($_SESSION['ttgd']);
                        if (!empty($_SESSION['ttgd'])) {
                           
                                for ($i = 0; $i <= 2 && $i < $count; $i++) {
                                    $idtt = $arr[$i];
                                    $dstt=$tintuc->getNewstt($idtt);    
                                    echo '<div class="li-recent-post pb-30">
                                        <div class="li-recent-post-thumb">
                                            <a href="?act=blog-details&idtt='.$dstt['idtt'].'">
                                                <img style="width:70px" src="upload/tintuc/'.$dstt['img'].'" alt="">
                                            </a>
                                        </div>
                                        <div class="li-recent-post-des">
                                            <span><a href="?act=blog-details&idtt='.$dstt['idtt'].'">'.$dstt['title'].'</a></span>
                                            <span class="li-post-date"> <?php echo date("d-m-Y") ?>
                            </span>
                    </div>
                </div>'; } } } else { echo "chưa có tin tức xem gần đây"; } ?>
            </div>
        </div>

    </div>

    <div class="col-lg-9 order-lg-2 order-1">
        <div class="row li-main-content">
            <?php 
                                foreach ($dstintuc as $tt){
                                    // $matk =$tt['idnd'];
                                    // $taikhoan = info_acc($matk)[0];
                                    $link = "index.php?act=blog-details&idtt=".$tt['idtt']; 
                                    echo '<div class="col-lg-6 col-md-6">
                                        <div class="li-blog-single-item pb-25">
                                            <div class="li-blog-banner">

                                                <a href="'.$link.'"><img class="img-full" src="upload/tintuc/'.$tt['img'].'" alt=""></a>
                                            </div>
                                            <div class="li-blog-content">
                                                <div class="li-blog-details">
                                                    <h3 class="li-blog-heading pt-25"><a href="'.$link.'">'.$tt['title'].'</a></h3>
                                                    <div class="li-blog-meta">
                                                        <a class="author" href="#"><i class="fa fa-user"></i></a>
                                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i>'.$tt['ngaydang'].'</a>
                                                    </div>
                                                    <p>'.$tt['content'].'</p>
                                                    <a class="read-more" href="'.$link.'">Read More...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>


            <div class="col-lg-12">
                <div class="li-paginatoin-area text-center pt-25">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="li-pagination-box">
                                <?=$dsphantrang;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
<!-- row -->
</div>
<!-- container -->
<!-- Li's Main Content Area End Here -->
</div>
<!-- li-main-blog -->
<!-- Li's Main Blog Page Area End Here -->
<!-- Begin Footer Area -->