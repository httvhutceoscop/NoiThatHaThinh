
			 

		<div class="collapse navbar-collapse">
		<div class="container">	 
		<div class="row rowslide rowlistbottom">
       <div class="title_home_page toplist">
            <h2>
                Sản phẩm
            </h2>

           
        </div>
		
        
        <div class="clear"></div>
        
		
		<div class="container">				
                <div class="row rowproduct">
                    <div class="view1">
					 <?php $i=1;
					
					 foreach($products as $pr) {  ?>
                        <a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html">
                            <div class="product_view1">
                                <p>
                                    <span class="head_title_product"><?php echo $pr['Product']['title'];?> </span>
                                </p>
                                <p>
                                    <span class="head_intro_product"> <?php echo number_format( $pr['Product']['price'],0);?> VNĐ </span>
                                </p>
                                <img alt="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>"/>
                            </div>
                        </a>
						<?php  $i++; ?>
						<?php }?>
                    </div>                  


                </div>
            </div>
    </div>
    </div>
	</div>
    
    <!-- end code sp -->


