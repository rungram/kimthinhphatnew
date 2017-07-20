<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 and menutype=2 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_list ="select *	from #_tinloai1_1_list where hienthi=1 and dichvu=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list_dichvu =$d->result_array();
	
	$d->reset();
	$sql_gioithieu="select * from #_gioithieu  where hienthi=1 order by id desc limit 1";
	$d->query($sql_gioithieu);
	$result_gioithieu=$d->fetch_array();
	$id_gioithieu = $result_gioithieu["id"];
?>

<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav" data-smartmenus-id="15003596183227795">
        <li><a href="index.html">Trang chủ</a></li>
        <li><a href="gioi-thieu/gioi-thieu-<?=$id_gioithieu?>.html">Giới thiệu</a></li>
        <li class="">
            <a href="danh-muc/san-pham-1.html" class="has-submenu" id="sm-15003598033380005-1" aria-haspopup="true" aria-controls="sm-15003598033380005-2" aria-expanded="false">Sản phẩm <span class="caret"></span></a>
            <ul class="dropdown-menu sm-nowrap" id="sm-15003598033380005-2" role="group" aria-hidden="true" aria-labelledby="sm-15003598033380005-1" aria-expanded="false" style="width: auto; display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10em; max-width: 20em;">
            <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
                    $d->reset();
                    $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
                    $d->query($sql_cat);
                    $cat =$d->result_array();
                    $child = 'class="has-submenu" id="sm-15003598033380005-5" aria-haspopup="true" aria-controls="sm-15003598033380005-6" aria-expanded="false"';
                    if(count($cat)<1)
                    {
                        $child = "";
                    }
                    $menutype = 'danh-muc-list';
            ?>
                <li>
                    <a href="<?=$menutype?>/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html"  <?=$child?>><?=$list[$i]["ten_vi"]?><span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-15003598033380005-6" role="group" aria-hidden="true" aria-labelledby="sm-15003598033380005-5" aria-expanded="false">
            <?php   for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
    				  $d->reset();
    				  $sql_item ="select *  from #_product_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
    				  $d->query($sql_item);
    				  $item =$d->result_array();
    				  $child1 = '<img class="ar" src="images/subt.png" alt="" />';
    				  $child2 = '<em class="arr-mb-mn"></em>';
    				  if(count($item)<1)
    				  {
    				  	$child1 = "";
    				  	$child2 = "";
    				  }
    				  $menutype = 'danh-muc-cat';
			?>
                        <li><a href="<?=$menutype?>/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html"><?=$cat[$j]["ten_vi"]?> </a></li>
            <?php }?>
                    </ul>
                </li>
                
            <?php }?>
                
            </ul>
        </li>
        <li class="">
            <a href="danh-muc-dich-vu-list/dich-vu-1.html" class="has-submenu" id="sm-15003598033380005-1" aria-haspopup="true" aria-controls="sm-15003598033380005-2" aria-expanded="false">Dịch vụ <span class="caret"></span></a>
            <ul class="dropdown-menu sm-nowrap" id="sm-15003598033380005-2" role="group" aria-hidden="true" aria-labelledby="sm-15003598033380005-1" aria-expanded="false" style="width: auto; display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10em; max-width: 20em;">
            <?php for($i=0,$count_l=count($list_dichvu);$i<$count_l;$i++){
                    $d->reset();
                    $sql_cat ="select *  from #_tinloai1_1 where id_list='".$list_dichvu[$i]["id"]."' order by stt asc";
                    $d->query($sql_cat);
                    $cat =$d->result_array();
                    $child = 'class="has-submenu" id="sm-15003598033380005-5" aria-haspopup="true" aria-controls="sm-15003598033380005-6" aria-expanded="false"';
                    if(count($cat)<1)
                    {
                        $child = "";
                    }
                    $menutype = 'danh-muc-dich-vu-cat';
            ?>
                <li>
                    <a href="<?=$menutype?>/<?=$list_dichvu[$i]["tenkhongdau"]?>-<?=$list_dichvu[$i]["id"]?>.html"  <?=$child?>><?=$list_dichvu[$i]["ten_vi"]?><span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-15003598033380005-6" role="group" aria-hidden="true" aria-labelledby="sm-15003598033380005-5" aria-expanded="false">
                        <?php   for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
                				  $menutype = 'danh-muc-cat';
            			?>
                                    <li><a href="tin-tuc-detail/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html"><?=$cat[$j]["ten_vi"]?> </a></li>
                        <?php }?>
                    </ul>
                </li>
                
            <?php }?>
                
            </ul>
        </li>
        <li><a href="thi-cong.html">Thi Công</a></li>
        <li><a href="tin-tuc.html">Tin tức & Sự kiện</a></li>
        <li><a href="lien-he.html">Liên hệ</a></li>
        <li><a href="gio-hang.html"><i class="fa fa-shopping-cart"></i> [<?=count($_SESSION['cart'])?>]</a></li>
    </ul>
</div> <!-- /.menu -->