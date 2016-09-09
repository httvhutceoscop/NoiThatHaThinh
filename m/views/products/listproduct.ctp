
    <div class="navbar-toggle collapsed tophead">
        <div class="container">
            <div class="title_home_page">
                <h2>
				<?php echo $cat['Catproduct']['name']?> 
				</h2>
				
            </div>
        </div>
        <div class="container center">
            <div class="title head_list">
                <?php echo $cat['Catproduct']['name']?> 
            </div>
        </div>
        <div class="container">
			<div class="rowsplist">
				<div class="clear"></div>				
				<div class="list_product first">
					<?php 
					$i = 1; $j = 0;
					$pr = $this->requestAction('comment/showsanpham1/'.$cat['Catproduct']['id']);
					foreach($pr as $pr) {
					?> 
						<div class="product">
							<div class="content">
								 <p class="top"><span><a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" ><?php echo $pr['Product']['title'];?></a></span></p>
								 <div class="img"><a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" ><img alt="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>"/></a></div>
								<p class="name"><span>Mã SP: <?php echo $pr['Product']['id'];?></span></p>
								<p class="price"><span><?php echo number_format( $pr['Product']['price'],0);?> VNĐ</span></p>
								<p class="descripstion"><span><a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" >Xem chi tiết</a></span></p>
							   
							</div>
						</div>
					<?php } ?>
					
				</div>
				
			</div>
        </div>
    </div>
    <!-- end code sp -->


