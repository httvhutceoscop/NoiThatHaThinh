
<div id="main-center" style="width:1000px;">
<div id="danhmuccacsanpham" style="width:1000px;">
    	<div id="tieudecacdanhmuc">Kết quả tìm kiếm</font></div>
        <?php if($products){?>
        <?php 
		  $i = 1; $j = 0;
		foreach($products as $pr){?>	
  <div id="khungsanpham2">
							<?php if(!empty($pr['Product']['newpro'])) { ?>
							<img alt="banchay" src="<?php echo DOMAIN;?>css/images/new.png" style=" position: absolute; width:71px; margin-left:42px;" />
							

							<?php } ?>
							<a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" >
							<!--<img alt="banchay" src="<?php echo DOMAIN;?>images/banchay.png" style=" position: absolute; width:80px;" />-->
							<div id="anhsanpham2">
							<img alt="" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>"/>
							</div>
							</a>
							
								
								
								
								<div id="motasanpham3">
							<h4>
							 <a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a>
							</h4>

							<?php if(!empty($pr['Product']['giakhuyenmai'])) { ?>
							<h5>
							  <?php echo number_format( $pr['Product']['price'],0);?> VNĐ 
							</h5>
							<h6 style="color:#FF7316;">
							  <?php echo number_format( $pr['Product']['giakhuyenmai'],0);?> VNĐ 
							   <a id="thumb<?php echo $i;?>" href="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" class="highslide" onclick="return hs.expand(this)">
							  <img align="absmiddle" alt="room" src="<?php echo DOMAIN;?>css/images/room.png" style="margin:0px 10px 0px 20px;"/>
							  </a>
							</h6>
							<?php } ?>

							<?php if(empty($pr['Product']['giakhuyenmai'])) { ?>
							
							<h6>
							  <?php echo number_format( $pr['Product']['price'],0);?> VNĐ 
							  <a id="thumb<?php echo $i;?>" href="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" class="highslide" onclick="return hs.expand(this)">
							  <img align="absmiddle" alt="room" src="<?php echo DOMAIN;?>css/images/room.png" style="margin:0px 10px 0px 20px;"/>
							  </a>
							</h6>
							<?php } ?>

							</div>
								
								
						
					
							
					
							
							

							</div>
<?php }?>
        
        <?php }else echo "Không tìm thấy sản phẩm nào";?>
	
		
		</div>
      
        <div style="float: left; text-align:right;width: 572px;color: black; font-size: 12px;">
       
            	<p style="text-align:right;">
		<?php
				$paginator->options(array('url' => $this->passedArgs));                                    
				echo $paginator->prev('<<', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
				echo $paginator->next('>>' , null, null, array('class' => 'disabled'));
            ?>
			</p>
            <div class="page">
          </div>
        </div>  
		
    </div><!--end newstop-->
