<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>
<?php //include _template."layout/menu_top.php"; ?>
<div id="home">
  <div class="site-header">
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="left-header">
              <div class="logo col-lg-3 col-md-3 col-sm-3">
                <h1><a href="index.html" title=""><img src="images/logo.png" alt="logo"></a></h1>
              </div>
              <!-- /.logo -->
              <div class="col-lg-9 col-md-9 col-md-9">
                <div class="info_cty text-center">
                  <h1>CÔNG TY TNHH KỸ THUẬT KIM THỊNH PHÁT</h1>
                  <h2>ĐIỆN LẠNH - CAMERA - BÁO KHÓI</h2>
                  <h2>MST: 0313 410 300 - Email: kimthinhphatt@gmail.com</h2>
                  <h3>Địa chỉ: 53 C Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, TP. Hồ Chí Minh</h3>
                </div>
                <!-- /.logo -->
              </div>
              <!-- /.pull-right-->
            </div>
            <!-- /.left-header -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-4 col-sm-4">
            <div class="right-header text-right">
              <ul class="social-icons">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
              </ul>
              <span class="hotline"><i class="fa fa-phone"></i>HOTLINE <br>
                PKD: 0909.28.84.86 - 0909.01.84.86 <br>
                PKT: 0903.61.82.89 - 0902.41.37.39</span>
              <!--<span><i class="fa fa-envelope"></i>info@company.com</span>-->
            </div>
            <!-- /.right-header -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.top-header -->
    <div class="main-header">
      <!-- Navbar menu -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="index.html">Trang chủ</a>-->
          </div>
          <?php include _template."layout/menu_top.php"; ?>
        </div><!--/.container -->
      </div>

    
      <!-- /.container -->
    </div>
    <!-- /.header -->
  </div>
  <!-- /.site-header -->
</div>