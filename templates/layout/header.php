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

<div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="left-header">

                                <div class="logo col-lg-3 col-md-3 col-sm-3">
                                    <h1><a href="index.html" title=""><img src="images/logo.png" alt="logo"></a></h1>
                                </div> <!-- /.logo -->
                                <div class="col-lg-9 col-md-9 col-md-9">
                                    <div class="info_cty text-center">
                                        <h1>CÔNG TY TNHH KỸ THUẬT KIM THỊNH PHÁT</h1>
                                        <h2>ĐIỆN LẠNH - CAMERA - BÁO KHÓI</h2>
                                        <h2>MST: 0313 410 300 - Email: kimthinhphat@gmail.com</h2>
                                        <h3>Địa chỉ: 53 C Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, TP. Hồ Chí Minh</h3>
                                    </div> <!-- /.logo -->
                                </div> <!-- /.pull-right-->
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="right-header text-right">
                                <ul class="social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                                <span class="hotline"><i class="fa fa-phone"></i>HOTLINE <br>PKD: 0909.28.84.86 - 0909.01.84.86 <br>PKT: 0903.61.82.89 - 0902.41.37.39</span>
                                <!--<span><i class="fa fa-envelope"></i>info@company.com</span>-->
                            </div> <!-- /.right-header -->
                        </div> <!-- /.col-md-6 -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php include _template."layout/menu_top.php"; ?>
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu toggle-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="gioi-thieu.html">Giới thiệu</a></li>
                                <li class="dropdown">
                                    <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Điện Lạnh</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="chi-tiet-san-pham.html">DAIKIN </a></li>
                                                <li><a href="chi-tiet-san-pham.html">TOSHIBAR</a></li>
                                                <li><a href="chi-tiet-san-pham.html">PANASONIC</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Camera</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="chi-tiet-san-pham.html">VANTECH </a></li>
                                                <li><a href="chi-tiet-san-pham.html">AVTECH</a></li>
                                                <li><a href="chi-tiet-san-pham.html">QUESTEK</a></li>
                                                <li><a href="chi-tiet-san-pham.html">HIKVISION</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Tổng đài điện thoại</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="chi-tiet-san-pham.html">VANTECH </a></li>
                                                <li><a href="chi-tiet-san-pham.html">AVTECH</a></li>
                                                <li><a href="chi-tiet-san-pham.html">QUESTEK</a></li>
                                                <li><a href="chi-tiet-san-pham.html">HIKVISION</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Báo khói báo cháy</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="chi-tiet-san-pham.html">VANTECH </a></li>
                                                <li><a href="chi-tiet-san-pham.html">AVTECH</a></li>
                                                <li><a href="chi-tiet-san-pham.html">QUESTEK</a></li>
                                                <li><a href="chi-tiet-san-pham.html">HIKVISION</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Dịch vụ <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Điện Lạnh</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="chi-tiet-san-pham.html">DAIKIN </a></li>
                                                <li><a href="chi-tiet-san-pham.html">TOSHIBAR</a></li>
                                                <li><a href="chi-tiet-san-pham.html">PANASONIC</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="thi-cong.html">Thi Công</a></li>
                                <li><a href="tin-tuc.html">Tin tức & Sự kiện</a></li>
                                <li><a href="lien-he.html">Liên hệ</a></li>
                            </ul>
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home --><!-- InstanceBeginEditable name="EditRegion1" -->