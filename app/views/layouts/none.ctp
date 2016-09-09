
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="keywords" content="noi that Hoa Phat, noi that van phong, dai ly cap 1 noi that hoa phat, noi that huyen hong, mua hang van phong">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $setting = $this -> requestAction('/comment/setting');?>
<?php foreach($setting as $settings){?>
<link href="http://<?php echo $settings['Setting']['url'];?>/feed" title="<?php echo $settings['Setting']['title'];?> » Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url'];?>/comments/feed" title="<?php echo $settings['Setting']['title'];?> » Comments Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url'];?>" title="<?php echo $settings['Setting']['title'];?>" rel="index">
<?php }?>
<?php if(isset($title) ) { ?>
	<title><?php echo $title; ?></title>
<?php } ?>
<?php if(isset($keywords) ) { ?>
	<meta content="<?php echo $keywords; ?>" name="keywords"/>
<?php } ?>
<?php if(isset($description) ) { ?>
	<meta content="<?php echo $description; ?>" name="description"/>
<?php } ?>
<meta content="noodp,noydir" name="robots"/>
<link href="<?php echo DOMAIN ?>images/logo.png" type="images/png" rel="icon"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/noithat/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/noithat/1-4-jquery.min.js"></script>
<script type="text/javascript" src="/noithat/jquery.idTabs.min.js"></script>



<script type="text/javascript" src="/noithat/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheets
-->
<link rel="stylesheet" type="text/css" href="/noithat/skin.css">
<link rel="stylesheet" type="text/css" href="/noithat/skin(1).css">
<link rel="stylesheet" type="text/css" href="/noithat/skin3.css">
<script type="text/javascript">

function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

</script>
<script type="text/javascript">

jQuery(document).ready(function() {
    // Initialise the first and second carousel by class selector.
	// Note that they use both the same configuration options (none in this case).
	jQuery('.first-and-second-carousel').jcarousel({
	 start: 6,
		scroll :1,
		auto:1,
		spend:2000,
		wrap: 'circular',
		 initCallback: mycarousel_initCallback

	 });
	 
	 
	 jQuery('.first-and-second-carousel3').jcarousel({
	 start: 6,
		scroll :1,
		auto:0,
		wrap: 'circular'

	 });
	
	// If you want to use a caoursel with different configuration options,
	// you have to initialise it seperately.
	// We do it by an id selector here.
	
});

</script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
//$(".fancybox").fancybox();


			$("#usual1 ul").idTabs(); 
			

})
</script>
<script language="javascript">
	function addtocart(pid){
		
		document.frmgh.productid.value=pid;
		document.frmgh.command.value='add';
		document.frmgh.submit();
	}
</script>
<script src="/noithat/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body onload="MM_preloadImages(&#39;images/sky2.gif&#39;,&#39;images/nex-bt2.gif&#39;,&#39;images/bt-video2.gif&#39;)">
<div id="hea-top1">
  <script type="text/javascript">
$(document).ready(function() {
   $('.hotroonline').hover(function(){ 
   $('.supprot_online').fadeIn("slow");
   
   });
   $('.supprot_online').hover(function(){},function (){ $('.supprot_online').fadeOut("slow");;});
});
</script>

 <div id="hea-top1-a">
  	<ul class="menu_head">
		<li><a href="<?php echo DOMAIN;?>">Trang chủ</a></li>
		<li><a href="<?php echo DOMAIN;?>gioi-thieu.html">Giới thiệu</a></li>
	</ul>
	
	<div class="hotroonline"><a href="#">Hỗ trợ online</a></div>
   <div class="countcart"><a href="<?php echo DOMAIN;?>gio-hang.html">
   <?php if(isset($_SESSION['shopingcart'])){?>
   <?php echo sizeof($_SESSION['shopingcart']);?> Sản phẩm
   <?php } else { ?>
   0 Sản phẩm
   <?php } ?>
   </a>
   
   </div>
	
   </div></div>

<div id="contentbg">
  <div id="content-size">
     





<script type="text/javascript">
$(document).ready(function() {

$('.ptntimkiem').click(function(){
 	
	document.frmtk.submit();
 });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
   
   $('.img_top').hover(function (){
   $(this).attr('src','images/tab.png');
   },function(){
   
   })



});

</script>


<h2 style="margin-top:-30px;font-size:17px;">Đại lý cấp 1 Nội Thất Hòa Phát cung cấp NOI THAT VAN PHONG, NỘI THẤT BÀN GHẾ VĂN PHÒNG, VÁCH NGĂN VĂN PHÒNG... của nội thất Hòa Phát</h2>
<div id="header-logo">
      <div id="logo"><a href="<?php echo DOMAIN;?>"><img src="/noithat/logo-hea.jpg" width="680" height="100"></a>
        <div class="list_item_top">
	  </div>
	  </div>
	
</div>
    <div id="nav-size">
      <div id="nav">
	  		 <div id="nav-menuhome" style="position:relative;"><img src="/noithat/tab.png" width="210" height="45">
		 		
		</div>
		<?php echo $this->element('menu');?>
      </div>
    </div>    <style type="text/css">
#menud { min-height:526px}
</style> 
	<h1 style="position:absolute; top:-1000px;">Noi that Hoa Phat, noi that van phong, ban ghe van phong</h1>   
	 <div id="index-box">
      <script type="text/javascript">
$(document).ready(function() {
   $('.cap2').hover(function(){ 
   $(this).parent().addClass('activecap2');
   
   },function (){$(this).parent().removeClass('activecap2')});
});
</script>

<div id="box-menu-doc">
        <div id="menud">
			<?php echo $this->element('menuproduct');?>
			
        </div>
</div>
      
          
      <div id="box-h-right">
        <div id="cont-box1">
          <div id="box-banner-home">
            
                <link rel="stylesheet" href="/noithat/default.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/pascal.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/orman.css" type="text/css" media="screen">
  
    <link rel="stylesheet" href="/noithat/style(1).css" type="text/css" media="screen">

    <div id="wrapper">
        <?php echo $this->element('slide');?>

    </div>
      
          </div>
          <div id="box-home-right">
            <div id="right-box1">
              <div id="tab-navd">SẢN PHẨM NỔI BẬT</div>
              <div id="navd-bg3">
                <div id="noidung-right">
                  

<div class=" jcarousel-skin-tango3">
	<div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
	<div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
		<ul id="first-carousel" class="first-and-second-carousel3 jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px;">
			<?php
				$showsanphamnoibat = $this->requestAction('/comment/showsanphamnoibat');				
				foreach($showsanphamnoibat as $pr){
			?>	
			<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
		 
				 <div id="box-spr" class="product_km" style="position:relative;">
							<div id="bg-pror3">
								<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
									<img alt="<?php echo $pr['Product']['title'];?>" title="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>">
								</a>
							</div>
								<h3 id="box-sph1">
									<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
										<?php echo $pr['Product']['title'];?>
									</a><br>
								</h3>
							<div id="box-tdsp">
							  <div class="giamoi" id="giamoi">
								<?php echo number_format( $pr['Product']['price'],0);?>  d
							  </div>
							  <div id="giacu"></div>
							</div>
				</div>
					
			</li>
			<?php } ?>
		  
				  
				 
				 
		</ul>
	</div>
	<div class="jcarousel-prev jcarousel-prev-horizontal" disabled="false" style="display: block;"></div>
	<div class="jcarousel-next jcarousel-next-horizontal" disabled="false" style="display: block;"></div>
	</div>
</div>
 
				  
				  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="cont-box2" style="border:none;height:auto;">
           

	<div class=" jcarousel-skin-tango">
		<div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
			<div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
				<ul id="first-carousel" class="first-and-second-carousel jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px;">
					<?php
						$sanphamtieubieu = $this->requestAction('/comment/sanphamtieubieu');				
						foreach($sanphamtieubieu as $pr){
					?>	
					<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
						<div id="box-sp1" style="position:relative;">
							<div id="bg-pro">
							<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
								<tbody>
									<tr>
										<td>											
											<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
												<img alt="<?php echo $pr['Product']['title'];?>" alt="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" height="180" width="205">
											</a>
										</td>
									</tr>
								</tbody>
							</table>

							</div>
						<h3 id="box-tdsp">
							<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
								<?php echo $pr['Product']['title'];?>
							</a>
							<br>
						</h3>
						<div id="box-tdsp">
						<div class="giamoi" id="giamoi">
						<?php echo number_format( $pr['Product']['price'],0);?>  đ
						</div>
						<div id="giacu"></div>
						</div>
						</div>
					</li>
					<?php } ?>
											  
				</ul>
			</div>
		<div class="jcarousel-prev jcarousel-prev-horizontal" disabled="false" style="display: block;"></div>
		<div class="jcarousel-next jcarousel-next-horizontal" disabled="false" style="display: block;"></div>
		</div>
	</div>
 
        </div>
      </div>
    </div>
	
    <div id="index-box">
      <div id="cont-box1">
        <div id="box-sp-home1">
          <div id="bg-ct-right1">
            <div id="bg-ct-sph">
						<!--import-->
			<?php
				$categoryproducthome = $this->requestAction('/comment/submenuproducthome');				
				foreach($categoryproducthome as $categoryproducthome){
			?>			
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu0">
						<li id="current">
							<a href="/ds/<?php echo $categoryproducthome['Catproduct']['id'];?>/<?php echo $categoryproducthome['Catproduct']['alias'];?>" title="<?php echo $categoryproducthome['Catproduct']['name'];?>">
								<h2 style="font-size:16px;"> <?php echo $categoryproducthome['Catproduct']['name'];?> </h2>
							</a>
						</li>
												
					</ul>
					<a class="viewall" href="/ds/<?php echo $categoryproducthome['Catproduct']['id'];?>/<?php echo $categoryproducthome['Catproduct']['alias'];?>"> xem tất cả &gt;&gt;</a>
					
					<?php 
						if(!empty($categoryproducthome['Catproduct']['parent_id'])){
							$id_cat = $categoryproducthome['Catproduct']['parent_id'];
						}else{
							$id_cat = $categoryproducthome['Catproduct']['id'];
						}
					?>
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten0"> 
                    <div style="display: block;" id="tab1_0">
						<?php
							$productlist = $this->requestAction('/comment/showsanpham1/'.$id_cat);							
							foreach($productlist as $pr){
						?>	
					    <div id="box-sp" style="position:relative;">
							  <div id="bg-pro">
							  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
								  <tbody>
								  <tr>
									<td>
										<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
											<img alt="<?php echo $pr['Product']['title'];?>" title="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" width="204" height="175">
										</a>
									</td>
								  </tr>
								  
								  </tbody>
							  
							  </table>
							  
							  </div>
							  <h3 id="box-tdsp">
								<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
									<?php echo $pr['Product']['title'];?>
								</a><br>
							  </h3>
							  <div id="box-tdsp">
								<div class="giamoi" id="giamoi">
									<?php echo number_format( $pr['Product']['price'],0);?>  VND
								</div>
								<div id="giacu">
								</div>
							 </div>
					    </div>
						
						<?php } ?>
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                <?php } ?>
                 
			
			<!--end import-->
			</div>
           
		   
          </div>
        </div>
        
		
      </div> 
			 <div id="cont-box2">
				  
				<link rel="stylesheet" type="text/css" href="/noithat/skin1.css">
			  
				  <script type="text/javascript">

			jQuery(document).ready(function() {
				// Initialise the first and second carousel by class selector.
				// Note that they use both the same configuration options (none in this case).
				jQuery('.first-and-second-carousel1').jcarousel({
				 start: 6,
					scroll :1,
					auto: 0,
					wrap: 'circular'

				 });
				
				// If you want to use a caoursel with different configuration options,
				// you have to initialise it seperately.
				// We do it by an id selector here.
				
			});

			</script>

				  
					<div class="thuonghieunt">ĐỐI TÁC - KHÁCH HÀNG</div>
						
						
								
						  <ul style="margin-left:10px;">
								<li>	
									<div class="images_item">
										<a href="/" target="_blank"></a><a href="/" target="_blank">
											<img style="float:left" src="/noithat/691225.jpg" width="138" height="47">
										</a>										
									</div>
								</li>
								<li>	
									<div class="images_item">
										<a href="/" target="_blank"></a><a href="/" target="_blank">
											<img style="float:left" src="/noithat/logo-hea.jpg" width="310" height="77">
										</a>										
									</div>
								</li>
						</ul>

				  </div>
	  </div>
</div>




<?php echo $this->element('footer');?>


</div></body></html>