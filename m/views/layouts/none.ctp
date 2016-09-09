<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn" dir="ltr">
<head>


<?php
echo $javascript->link('stickytooltip');
?>
<?php echo $html->css('stickytooltip'); ?>
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
<link href="<?php echo DOMAIN;?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo DOMAIN;?>css/style_main_center.css" rel="stylesheet" type="text/css" />
<meta property="fb:app_id" content="828939813805792"/>
 <script src="<?php echo DOMAIN ?>js/floater_xlib.js" type="text/javascript"></script>
<link href="<?php echo DOMAIN;?>css/default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo DOMAIN;?>css/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="<?php echo DOMAIN;?>css/nivo-slider.css" type="text/css" media="screen" />
  <script>
  $(document).ready(function() {
    $("#tabs").tabs();
  });
  $(document).ready(function() {
    $("#tabs1").tabs();
  });
  $(document).ready(function() {
    $("#tabs2").tabs();
  });
  $(document).ready(function() {
    $("#tabs3").tabs();
  });
  </script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
	
    </script>
   
		
<script type="text/javascript" charset="utf-8" src="<?php echo DOMAIN;?>js/jquery.js"></script>
    <script type="text/javascript">

var slideTime = 700;
var floatAtBottom = false;

function pepsi_floating_init()
{
	xMoveTo('floating_banner_right', 887 - (1024-screen.width), 0);

	winOnResize(); // set initial position
	xAddEventListener(window, 'resize', winOnResize, false);
	xAddEventListener(window, 'scroll', winOnScroll, false);
}
function winOnResize() {
	checkScreenWidth();
	winOnScroll(); // initial slide
}
function winOnScroll() {
  var y = xScrollTop();
  if (floatAtBottom) {
    y += xClientHeight() - xHeight('floating_banner_left');
  }
  
  xSlideTo('floating_banner_left', (screen.width - (1050-772) - 770)/2-145 , y, slideTime);  // Chỉnh khoảng cách bên trái
  xSlideTo('floating_banner_right', (screen.width - (530-795) + 770)/2 -15, y, slideTime); // // Chỉnh khoảng cách bên Phải
}
	
function checkScreenWidth()
{
	if( document.body.clientWidth <= 1024 )
	{	
		document.getElementById('floating_banner_left').style.display = 'none';
		document.getElementById('floating_banner_right').style.display = 'none';
	}
	else
	{
		document.getElementById('floating_banner_left').style.display = '';
		document.getElementById('floating_banner_right').style.display = '';	
	}
}

</script>
 <script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.carouFredSel-5.1.3-packed.js"></script>


<style>
            a{
             color: black;
            }
  .page{
 float:right;
 margin-right:20px;
  padding-bottom:0;
  height:30px;
 
 } 
.page a{
 text-align:center;
 padding:3px 5px;
 background:#fff;
 border:1px solid silver;
 margin-left:5px;

 }
.page a:hover{
 background:#3960ab;
 border:1px solid #ae4e04;
 color: #FFF;
 } 
.page span.current {
 padding:3px 5px;
 background:#FFF;
 border:1px solid  silver;
 
 } 
.page span.current a{
 
 background:#fbdc70;
 border:1px solid #ae4e04;
 
 }
            </style>
			
	
	<style>
.m1 { 
color:#000;
    
	background:#F3F3F3;
	border-top:2px solid #404040;
}

</style>
<script type="text/javascript" src="<?php echo DOMAIN;?>highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN;?>highslide/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = '<?php echo DOMAIN;?>highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
hs.numberPosition = 'caption';
hs.dimmingOpacity = 0.75;

// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
	
</head>
<body>
<div id="floating_banner_left" style="position:absolute; z-index: 99999; overflow:hidden; margin: 90px 0px; left: 0px; width: 155px; border: 0px solid #000;">
<div id="floating_banner_left_content">
<?php $adv1= $this->requestAction('/comment/adv1') ?>
    <?php foreach($adv1 as $advs1 ){  ?>
    <a href="<?php echo $advs1['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs1['Advertisement']['images']?>" border="0" width="155px" style="max-height:450px;" alt="" /></a>
   
 
   <?php } ?>

</div>
</div>



<div id="floating_banner_right" style="position:absolute;z-index: 99999; overflow:hidden; margin: 90px 0; right: 0px; width: 155px; border: 0px solid #000;">
	<div id="floating_banner_right_content"  >
    <?php $adv2= $this->requestAction('/comment/adv2') ?>
    <?php foreach($adv2 as $advs2 ){  ?>
    <a href="<?php echo $advs2['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs2['Advertisement']['images']?>" border="0" width="155px" style="max-height:450px;" alt="" /></a><br />
   <?php } ?>
</div>
</div>
<script>
	runQuery();
</script>
<script>
	pepsi_floating_init();
</script>
<div id="big">
   
		
         <?php echo $this->element('header');?> 
		 
      <div id="wrapper">  
        
         <div id="body">
		  
         <div id="content">
		

		 
               <?php echo $content_for_layout; ?>
			   
             <div class="clearfix"></div> 
			  <div style="float:left; width:1000px;">
		 <?php echo $this->element('partner');?> 
		 </div>
		  <div style="float:left; width:1000px;">
		  <?php $adv3= $this->requestAction('/comment/advf') ?>
    <?php foreach($adv3 as $advs3 ){  ?>
    <a href="<?php echo $advs3['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs3['Advertisement']['images']?>" border="0" style="max-height:230px; float:left; margin-left:3px;" alt="" /></a>
   <?php } ?>
		  </div>
		 
		 <div style="border-top:2px solid #ccc; margin:10px auto; width:1000px; float:left; line-height:20px;">
		 <div style="width:220px; float:left; margin:2px; padding:5px 0px;"> 
		 <h3>Thông tin chung </h3>
		 <?php $showtin = $this->requestAction('/comment/showtin/282');
		 foreach($showtin as $showtin) { ?>
		 <p> <a href="<?php echo DOMAIN;?>chi-tiet-tin/<?php echo $showtin['News']['id'];?>" style="color:#0181FF;"> <?php echo $showtin['News']['title'];?></a></p>
		 <?php } ?>
		 </div>
		 
		  <div style="width:210px; float:left; margin:2px; padding:5px 0px;"> 
		 <h3>Đối với người dùng</h3>
		 <?php $showtin = $this->requestAction('/comment/showtin/281');
		 foreach($showtin as $showtin) { ?>
		 <p> <a href="<?php echo DOMAIN;?>chi-tiet-tin/<?php echo $showtin['News']['id'];?>" style="color:#0181FF;"> <?php echo $showtin['News']['title'];?></a></p>
		 <?php } ?>
		 </div>
		 <div style="width:200px; float:left; margin:2px; padding:5px 0px;"> 
		 <h3>Liên hệ</h3>
		 <p><a href="<?php echo DOMAIN;?>lien-he" style="color:#0181FF"> Liên hệ</a> </p>
		  <p><a href="<?php echo DOMAIN;?>" style="color:#0181FF"> Facebook</a> </p>
		   <p><a href="<?php echo DOMAIN;?>" style="color:#0181FF"> Twitter</a> </p>
		 </div>
		 
		 <div style="width:340px; float:left; margin:2px; padding:5px 0px;"> 
		 <center>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/bac100vn" data-width="340"  data-show-faces="true" data-stream="false" data-header="true"></div>
</center>
		 </div>
		 
		 </div>
	               </div>  
          </div><!--end body--> 
   </div><!--end wrapper-->
		
		<div style="overflow:hidden; background:#EEEEEE; ">
		<div style="width:1000px; margin:auto;">
		<a href="<?php echo DOMAIN;?>dang-ky"> <img src="<?php echo DOMAIN;?>css/images/nhantin.png"  style="margin:auto;"/> </a>
		</div>
		</div>
		
        <div style=" color:#fff; margin:auto; padding:10px 0px; background:#393939; overflow:hidden;">
	
		<?php echo $this->element('footer');?>
		
		</div>

	</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5066a052315a35e4"></script>

</body>
</html>