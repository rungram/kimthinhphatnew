<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 and menutype=2 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_list ="select *	from #_tinloai1_1_list where hienthi=1 and dichvu=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list_dichvu =$d->result_array();
?>

<div class="menu hidden-sm hidden-xs">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gioi-thieu.html">Giới thiệu</a></li>
        <li class="dropdown">
            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Sản phẩm <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
            <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
                    $d->reset();
                    $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
                    $d->query($sql_cat);
                    $cat =$d->result_array();
                    $child = '<em class="arr-mb-mn"></em>';
                    if(count($cat)<1)
                    {
                        $child = "";
                    }
                    $menutype = 'danh-muc';
            ?>
                <li class="dropdown-submenu">
                    <a href="<?=$menutype?>/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"><?=$list[$i]["ten_vi"]?><?php echo $child;?></a>
                    <ul class="dropdown-menu">
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
        <li class="dropdown">
            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Dịch vụ <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
            <?php for($i=0,$count_l=count($list_dichvu);$i<$count_l;$i++){
                    $d->reset();
                    $sql_cat ="select *  from #_tinloai1_1 where id_list='".$list_dichvu[$i]["id"]."' order by stt asc";
                    $d->query($sql_cat);
                    $cat =$d->result_array();
                    $child = '<em class="arr-mb-mn"></em>';
                    if(count($cat)<1)
                    {
                        $child = "";
                    }
                    $menutype = 'danh-muc';
            ?>
                <li class="dropdown-submenu">
                    <a href="<?=$menutype?>/<?=$list_dichvu[$i]["tenkhongdau"]?>-<?=$list_dichvu[$i]["id"]?>.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"><?=$list_dichvu[$i]["ten_vi"]?><?php echo $child;?></a>
                    <ul class="dropdown-menu">
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
    </ul>
</div> <!-- /.menu -->