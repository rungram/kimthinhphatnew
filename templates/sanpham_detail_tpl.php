<?php
if(isset($_GET['id']))
{	
	$id =  addslashes($_GET['id']);
	
	$d->reset();
	$sql_tanglx="update  #_product set luotxem=luotxem+1 where id='$id'";
	$d->query($sql_tanglx);
	
	$d->reset();
	$sql_chitietsp="select *  from #_product where hienthi= 1 and id='$id'";
	$d->query($sql_chitietsp);
	$chitiet_sp=$d->fetch_array();
	//list
	$d->reset();
	$sql_l="select * from #_product_list where hienthi= 1 and id='".$chitiet_sp['id_list']."'";
	$d->query($sql_l);
	$result_l=$d->fetch_array();
	//
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_laylq="select * from #_product where hienthi =1 and id<>'$id' and id_list='$id_list' limit 0,5";
	$d->query($sql_laylq);
	$result_laylq=$d->result_array();
	//cat
	$d->reset();
	$sql_c="select * from #_product_cat where hienthi= 1 and id='".$chitiet_sp['id_cat']."'";
	$d->query($sql_c);
	$result_c=$d->fetch_array();
	//item
	$d->reset();
	$sql_i="select * from #_product_item where hienthi= 1 and id='".$chitiet_sp['id_item']."'";
	$d->query($sql_i);
	$result_i=$d->fetch_array();
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_spkhac="select id,ten_$lang,tenkhongdau,thumb,gia,masp,luotxem,mota_vi  from #_product where hienthi= 1 and id_list ='$id_list' and id<>'$id' order by stt asc limit 0,12";
	$d->query($sql_spkhac);
	$result_spkhac=$d->result_array();
		
	$url=getCurrentPageURL();
}
?>

				<!--xu ly lay màu-->
                <?php
				$mau_chinh = $chitiet_sp['id_mau'];
				$d->reset();
				$sql_laymau = "select ten_vi,ten_en from #_tinloai2_2 where id='$mau_chinh'";
				$d->query($sql_laymau);
				$result_laymau = $d->fetch_array();
				
				
				//lay ds mau khac
				
				$d->reset();
				$sql_maukhac  = "select * from table_hinh_cungsp";
			    $sql_maukhac .= " left join table_tinloai2_2 on table_tinloai2_2.id = table_hinh_cungsp.chon_mau";
				
				$sql_maukhac .= " where table_hinh_cungsp.id_sp='".$id."' and  table_hinh_cungsp.chon_mau<> '".$mau_chinh."'";
				$sql_maukhac .= " group by table_hinh_cungsp.chon_mau";
				$d->query($sql_maukhac);
				$result_maukhac = $d->result_array();
				
				//lay hinh cung mau
				$d->reset();
				$sql_cungmauc = "select thumb,photo from #_hinh_cungsp where id_sp='$id' and chon_mau='$mau_chinh'";
				$d->query($sql_cungmauc);
				$result_cungmauc = $d->result_array();
				?>
<div id="detail-pro" class="row">
	<div class="col-lg-6">
        <div id="ninja-slider">
          <div>
            <div class="slider-inner">
              <ul style="overflow: hidden; padding-top: 50%; height: 0px;"><li class="" style="left: 0px; z-index: 0;"><a class="ns-img" href="upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>" style="background-image: url(&quot;file:///upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>;);"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l2.jpg" style="background-image: url(&quot;images/l2.jpg&quot;);"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l3.jpg" style="background-image: url(&quot;images/l3.jpg&quot;);"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l4.jpg"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l5.jpg"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l6.jpg"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l7.jpg"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l8.jpg"></a></li><li class="" style="z-index: -1;"><a class="ns-img" href="images/l9.jpg" style="background-image: url(&quot;images/l9.jpg&quot;);"></a></li><li class="ns-show" style="z-index: 1; left: 0px;"><a class="ns-img" href="images/l10.jpg" style="background-image: url(&quot;images/l10.jpg&quot;);"></a></li></ul>
              <div class="fs-icon-room" title="Expand/Close"></div>
            <div id="ninja-slider-pager"><a rel="0" class="">1</a><a rel="1" class="">2</a><a rel="2" class="">3</a><a rel="3" class="">4</a><a rel="4" class="">5</a><a rel="5" class="">6</a><a rel="6" class="">7</a><a rel="7" class="">8</a><a rel="8" class="">9</a><a rel="9" class="active">10</a></div><div id="ninja-slider-prev"><div>10 ∕ 10</div></div><div id="ninja-slider-next"><div>10 ∕ 10</div></div><div id="ninja-slider-pause-play"></div></div>
            <div id="thumbnail-slider">
              <div class="inner">
                <ul style="touch-action: pan-y; transition-property: transform; transition-timing-function: cubic-bezier(0.2, 0.88, 0.5, 1); transition-duration: 0ms; transform: translateX(-96px);"><li style="display: inline-block; height: 50px; width: 100px; z-index: 0;" class=""> <a class="thumb" href="images/l7.jpg" style="background-image: url(&quot;images/l7.jpg&quot;); cursor: pointer;"></a> <span>6</span></li><li class="" style="display: inline-block; height: 50px; width: 101.394px; z-index: 0;"> <a class="thumb" href="images/l8.jpg" style="background-image: url(&quot;images/l8.jpg&quot;); cursor: pointer;"></a> <span>7</span></li><li class="" style="display: inline-block; height: 50px; width: 88.8551px; z-index: 0;"> <a class="thumb" href="images/l9.jpg" style="background-image: url(&quot;images/l9.jpg&quot;); cursor: pointer;"></a> <span>8</span></li><li class="active" style="display: inline-block; height: 50px; width: 123.077px; z-index: 1;"> <a class="thumb" href="images/l10.jpg" style="background-image: url(&quot;images/l10.jpg&quot;); cursor: pointer;"></a> <span>9</span></li><li class="" style="display: inline-block; height: 50px; width: 101.394px; z-index: 0;"> <a class="thumb" href="images/l1.jpg" style="background-image: url(&quot;images/l1.jpg&quot;); cursor: pointer;"></a> <span>0</span></li><li class="" style="display: inline-block; height: 50px; width: 117.073px; z-index: 0;"> <a class="thumb" href="images/l2.jpg" style="background-image: url(&quot;images/l2.jpg&quot;); cursor: pointer;"></a> <span>1</span></li><li class="" style="display: inline-block; height: 50px; width: 174.545px; z-index: 0;"> <a class="thumb" href="images/l3.jpg" style="background-image: url(&quot;images/l3.jpg&quot;); cursor: pointer;"></a> <span>2</span></li><li class="" style="display: inline-block; height: 50px; width: 100px; z-index: 0;"> <a class="thumb" href="images/l4.jpg" style="background-image: url(&quot;images/l4.jpg&quot;); cursor: pointer;"></a> <span>3</span></li><li style="display: inline-block; height: 50px; width: 126.667px; z-index: 0;" class=""> <a class="thumb" href="images/l5.jpg" style="background-image: url(&quot;images/l5.jpg&quot;); cursor: pointer;"></a> <span>4</span></li><li style="display: inline-block; z-index: 0; height: 50px; width: 103.293px;" class=""> <a class="thumb" href="images/l6.jpg" style="background-image: url(&quot;images/l6.jpg&quot;); cursor: pointer;"></a> <span>5</span></li></ul>
              </div>
            <div id="thumbnail-slider-prev"></div><div id="thumbnail-slider-next"></div><div id="thumbnail-slider-pause-play"></div></div>
          </div>
        </div>
    </div>
    <div class="col-lg-6">
                                        
										
    <h2><?=$chitiet_sp["ten_vi"]?></h2>
    <hr>
    <div class="decription">
        <?=$chitiet_sp["mota_vi"]?>
    </div>
    <h4>
    	<span class="price"><?php echo number_format ($chitiet_sp['gia'],0,",",".")." vnđ";?></span>
        <span class="price-off"><?php echo number_format ((!empty($chitiet_sp['giagiam']))?$chitiet_sp['giagiam']:$chitiet_sp['gia'],0,",",".")." vnđ";?></span>
        <span class="VAT">10%</span>
    </h4>
    <div class="clearfix"></div>
    <div class="button"> 
        <input id="dQy" value="1" min="1" max="1000" type="number"> 
        <button onclick="addtocart(<?=$chitiet_sp['id']?>)" class="btn btn-primary"> <a class="" style="" href="javascript:;" onclick=""><i class="glyphicon glyphicon-shopping-cart"></i> Đặt hàng </a> </button> 
        <button class="btn btn-primary"><i class="fa fa-align-left"></i> Hướng dẫn mua hàng </button>
    	<div class="clearfix"></div> 
    </div>
    <hr>
    <div class="social">
        <img src="images/mangxahoi.png">
     </div>

    </div>
</div>
<div class="container detailsp">

					  <h4 class="text-center sp">THÔNG TIN CHI TIẾT SẢN PHẨM</h4>
                      <hr>
						<?=$chitiet_sp['mota_en']?>
                         <div class="divider text-center">
                                    	<button class="btn btn-primary" onclick="addtocart(<?=$chitiet_sp['id']?>)"><i class="fa fa-caret-right" aria-hidden="true"></i>
 Đặt hàng</button> 

                                        <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
 Liên hệ</button> 
                        </div>
</div>