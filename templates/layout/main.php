<?php
	
	$d->reset();
	$sql_qc_slide ="select * from #_linhvuc where hienthi = 1 and taisan = 1 order by stt asc limit 0,12";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi = 1 order by stt asc limit 12";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
	$d->reset();
	$sql_xemnhieu="select * from #_product where hienthi = 1 order by luotxem desc limit 10";
	$d->query($sql_xemnhieu);
	$result_spxemnhieu=$d->result_array();
	
	$d->reset();
	$sql_linhvuc="select * from #_linhvuc where hienthi = 1 and linhvuc = 1 order by stt asc limit 4";
	$d->query($sql_linhvuc);
	$result_linhvuc=$d->result_array();
	
	$d->reset();
	$result_detailq="select * from #_tinloai1_1 order by id limit 5";
	$d->query($result_detailq);
	$result_detailq=$d->result_array();
	$tg=date('Y-m-d H:i:s');
	$tgout=900;
	$tgnew=$tg - $tgout;
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
	    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
	else
	    $ipaddress = 'UNKNOWN';
	$local = $_SERVER['PHP_SELF'];
// 	$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";                  
// 	$d->query($sql_insert);
// 	$next30 = strtotime( '-900 seconds' );
// 	$tgnew =  date('Y-m-d H:i:s',$next30 );
// 	$d->reset();
// 	$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 	$d->query($sql_delete);
// 	$d->reset();
// 	$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 	$d->query($result_detail);
// 	$result_detail=$d->fetch_array();
// 	$useronline = count($result_detail);

	//slide show
	$d->reset();
	$sql_thuvienanh="select * from #_slideshow";
	$d->query($sql_thuvienanh);
	$result_thuvienanh=$d->result_array();
?>
<div id="ninja-slider">
      <div>
        <div class="slider-inner">
          <ul>
            <li><a class="ns-img" href="images/l1.jpg"></a></li>
            <li><a class="ns-img" href="images/l2.jpg"></a></li>
            <li><a class="ns-img" href="images/l3.jpg"></a></li>
            <li><a class="ns-img" href="images/l4.jpg"></a></li>
            <li><a class="ns-img" href="images/l5.jpg"></a></li>
            <li><a class="ns-img" href="images/l6.jpg"></a></li>
            <li><a class="ns-img" href="images/l7.jpg"></a></li>
            <li><a class="ns-img" href="images/l8.jpg"></a></li>
            <li><a class="ns-img" href="images/l9.jpg"></a></li>
            <li><a class="ns-img" href="images/l10.jpg"></a></li>
          </ul>
          <div class="fs-icon-room" title="Expand/Close"></div>
        </div>
        <div id="thumbnail-slider">
          <div class="inner">
            <ul>
              <li> <a class="thumb" href="images/l1.jpg"></a> <span>0</span> </li>
              <li> <a class="thumb" href="images/l2.jpg"></a> <span>1</span> </li>
              <li> <a class="thumb" href="images/l3.jpg"></a> <span>2</span> </li>
              <li> <a class="thumb" href="images/l4.jpg"></a> <span>3</span> </li>
              <li> <a class="thumb" href="images/l5.jpg"></a> <span>4</span> </li>
              <li> <a class="thumb" href="images/l6.jpg"></a> <span>5</span> </li>
              <li> <a class="thumb" href="images/l7.jpg"></a> <span>6</span> </li>
              <li> <a class="thumb" href="images/l8.jpg"></a> <span>7</span> </li>
              <li> <a class="thumb" href="images/l9.jpg"></a> <span>8</span> </li>
              <li> <a class="thumb" href="images/l10.jpg"></a> <span>9</span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="services" class="section-cotent">
      <div class="container">
        <div class="title-section text-center">
          <h2>Tư vấn - Thiết kế - Lắp đặt - vận hành - bàn giao- bảo hành</h2>
          <span></span> </div>
        <!-- /.title-section -->
        <div id="service" class="row">
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <div class="service-header"> <a href="chi-tiet.html"><img src="images/1.jpg" alt=""></a>
                <h3><a href="chi-tiet.html">Hệ thống điện lạnh thương mại dân dụng</a></h3>
              </div>
              <div class="service-description"> Chúng tôi chuyên cung cấp dịch vụ sửa chữa, bảo trì, vệ sinh các loại máy móc, sản phẩm điện lạnh tại nhà khu vực nội thành phố HCM </div>
            </div>
            <!-- /.service-item -->
          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <div class="service-header"> <a href="chi-tiet.html"><img src="images/2.jpg" alt=""></a>
                <h3><a href="chi-tiet.html">Hệ thống Tổng Đài IP - Analog</a></h3>
              </div>
              <div class="service-description"> Cung cấp tổng đài điện thoại PANASONIC, SIEMENS, LG, IP, Tổng đài Call Center. Giải pháp tổng đài cho Trung Tâm Tư Vấn Khách Hàng, Công ty, Tập Đoàn, Nhà hàng, Khách sạn. </div>
            </div>
            <!-- /.service-item -->
          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <div class="service-header"> <a href="chi-tiet.html"><img src="images/3.jpg" alt=""></a>
                <h3><a href="chi-tiet.html">Hệ thống Camera an ninh IP - Analog</a></h3>
              </div>
              <div class="service-description"> Trong xu thế hội nhập hiện nay việc trang bị hệ thống an ninh – an toàn là rất cần thiết, Công ty CÔNG NGHỆ MỚI chúng tôi là một trong những công ty hàng đầu Việt Nam chuyên nhập khẩu, cung cấp, thiết kế,lắp đặt các hệ thống camera </div>
            </div>
            <!-- /.service-item -->
          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <div class="service-header"> <a href="chi-tiet.html"><img src="images/4.jpg" alt=""></a>
                <h3><a href="chi-tiet.html">Hệ thống Báo khói báo cháy</a></h3>
              </div>
              <div class="service-description"> Như các bạn đã biết, công tác PCCC đã, đang và sẽ đóng vai trò rất quan trọng trong nhiệm vụ bảo vệ tính mạng và tài sản của người dân cũng như toàn xã hội. Chúng tôi coi đây là sứ mệnh để tạo ra những giá trị mang lại sự bình yên cho cuộc sống. </div>
            </div>
            <!-- /.service-item -->
          </div>
          <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#services -->
    <div id="products" class="section-content">
      <div class="container">
        <div class="title-section text-center">
          <h2>Sản phẩm bán chạy</h2>
          <span></span> </div>
        <!-- /.title-section -->
        <div class="row">
        <?php 
        for ($i=0;$i<count($result_spxemnhieu);$i++)
        {
            $gia =  number_format ($result_spxemnhieu[$i]['gia'],0,",",".")." vnđ";
            $giathuc =  ($result_spxemnhieu[$i]['giagiam']!=0)?number_format ($result_spxemnhieu[$i]['giagiam'],0,",",".")." ₫":number_format ($result_spxemnhieu[$i]['gia'],0,",",".")." vnđ";
        ?>
          <div class="col-sp col-sm-6" style="height: 350px">
            <div class="products-thumb"> <img src="upload/sanpham/<?php if($result_spxemnhieu[$i]["tc_big"]==1) echo $result_spxemnhieu[$i]["photo"]; else echo $result_spxemnhieu[$i]["photo"] ?>" alt="<?=$result_spxemnhieu[$i]["ten_vi"]?>">
              <div class="inner">
                <h4><a data-rel="lightbox" href="chi-tiet-san-pham/<?=$result_spxemnhieu[$i]['tenkhongdau']?>-<?=$result_spxemnhieu[$i]['id']?>.html"><?=$result_spxemnhieu[$i]["ten_vi"]?></a></h4>
                <p><span class="price"><?= $gia?></span><br>
                  <span class="price-off"><?= $gia?></span></p>
              </div>
            </div>
            <!-- /.products-thumb -->
          </div>
      <?php
		} 
		?>
          <!-- /.col-sp -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#products -->
    <div id="about" class="section-cotent">
      <div class="container">
        <div class="title-section text-center">
          <h2>Giới thiệu về chúng tôi</h2>
          <span></span> </div>
        <!-- /.title-section -->
        <div class="row">
          <div class="col-md-8">
            <p> Nhu cầu đời sống của người dân đươc nâng cao, đa số nhà nào cũng có máy lạnh, và đương nhiên chuyện thỉnh thoảng máy gặp sự cố là không tránh khỏi.
              Bạn không thể ngồi chờ đợi trong sự nóng nực, bạn muốn có người giải quyết vấn đề đó ngay cho bạn
              Hãy để chúng tôi giúp bạn. <a href="#">Xem thêm .. <i class="ti-angle-right"></i></a> </p>
            <div id="why" class="row alert-warning">
              <h4 class="widget-title">Vì sao nên chọn chúng tôi?</h4>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 service-item">
                <div class="service-header"> <a href="chi-tiet.html"> <img src="images/w1.png" alt=""></a>
                  <h3>Giá tốt</h3>
                </div>
              </div>
              <!-- /.service-item -->
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 service-item">
                <div class="service-header"> <img src="images/w2.png" alt="">
                  <h3>Nhanh gọn lẹ</h3>
                </div>
              </div>
              <!-- /.service-item -->
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 service-item">
                <div class="service-header"> <img src="images/w3.png" alt="">
                  <h3>Hàng chính hãng</h3>
                </div>
              </div>
              <!-- /.service-item -->
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 service-item">
                <div class="service-header"> <img src="images/w4.png" alt="">
                  <h3>Bảo hành bảo trì uy tín</h3>
                </div>
              </div>
              <!-- /.service-item -->
            </div>
          </div>
          <!-- /.col-md-8 -->
          <div class="col-md-4 our-skills">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/BX6xm3EqJ2Y" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#about -->
    <!-- /#contact -->
    <div class="row">
      <div id="news_home" class="news">
        <div class="title-section text-center">
          <h2>Tin tức mới nhất</h2>
          <span></span> </div>
        <!-- /.title-section -->
        <?php
         for($i=0;$i<count($result_detailq);$i++)
         { 
             if($i==0)
             {
         ?>
                <div class="col-md-4 col-sm-6">
                  <div class="news_item">
                    <div class="news-img"> <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" alt=""></a> </div>
                    <div class="inner-content">
                      <h5><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h5>
                      <span class="child"><?=$result_detailq[$i]['ngaytao']?></span>
                      <p><?=$result_detailq[$i]['mota_vi']?></p>
                    </div>
                  </div>
                  <!-- /.team-member -->
                </div>
        <?php
             }
             else 
             {
         ?>
         <div class="col-md-4 col-sm-6">
            <div class="media">
                <div class=" pull-left"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" alt=""></a> </div>
                <div class="  media-body">
                  <h3 class="heading"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h3>
                  <p class="sort"><?=$result_detailq[$i]['mota_vi']?></p>
                  <p><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" class="btn btn-primary btn-luxe-primary">Xem thêm .. <i class="ti-angle-right"></i></a></p>
                </div>
              </div>
          <?php 
                $i++;
          ?>
            <div class="media">
                <div class=" pull-left"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" alt=""></a> </div>
                <div class="  media-body">
                  <h3 class="heading"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h3>
                  <p class="sort"><?=$result_detailq[$i]['mota_vi']?></p>
                  <p><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" class="btn btn-primary btn-luxe-primary">Xem thêm .. <i class="ti-angle-right"></i></a></p>
                </div>
              </div>
        </div>
              
         <?php 
             }
         } 
         ?>
      </div>
      <!-- /.our-team -->
    </div>