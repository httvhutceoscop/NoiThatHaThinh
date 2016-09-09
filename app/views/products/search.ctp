

<div class="home_content top_product">
        <div class="container">
            <div class="row">
                <div class="title_home_page">
                    <h2>
                        Kết quả tìm kiếm
                    </h2>
                    
                </div>

            </div>
		</div>
		
            <div class="container">				
                <div class="row rowproduct">
				<?php if($products){?>
				<?php 
				  $i = 1; $j = 0;
				foreach($products as $pr){?>
                    
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
				<?php }else echo "Không tìm thấy sản phẩm nào";?>
				<div style=" text-align:center;color: black; font-size: 12px;">
       
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
		
		
</div>


