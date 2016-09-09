<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn" dir="ltr">
<head>



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
<link href="/css/main.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
<link href="/css/jcarousel.responsive.css" rel="stylesheet">
<link href="/css/frontend.css" rel="stylesheet">
<link href="/css/frontendsp.css" rel="stylesheet">
<link href="/css/detail.css" rel="stylesheet">
<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/jquery.mobile.custom.min.js" type="text/javascript"></script> 
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/owl.carousel.js" type="text/javascript"></script> 
<script src="/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="/js/jcarousel.responsive.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script> 	
</head>
<body id="top">
<div id="header">
	<div id="my-header" class="collapse navbar-collapse">
       
    </div>
    <div id="scrool_menu">
    </div>
 
	
</div>
<div class="navbar-toggle collapsed advsp">		
	<div id="headersp">	
		<div class="col-xs-12">
			<div class="rowsp">
				<div id="logo_sp">
					<a href="<?php echo DOMAIN;?>"><img src="/images/logo.jpg" alt="logo"></a>
				</div>
			<button type="button" class="navbar-toggle" data-toggle="collapse"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="menubutton">                
			</button>
			<button type="button" class="navbar-toggle collapsed displaynone" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="menubuttonclose">
							  
			</button>  
			</div>
			
		</div>
		 
	</div>
</div>

<div class="displaynone" id="bs-example-navbar-collapse-1">
		<div id="backgourndmenu" class="contents">
			<div id="bg_menu" class="switch">				
				<ul>
				<li class="link-direct"><a href="<?php echo DOMAIN;?>"> <div>Trang chủ</div></a></li>
				
				<li>
					<a class="toggle menu" href="#"><div>Sản phẩm</div></a>				
					<ul class="inner child" style="display: none;">
									 <?php
										$categoryproduct = $this->requestAction('/comment/submenuproduct');
										$i=0;
										foreach($categoryproduct as $categoryproduct){
									 ?>
									 <li>
									 <div><a href="<?php echo DOMAIN;?>danh-sach-san-pham/<?php echo $categoryproduct['Catproduct']['id'];?>/<?php echo $categoryproduct['Catproduct']['alias'];?>.html"><?php echo $categoryproduct['Catproduct']['name'];?></a></div>
									 </li>
										<?php } ?>
									</ul>
				</li>				
					<?php $menupro1 = $this->requestAction('/comment/menucategory') ?>
				   <?php foreach($menupro1 as $menupro1){?>
				   <li>
				   <a class="toggle menu" href="#"> <div><?php echo $menupro1['Category']['name'];?> </div></a>
				  <ul class="inner child" style="display: none;">
				 <?php
					$news = $this->requestAction('/comment/getinfo/'.$menupro1['Category']['id']);
					$i=0;
					foreach($news as $news){
				 ?>
				 <li>
				 <div><a href="<?php echo DOMAIN;?>chi-tiet-tin/<?php echo $news['News']['id'];?>/<?php echo $news['News']['alias'];?>.html"><?php echo $news['News']['title'];?></a></div>
				 </li>
				 
					<?php } ?>
				</ul>
				   <?php } ?>
					</li>                               
				<li class="link-direct"><a href="/lien-he"><span class="home_menu5"> <div>LIÊN HỆ </div></span></a></li>
			</ul>
			</div>
		</div>
</div>

<div class="navbar-toggle collapsed advsp">
	<div class="col-xs-12">
		<div class="rowsp">
		<?php $adv3= $this->requestAction('/comment/advf') ?>
		<?php foreach($adv3 as $advs3 ){  ?>
		<a href="<?php echo $advs3['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs3['Advertisement']['images']?>" border="0" style="max-height:230px; float:left; margin-left:3px;" alt="" /></a>
	   <?php } ?>
		</div>
	</div>
</div>

<div id="wrapper"> 
        <div id="content">		 
               <?php echo $content_for_layout; ?>			   
             <div class="clearfix"></div> 	   
		 		<?php echo $this->element('footer');?>
	    </div>  
        
   </div><!--end wrapper-->
		
	
		
		 

	

</body>
</html>