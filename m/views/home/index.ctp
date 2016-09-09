<?php echo $this->element('slide');?>
<?php
	$categoryproducthome = $this->requestAction('/comment/submenuproducthome');				
	foreach($categoryproducthome as $categoryproducthome){
?>	
<div class="home_content top_product">
        <div class="container">
            <div class="row">
                <div class="title_home_page">
                    <a href="/ds/<?php echo $categoryproducthome['Catproduct']['id'];?>/<?php echo $categoryproducthome['Catproduct']['alias'];?>" title="<?php echo $categoryproducthome['Catproduct']['name'];?>">
						<h2 style="font-size:16px;"> <?php echo $categoryproducthome['Catproduct']['name'];?> </h2>
					</a>
                    
                </div>

            </div>
		</div>
		<?php 
			if(!empty($categoryproducthome['Catproduct']['parent_id'])){
				$id_cat = $categoryproducthome['Catproduct']['parent_id'];
			}else{
				$id_cat = $categoryproducthome['Catproduct']['id'];
			}
		?>
            <div class="container">				
                <div class="row rowproduct">
                    <div class="view1">
					 <?php
						$productlist = $this->requestAction('/comment/showsanpham1/'.$id_cat);							
						foreach($productlist as $pr){
					?>	
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
						
					<?php }?>
                    </div>                  


                </div>
            </div>
		
		
</div>
	<?php } ?>

