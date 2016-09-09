

<style>
.ui-state-active {background:#FFFFFF; }
#thumblist {
margin:5px 0px;
overflow:hidden;
}
#thumblist li{
	float:left;
	border:1px solid #dedede;	
	margin-left:5px;
}
.product-name {margin-top:0px;}
.product-price {
	margin-bottom:10px;
}
</style>
 	<link rel="stylesheet" href="/css/smoothproducts.css">	       
 <div class="container" style="">	  
<div class="row">
        <div class="col-xs-12 col-md-6" style="background:#fff;border:none;">    
	<div class="sp-loading"><img src="/images/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
  
	<div class="clearfix div_img row sp-wrap">
	
	<?php if(!empty($views['Product']['images'])) {?>
	
     <a href="<?php echo DOMAIN;?><?php echo $views['Product']['images'];?>"  > 
            <img class="imageProductMain" src="<?php echo DOMAIN.$views['Product']['images']?>"  title="triumph">
     </a> 
		<?php 
		$ok=0;
		for($i=1;$i<5;$i++) {
		
		if(!empty($views['Product']["images$i"])) {
		?>
		 <a href="<?php echo DOMAIN;?><?php echo $views['Product']["images$i"];?>" > 
            <img class="timthumProduct" src="<?php echo DOMAIN.$views['Product']["images$i"]?>"  title="triumph">
        </a> 
		
	<?php } } ?>
   
	<?php } ?>
    </div>
	
	
	</div>
<script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/js/smoothproducts.min.js"></script>
<script type="text/javascript">
/* wait for images to load */
$(window).load(function() {
	$('.sp-wrap').smoothproducts();
});
</script>	
	
	
	
	
	
	

		
<div class="col-xs-12 col-md-6" style="background:#fff;border:none;">
            
            <div class="detail row">
            <h2 class="product-name" ><?php echo $views['Product']['title'];?> <span class="product-sku" style="color: #999; font-size: 16px;">( <?php echo $views['Product']['code'];?> )</span></h2>
			
			<div class="product-price">
			<?php if(!empty($views['Product']['giakhuyenmai'])) { ?>
			<h6 style="text-decoration: line-through; color:#333333; font-weight:300;">
			 <?php echo number_format( $views['Product']['price'],0);?> VNĐ 
			</h6>
			<h5>
			<?php echo number_format( $views['Product']['giakhuyenmai'],0);?> VNĐ 
			</h5>
			<?php } ?>

			<?php if(empty($views['Product']['giakhuyenmai'])) { ?>
			<h6>
			<?php echo number_format( $views['Product']['price'],0);?> VNĐ  </a> 
			</h6>

			<?php } ?>
			<a href="<?php echo DOMAIN;?>mua-hang/<?php echo $views['Product']['id'];?>"><img alt="buynow" src="<?php echo DOMAIN;?>images/buynow.png" /> </a>
			</br>

			</div>
			
          
		   
		   
		   
		   
		   
		   
       
        <div class="clearfix"></div>
        <div class="product-detail-text">
		<strong>Chi tiết sản phẩm</strong>
<p></p>
            <?php echo $views['Product']['content'];?>
			<?php $id = $views['Product']['id']; ?>
        </div>
		</br>
		<!-- AddThis Button BEGIN -->
		
	

		</br>
		
	<div class="addthis_toolbox addthis_default_style">
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			<a class="addthis_button_google_plusone"></a>
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_preferred_5"></a>
			<a class="addthis_button_preferred_6"></a>
			
		</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50c409c76063356d"></script>
<!-- AddThis Button END -->
</br>
</br>
</br>
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=828939813805792&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo DOMAIN; ?>sp/<?php echo $views['Product']['id']?>" data-num-posts="5" data-width="100%"></div>
</div>
  
</div> 
</div>
	




<?php if($sanphamkhac){?> 
<div class="row rowslide rowlistbottom">
       
		
        <div class="product_title">
            <h2>Sản phẩm liên quan</h2>
        </div>
		<div class="clear"></div>
        <div class="list_product first">
            <?php foreach($sanphamkhac as $pr){?>
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
<?php }?>
 </div>