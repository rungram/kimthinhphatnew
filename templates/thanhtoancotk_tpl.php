<?php  if(!defined('_source')) die("Error");
{
	$d->reset();
	$sql_tungdanhmuc="select id,thumb,ten_$lang,tenkhongdau,gia,masp,giagiam,spmoi,luotxem from #_product where spdc >0  order by stt asc ";
	$d->query($sql_tungdanhmuc);	
	$result_spnam=$d->result_array();	
	

	
				
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=20;
	$maxP=5;
	$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
	$result_spnam=$paging['source'];
	
}
?>
<div id="thanhtoan" class="container mart-t50">
    <div class="title-section text-center">
      <h2>Thanh toán</h2>
      <span></span>
    </div>
    <!-- /.title-section -->	
    <form method="post" name="frm" action="gui-don-hang.html" enctype="multipart/form-data">
	   <div class="row mart-t50">
	
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                        <p class="full-row">
                            <label class="col-lg-4" for="name-id">Họ tên (*):</label>
                            <span class="col-lg-8 form-group"><input type="text" id="name-id" name="hoten2" required="required"></span>
                        </p>
                        <p class="full-row">
                            <label class="col-lg-4" for="email-id">Email (*):</label>
                            <span class="col-lg-8 form-group"><input type="text" id="email-id" name="email" required="required"></span>
                        </p>
                        <p class="full-row">
                            <label class="col-lg-4" for="subject-id">Điện thoại (*):</label>
                            <span class="col-lg-8 form-group"><input type="text" id="subject-id" name="dienthoai" required="required"></span>
                        </p>
                        <p class="full-row">
                            <label class="col-lg-4" for="message">Địa chỉ giao hàng (*):</label>
                             <span class="col-lg-8 form-group"><input type="text" id="add-id" name="diachi" required="required"></span>
                        </p>
                        <p class="full-row">
                            <label class="col-lg-4" for="message">Ghi chú</label>
                             <span class="col-lg-8 form-group"><textarea style="width: 100%;" name="noidung" type="text" id="add-id" ></textarea></span>
                        </p>
                    </div>
                </div> <!-- /.col-md-6 -->
           
                <div class="col-md-6 col-sm-6">
                	<div class="table-responsive" id="no-more-tables"> 
                        <table class="table table-hover table-vcenter table-bordered"> 
                            <tbody> 
                            <?php
                            $max=count($_SESSION['cart']);
                            	for($i=0;$i<$max;$i++)
                            	{
                            		
                            					$pid=$_SESSION['cart'][$i]['productid'];
                            					$q=$_SESSION['cart'][$i]['qty'];					
                            					$pname=get_product_name($pid);
                            					$phinh=get_hinh($pid);
                            					$pmota=get_mota($pid);
                            					$pkodau=get_kodau($pid);
                            					$psale=get_giagiam($pid);
                            					$pma=get_masp($pid);
                            		?> 
                                <tr class="row-1193"> 
                                    <td colspan="2" class="text-left"> 
                                        <div class="media"> 
                                            <div class="media-left"> 
                                                <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html"> <img class="small-img" src="upload/sanpham/<?=$phinh?>" alt=""> </a> 
                                            </div> 
                                            <div class="media-body"> 
                                                <h4 class="media-heading"> <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html" title="<?=$pname?>">  <?=$pname?></a> <br> MÃ sp: <strong><?=$pma?></strong> </h4> <p> <strong class="lblTotalPrice">
                                                <?php 
					if($psale ==0) 
					echo number_format(get_price($pid),0, ',', '.').'₫ x '.$q;
					else 
					echo number_format(get_giagiam($pid),0, ',', '.').'₫ x '.$q;
					 ?>=<?php echo number_format(get_giagiam($pid)*$q,0, ',', '.').'₫';?>  </strong> </p> 
                                          </div>
                                        </div> 
                                    </td>
                                </tr>
                                <?php
                                	}
                                ?>
                            </tbody>  
                            <tfoot> 
                                 <tr> 
                                     <td colspan="2" class="text-right text-primary" style="white-space:nowrap;font-weight:700;">  Thành tiền: <strong class="lblTotal" data-total="180000"><?= number_format( get_ordersale_total($pid)+$row_setting['phivc'],0, ',', '.').'đ';?></strong> 
                                     </td>
                                 </tr>
                                 <tr> 
                                     <td colspan="2" class="text-right text-primary" style="white-space:nowrap;font-weight:700;">V.A.T: <strong class="lblTotal" data-total="180000">0</strong> 
                                     </td>
                                 </tr>
                                 <tr class="ship-price"> 
                                     <td colspan="2" class="text-right text-info" style="white-space:nowrap;font-weight:700;">  Phí vận chuyển: <strong class="lblShipPrice" data-price="0">0</strong> 
                                       <input name="Ship" id="Ship" value="0" type="hidden"> </td>
                                 </tr>
                                 <tr class="ship-price"> 
                                     <td colspan="2" class="text-right text-success">  Tổng cộng: <strong class="lblTotalPrice"><?= number_format( get_ordersale_total($pid)+$row_setting['phivc'],0, ',', '.').'đ';?></strong> 
                                     </td>
                                 </tr>


                                
                            </tfoot>  
                        </table> 
                	</div>
                    <p class="clearfix"></p>
                    <button class="btn btn-primary"> <a><i class="glyphicon glyphicon-shopping-cart"></i> Đặt hàng </a> </button>
                </div> <!-- /.col-md-6 -->
            </div>	
         </form>
</div>