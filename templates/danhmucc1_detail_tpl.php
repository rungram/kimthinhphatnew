<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$order = isset($_GET['order']) ? 'order by gia '.$_GET['order'] : 'order by stt asc';
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id' ".$order;
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='$id'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=40;
			$maxP=10;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
?>
<div id="products-cata" class="section-content">
  <div class="container">
    <div class="title-section text-center">
      <h2>Sản phẩm</h2>
      <span></span></div>
    <!-- /.title-section -->
    <div class="row">
      <!-- /.col-sp -->
      <?php
	for ($i=0;$i<count($result_spnam);$i++)
	{ 
	?>
      <div class="col-sp col-sm-6">
        <div class="products-thumb"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>">
          <div class="inner">
            <h4><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html"><?=$result_spnam[$i]["ten_vi"]?></a></h4>
            <p><span class="price"><?php echo number_format ($result_spnam[$i]['gia'],0,",",".")." vnđ";?></span><br>
              <span class="price-off"><?php echo number_format ((!empty($result_spnam[$i]['giagiam']))?$result_spnam[$i]['giagiam']:$result_spnam[$i]['gia'],0,",",".")." vnđ";?></span></p>
          </div>
        </div>
        <!-- /.products-thumb -->
      </div>
  <?php
	} 
	?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <hr>
  <div class="text-center">
                    <ul class="pagination">
                          <?=$paging['paging']?></div>
                     </ul>
  </div>  

</div>