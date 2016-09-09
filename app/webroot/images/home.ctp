
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
<link href="<?php echo DOMAIN;?>css/main.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/owl.theme.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/jcarousel.responsive.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/frontend.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/frontendsp.css" rel="stylesheet">
<link href="<?php echo DOMAIN;?>css/detail.css" rel="stylesheet">
<script src="<?php echo DOMAIN;?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN;?>js/jquery.mobile.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo DOMAIN;?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN;?>js/owl.carousel.js" type="text/javascript"></script> 
<script src="<?php echo DOMAIN;?>js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN;?>js/jcarousel.responsive.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN;?>js/main.js" type="text/javascript"></script>
<meta name="description" content="">
<link href="/noithat/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/noithat/jquery.idTabs.min.js"></script>


<script type="text/javascript" src="/noithat/baivietseo.js"></script>
<script type="text/javascript" src="/noithat/jquery.jcarousel.min.js"></script>

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
   <div class="countcart"><a href="<?php echo DOMAIN;?>gio-hang.html">0 Sản phầm</a></div>
	<div class="supprot_online">
			<table width="175" border="0" style=" padding:0px; margin:0px; margin-left:5px">
			  <tbody><tr>
				<td><a rel="nofollow" href="ymsgr:sendIM?">
					<img src="/noithat/online" alt="Text">
					</a></td>
				<td>KD Giải Phóng 1</td>
			  </tr>
			</tbody></table>
						<table width="175" border="0" style=" padding:0px; margin:0px; margin-left:5px">
			  <tbody><tr>
				<td><a rel="nofollow" href="ymsgr:sendIM?">
					<img src="/noithat/online(1)" alt="Text">
					</a></td>
				<td>KD Giải Phóng 3</td>
			  </tr>
			</tbody></table>
						<table width="175" border="0" style=" padding:0px; margin:0px; margin-left:5px">
			  <tbody><tr>
				<td><a rel="nofollow" href="ymsgr:sendIM?noithathuyenhong@yahoo.com">
					<img src="/noithat/online" alt="Text">
					</a></td>
				<td>KD Giải Phóng 2</td>
			  </tr>
			</tbody></table>
						<table width="175" border="0" style=" padding:0px; margin:0px; margin-left:5px">
			  <tbody><tr>
				<td><a rel="nofollow" href="ymsgr:sendIM?noithathuyenhong@yahoo.com">
					<img src="/noithat/online" alt="Text">
					</a></td>
				<td>KD Cầu Giấy 2</td>
			  </tr>
			</tbody></table>
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
      <div id="logo"><a href="http://noithathuyenhong.com/"><img src="/noithat/logo-hea.jpg" width="680" height="100"></a>
        <div class="list_item_top">
	  </div>
	  </div>
	
</div>
    <div id="nav-size">
      <div id="nav">
	  		 <div id="nav-menuhome" style="position:relative;"><img src="/noithat/tab.png" width="210" height="45">
		 		
		</div>
		        <div id="nav-menuhome2">
          <ul>
            <li class="activ_mtop"><a href="http://noithathuyenhong.com/index.html"><span>Trang chủ</span></a></li>
            <li><a href="http://noithathuyenhong.com/tin-tuc.html"><span>Tin tức</span></a></li>
            <li><a href="http://noithathuyenhong.com/gioi-thieu.html"><span>Giới thiệu</span></a></li>
            <li><a href="http://noithathuyenhong.com/khuyen-mai.html"><span>Khuyến mãi</span></a></li>
           <!-- <li ><a href="gioi-thieu.html"><span>Giới thiệu</span></a></li>
            <li><a href="tin-tuc.html"><span>Tin tức</span></a></li>-->
            <li><a href="http://noithathuyenhong.com/suc-khoe-cho-be.html"><span>Phong thủy</span></a></li>
            <li><a href="http://noithathuyenhong.com/quy-dinh-chung/chinh-sach-bao-hanh/36.html"><span>Chính sách bảo hành</span></a></li>
            <li><a href="http://noithathuyenhong.com/tuyen-dung.html"><span>Tuyển dụng</span></a></li>
            <li><a href="http://noithathuyenhong.com/lien-he.html"><span>Liên hệ</span></a></li>
          </ul>
        </div>
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
          <ul>
		              <li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat.html">Bàn làm viêc Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-chan-sat/222.html">Bàn chân sắt</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-lam-viec-athena/230.html">Bàn làm việc Athena</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-hoa-phat-vang-xanh/115.html">Bàn Hòa Phát vàng xanh</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-hoa-phat-ghi-chi/135.html">Bàn Hòa Phát ghi chì</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-maple-walnut/131.html">Bàn Maple &amp; Walnut</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-hoa-phat-new-trend/141.html">Bàn Hòa Phát  New Trend</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/ban-hoa-phat--royal/143.html">Bàn  Hòa Phát   Royal</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-hoa-phat/hoc-ban-tu-phu/185.html">Hộc bàn - Tủ phụ</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/gia-sach-gia-sieu-thi.html">Giá sách - Giá siêu thị</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/gia-sach-gia-sieu-thi/gia-sach/236.html">Giá sách</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/gia-sach-gia-sieu-thi/tu-thu-vien-di-dong/237.html">Tủ thư viện di động</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/gia-sach-gia-sieu-thi/gia-sieu-thi/219.html">Giá siêu thị</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ghe-quay-bar.html">Ghế Quầy bar</a>							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc.html">Bàn ghế giám đốc</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc/ban-giam-doc-son-pu-cao-cap/145.html">Bàn giám đốc sơn PU cao cấp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc/ghe-giam-doc-tq/99.html">Ghế giám đốc TQ</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc/ban-truong-phong-nv/148.html">Bàn Trưởng Phòng - NV</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc/ban-giam-doc-verneer/216.html">Bàn Giám Đốc Verneer</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-ghe-giam-doc/ban-giam-doc-newtrend/199.html">Bàn giám đốc Newtrend</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat.html">Tủ sắt Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat/tu-file/229.html">Tủ file</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat/tu-sat-van-phong-tu-ho-so/166.html">Tủ sắt văn phòng - Tủ hồ sơ</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat/tu-locker/238.html">Tủ Locker</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat/tu-ghep-hoa-phat/165.html">Tủ ghép Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat/tu-ton-day-hoa-phat/184.html">Tủ tôn dầy Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat.html">Bàn họp Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-hp/233.html">Bàn họp HP</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-veneer/234.html">Bàn họp Veneer</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-athena/239.html">Bàn họp Athena</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-son-pu-cao-cap/240.html">Bàn họp sơn PU cao cấp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-hoa-phat-vang-xanh/153.html">Bàn họp Hòa Phát vàng xanh</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-hoa-phat-royal/155.html">Bàn họp Hòa Phát Royal</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-hop-hoa-phat/ban-hop-newtrend/200.html">Bàn họp Newtrend</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat.html">Tủ gỗ Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-veneer/248.html">Tủ veneer</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-royal/250.html">Tủ Royal</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-son-pu-cao-cap/241.html">Tủ sơn PU cao cấp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-go-athena/231.html">Tủ gỗ Athena</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-bc/244.html">Tủ BC</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-go-sv/242.html">Tủ gỗ SV </a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-go-newtrend/243.html">Tủ gỗ Newtrend</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/tu-go-hoa-phat/tu-tai-lieu-mau-ghi-hp/187.html">Tủ tài liệu mầu ghi HP</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ban-vi-tinh-hoa-phat.html">Bàn vi tính Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ban-vi-tinh-hoa-phat/ban-vi-tinh-go-hoa-phat/156.html">Bàn vi tính gỗ Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-vi-tinh-hoa-phat/ban-vi-tinh-khung-sat/157.html">Bàn vi tính khung sắt</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac.html">Két sắt - Két bạc</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-sat-tai-loc/223.html">Két sắt tài lộc</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-bac-chong-chay-ks/224.html">Két bạc chống cháy KS</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-sat-khach-san-gia-dinh/225.html">Két sắt khách sạn - gia đình</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-sat-khoa-2-trong-1/226.html">Két sắt khóa 2 trong 1</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-bac-an-toan-ka/132.html">Két bạc an toàn KA</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac/ket-sat-bao-mat/111.html">Két sắt bảo mật</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong.html">Ghế Văn phòng</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-nhan-vien-hoa-phat/129.html">Ghế nhân viên Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-hoa-phat-chan-quy/142.html">Ghế Hòa Phát chân quỳ</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-luoi-hoa-phat/100.html">Ghế lưới Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-da-hoa-phat-cao-cap/105.html">Ghế da Hòa Phát cao cấp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-hop-da-cao-cap/126.html">Ghế họp da cao cấp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-hoa-phat-lung-cao/158.html">Ghế Hòa Phát lưng cao</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-hoa-phat-lung-trung/159.html">Ghế Hòa Phát lưng trung</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong/ghe-xoay-tre-em/162.html">Ghế xoay trẻ em</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ghe-gap-ghe-nan-ghe-nhua.html">Ghế gấp, ghế nan, ghế nhựa</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-gap-ghe-nan-ghe-nhua/ghe-lung-tua/252.html">Ghế lưng tựa</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ghe-gap-ghe-nan-ghe-nhua/ghe-don/253.html">Ghế đôn</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/sofa-van-phong.html">Sofa văn phòng</a>							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong.html">Nội thất công cộng</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong/ban-hoi-truong-hoa-phat/169.html">Bàn hội trường Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong/buc-phat-bieu-buc-tuong-bac/170.html">Bục phát biểu - Bục tượng Bác</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong/ghe-hoi-truong-hoa-phat/171.html">Ghế hội trường Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong/ghe-phong-cho-hoa-phat/173.html">Ghế phòng chờ Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-cong-cong/ghe-san-van-dong/174.html">Ghế sân vận động</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc.html">Nội thất trường học</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-truong-mau-giao/178.html">Bàn ghế trường Mẫu giáo</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-hoc-sinh-lien-tu/201.html">Bàn học sinh liền tủ</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-hs-cap-12-gia-dinh/180.html">Bàn ghế HS cấp 1-2 (gia đình)</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-hs-cap-12-truong-hoc/175.html">Bàn ghế HS cấp 1-2 (trường học)</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-ptth-cd-dh/179.html">Bàn ghế PTTH - CĐ - ĐH...</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-theo-thong-tu-bgddt/176.html">Bàn ghế theo thông tư BGDĐT</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/ban-ghe-giao-vien/177.html">Bàn ghế giáo viên</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/thu-vien-phong-chuc-nang/181.html">Thư viện - Phòng chức năng</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/noi-that-phong-thi-nghiem/183.html">Nội thất phòng thí nghiệm</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-truong-hoc/giuong-noi-tru-hoa-phat/182.html">Giường nội trú Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat.html">Bàn ăn Hòa Phát</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat/ban-ghe-go-tu-nhien/247.html">Bàn ghế gỗ tự nhiên</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat/ban-ghe-khu-cong-nghiep/246.html">Bàn ghế khu công nghiệp</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat/ban-kinh-sang-trong/245.html">Bàn kính sang trọng</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat/ban-ghe-mat-composite/251.html">Bàn ghế mặt composite</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung.html">Nội thất hàng gia dụng</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/hang-gia-dung/204.html">Hàng gia dụng</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/thang-cac-loai/205.html">Thang các loại</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/hang-gd-go-son-pu/206.html">Hàng GĐ gỗ sơn PU</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/ban-hoc-gia-dinh/207.html">Bàn học Gia đình</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/gia-dung-sach-bao/208.html">Giá đựng sách báo</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hang-gia-dung/tu-dung-giay/209.html">Tủ đựng giầy</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                        <li><a href="http://noithathuyenhong.com/san-pham/noi-that-hoa-phat-khac.html">Nội thất Hòa Phát khác</a>								<ul class="cap2">
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hoa-phat-khac/thiet-bi-y-te/249.html">Thiết bị y tế</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hoa-phat-khac/vach-ngan-hoa-phat/194.html">Vách ngăn Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hoa-phat-khac/ban-ghe-cafeban-tra/212.html">Bàn ghế Cafe-Bàn trà</a>
					<ul>
											</ul>
					
					</li>
									<li><a href="http://noithathuyenhong.com/san-pham/noi-that-hoa-phat-khac/ban-quay-le-tan-hoa-phat/203.html">Bàn quầy lễ tân Hòa Phát</a>
					<ul>
											</ul>
					
					</li>
								</ul>
							</li>
                      </ul>
        </div>
      </div>
      
          
      <div id="box-h-right">
        <div id="cont-box1">
          <div id="box-banner-home">
            
                <link rel="stylesheet" href="/noithat/default.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/pascal.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/orman.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/nivo-slider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/noithat/style(1).css" type="text/css" media="screen">

    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider" style="width: 730px !important; height: 260px !important; position: relative; background: url(&quot;upload/hinhanh/8038512070716281.jpg&quot;) no-repeat;">
                                   <a href="http://noithathuyenhong.com.vn/" target="_blank" class="nivo-imageLink" style="display: none;"> <img alt="noi that Hoa Phat,noi that van phong" title="noi that Hoa Phat,noi that van phong" src="/noithat/143650900354532.jpg" width="730" height="260" style="display: none;"></a>
                            <a href="http://noithathuyenhong.com.vn/" target="_blank" class="nivo-imageLink" style="display: none;"> <img alt="noi that Hoa Phat,noi that van phong" title="noi that Hoa Phat,noi that van phong" src="/noithat/299283344057438.jpg" width="730" height="260" style="display: none;"></a>
                            <a href="http://noithathuyenhong.com.vn/" target="_blank" class="nivo-imageLink" style="display: block;"> <img alt="noi that Hoa Phat,noi that van phong" title="noi that Hoa Phat,noi that van phong" src="/noithat/8038512070716281.jpg" width="730" height="260" style="display: none;"></a>
              
            <div class="nivo-caption" style="opacity: 0.8;"><p style="display: block; opacity: 3.94779e-05;">noi that Hoa Phat,noi that van phong</p></div><div class="nivo-directionNav" style="display: none;"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div><div class="nivo-slice" style="left: 0px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) 0px 0% no-repeat;"></div><div class="nivo-slice" style="left: 49px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -49px 0% no-repeat;"></div><div class="nivo-slice" style="left: 98px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -98px 0% no-repeat;"></div><div class="nivo-slice" style="left: 147px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -147px 0% no-repeat;"></div><div class="nivo-slice" style="left: 196px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -196px 0% no-repeat;"></div><div class="nivo-slice" style="left: 245px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -245px 0% no-repeat;"></div><div class="nivo-slice" style="left: 294px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -294px 0% no-repeat;"></div><div class="nivo-slice" style="left: 343px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -343px 0% no-repeat;"></div><div class="nivo-slice" style="left: 392px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -392px 0% no-repeat;"></div><div class="nivo-slice" style="left: 441px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -441px 0% no-repeat;"></div><div class="nivo-slice" style="left: 490px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -490px 0% no-repeat;"></div><div class="nivo-slice" style="left: 539px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -539px 0% no-repeat;"></div><div class="nivo-slice" style="left: 588px; width: 49px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -588px 0% no-repeat;"></div><div class="nivo-slice" style="left: 637px; width: 49px; height: 0%; opacity: 0; bottom: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -637px 0% no-repeat;"></div><div class="nivo-slice" style="left: 686px; width: 44px; height: 0%; opacity: 0; top: 0px; overflow: hidden; background: url(&quot;upload/hinhanh/143650900354532.jpg&quot;) -686px 0% no-repeat;"></div></div>
        </div>

    </div>
    <script type="text/javascript" src="/noithat/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
	$j = jQuery.noConflict();
    $j(window).load(function() {
        $j('#slider').nivoSlider();
    });
    </script>     
          </div>
          <div id="box-home-right">
            <div id="right-box1">
              <div id="tab-navd">SẢN PHẨM NỔI BẬT</div>
              <div id="navd-bg3">
                <div id="noidung-right">
                  

<div class=" jcarousel-skin-tango3"><div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul id="first-carousel" class="first-and-second-carousel3 jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -1150px; width: 1480px;">
	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-chan-sat-hr120sc7/1739.html" class="title1"><img src="/noithat/405250399819.jpg" title="Bàn làm việc chân sắt HR120SC7" alt="Bàn làm việc chân sắt HR120SC7" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-chan-sat-hr120sc7/1739.html" class="title1">Bàn làm việc chân sắt HR120SC7</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">880,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-hop-ct-3012h1/1323.html" class="title1"><img src="/noithat/327977174440.jpg" title="Bàn họp CT 3012H1" alt="Bàn họp CT 3012H1" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-hop-ct-3012h1/1323.html" class="title1">Bàn họp CT 3012H1</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">5,560,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1"><img src="/noithat/300357478613.jpg" title="Bàn giám đốc DT 1890H2" alt="Bàn giám đốc DT 1890H2" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1">Bàn giám đốc DT 1890H2</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,380,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-chan-sat-hr120sc7/1739.html" class="title1"><img src="/noithat/405250399819.jpg" title="Bàn làm việc chân sắt HR120SC7" alt="Bàn làm việc chân sắt HR120SC7" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-lam-viec-chan-sat-hr120sc7/1739.html" class="title1">Bàn làm việc chân sắt HR120SC7</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">880,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" jcarouselindex="5" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-hop-ct-3012h1/1323.html" class="title1"><img src="/noithat/327977174440.jpg" title="Bàn họp CT 3012H1" alt="Bàn họp CT 3012H1" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-hop-ct-3012h1/1323.html" class="title1">Bàn họp CT 3012H1</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">5,560,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal" jcarouselindex="6" style="float: left; list-style: none;">
	 
	 <div id="box-spr" class="product_km" style="position:relative;">
                <div id="bg-pror3"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1"><img src="/noithat/300357478613.jpg" title="Bàn giám đốc DT 1890H2" alt="Bàn giám đốc DT 1890H2" width="175" height="145"></a></div>
<h3 id="box-sph1"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1">Bàn giám đốc DT 1890H2</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,380,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div>
			 	
			  </li>
  	  </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal" disabled="false" style="display: block;"></div><div class="jcarousel-next jcarousel-next-horizontal" disabled="false" style="display: block;"></div></div></div>
 
				  
				  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="cont-box2" style="border:none;height:auto;">
           





<!--<div id="box-sanpham-nex">
            <div id="bt-back"></div>
            <div id="box-table-pro">
              <div id="box-sp1">
                <div id="bg-pro"><img src="images/anh-sp/21-106-126.jpg" width="136" height="136" /></div>
                <div id="box-tdsp"><a href="#" class="title1">TAB ASUS Nexus USA 7 32G Black Hàng chính...</a><br />
                </div>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">169.000 d</div>
                  <div id="giacu">199.000 d</div>
                </div>
              </div>
              <div id="box-sp1">
                <div id="bg-pro"><img src="images/anh-sp/mi1.jpg" width="136" height="136" /></div>
                <div id="box-tdsp"><a href="#" class="title1">TAB ASUS Nexus USA 7 32G Black Hàng chính...</a><br />
                </div>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">169.000 d</div>
                  <div id="giacu">199.000 d</div>
                </div>
              </div>
              <div id="box-sp1">
                <div id="bg-pro"><img src="images/anh-sp/1_big20130502093242812378.jpg" width="136" height="136" /></div>
                <div id="box-tdsp"><a href="#" class="title1">TAB ASUS Nexus USA 7 32G Black Hàng chính...</a><br />
                </div>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">169.000 d</div>
                  <div id="giacu">199.000 d</div>
                </div>
              </div>
              <div id="box-sp1">
                <div id="bg-pro"><img src="images/anh-sp/ka1.jpg" width="136" height="136" /></div>
                <div id="box-tdsp"><a href="#" class="title1">TAB ASUS Nexus USA 7 32G Black Hàng chính...</a><br />
                </div>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">169.000 d</div>
                  <div id="giacu">199.000 d</div>
                </div>
              </div>
              <div id="box-sp2">
                <div id="bg-pro"><img src="images/anh-sp/02-036-106.jpg" width="136" height="136" /></div>
                <div id="box-tdsp"><a href="#" class="title1">TAB ASUS Nexus USA 7 32G Black Hàng chính...</a><br />
                </div>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">169.000 d</div>
                  <div id="giacu">199.000 d</div>
                </div>
              </div>
            </div>
            <div id="bt-nex"></div>
          </div>-->
<div class=" jcarousel-skin-tango"><div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul id="first-carousel" class="first-and-second-carousel jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -2240px; width: 3460px;">
	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt1890h27/1202.html" class="title1">
				<img src="/noithat/240065404851.jpg" alt="Bàn giám đốc DT1890H27" title="Bàn giám đốc DT1890H27" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt1890h27/1202.html" class="title1">Bàn giám đốc DT1890H27</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,260,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/bo-ban-giam-doc-dt-1890h24/1197.html" class="title1">
				<img src="/noithat/195190028030.jpg" alt="Bộ bàn Giám Đốc DT 1890H24" title="Bộ bàn Giám Đốc DT 1890H24" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-ban-giam-doc-dt-1890h24/1197.html" class="title1">Bộ bàn Giám Đốc DT 1890H24</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,180,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1">
				<img src="/noithat/300357478613.jpg" alt="Bàn giám đốc DT 1890H2" title="Bàn giám đốc DT 1890H2" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-giam-doc-dt-1890h2/1191.html" class="title1">Bàn giám đốc DT 1890H2</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,380,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/tu-sat-van-phong-tu-09k5/1092.html" class="title1">
				<img src="/noithat/451446710386.jpg" alt="Tủ sắt văn phòng TU 09K5" title="Tủ sắt văn phòng TU 09K5" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-sat-van-phong-tu-09k5/1092.html" class="title1">Tủ sắt văn phòng TU 09K5</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,050,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" jcarouselindex="5" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ket-bac-ks110k2c1/1007.html" class="title1">
				<img src="/noithat/329667629225.jpg" alt="Két bạc KS110K2C1" title="Két bạc KS110K2C1" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-bac-ks110k2c1/1007.html" class="title1">Két bạc KS110K2C1</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,800,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal" jcarouselindex="6" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ghe-giam-doc-da-cao-cap-tq08/790.html" class="title1">
				<img src="/noithat/890300858202.jpg" alt="Ghế giám đốc da cao cấp TQ08" title="Ghế giám đốc da cao cấp TQ08" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-giam-doc-da-cao-cap-tq08/790.html" class="title1">Ghế giám đốc da cao cấp TQ08</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">4,580,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-7 jcarousel-item-7-horizontal" jcarouselindex="7" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-may-tinh-bmt11/782.html" class="title1">
				<img src="/noithat/533414270604.jpg" alt="Bàn máy tính BMT11" title="Bàn máy tính BMT11" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-may-tinh-bmt11/782.html" class="title1">Bàn máy tính BMT11</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">985,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-8 jcarousel-item-8-horizontal" jcarouselindex="8" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1600e/658.html" class="title1">
				<img src="/noithat/091815371074.jpg" alt="Bàn trưởng phòng ET1600E" title="Bàn trưởng phòng ET1600E" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1600e/658.html" class="title1">Bàn trưởng phòng ET1600E</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,135,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-9 jcarousel-item-9-horizontal" jcarouselindex="9" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1400a/654.html" class="title1">
				<img src="/noithat/813521974001.jpg" alt="Bàn trưởng phòng ET1400A" title="Bàn trưởng phòng ET1400A" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1400a/654.html" class="title1">Bàn trưởng phòng ET1400A</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">2,761,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  	 <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-10 jcarousel-item-10-horizontal" jcarouselindex="10" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-sofa-bsf-62-v/593.html" class="title1">
				<img src="/noithat/032868124078.jpg" alt="Bàn sofa BSF 62 V" title="Bàn sofa BSF 62 V" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-sofa-bsf-62-v/593.html" class="title1">Bàn sofa BSF 62 V</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">1,870,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-16 jcarousel-item-16-horizontal" jcarouselindex="16" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ghe-giam-doc-da-cao-cap-tq08/790.html" class="title1">
				<img src="/noithat/890300858202.jpg" alt="Ghế giám đốc da cao cấp TQ08" title="Ghế giám đốc da cao cấp TQ08" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-giam-doc-da-cao-cap-tq08/790.html" class="title1">Ghế giám đốc da cao cấp TQ08</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">4,580,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-17 jcarousel-item-17-horizontal" jcarouselindex="17" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-may-tinh-bmt11/782.html" class="title1">
				<img src="/noithat/533414270604.jpg" alt="Bàn máy tính BMT11" title="Bàn máy tính BMT11" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-may-tinh-bmt11/782.html" class="title1">Bàn máy tính BMT11</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">985,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-18 jcarousel-item-18-horizontal" jcarouselindex="18" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1600e/658.html" class="title1">
				<img src="/noithat/091815371074.jpg" alt="Bàn trưởng phòng ET1600E" title="Bàn trưởng phòng ET1600E" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1600e/658.html" class="title1">Bàn trưởng phòng ET1600E</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">3,135,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-19 jcarousel-item-19-horizontal" jcarouselindex="19" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1400a/654.html" class="title1">
				<img src="/noithat/813521974001.jpg" alt="Bàn trưởng phòng ET1400A" title="Bàn trưởng phòng ET1400A" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-truong-phong-et1400a/654.html" class="title1">Bàn trưởng phòng ET1400A</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">2,761,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li><li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-20 jcarousel-item-20-horizontal" jcarouselindex="20" style="float: left; list-style: none;"><div id="box-sp1" style="position:relative;">
                <div id="bg-pro">
				<table width="171" border="0" style="text-align:center; padding:0px; margin:0px;">
  <tbody><tr>
    <td><a href="http://noithathuyenhong.com/san-pham/ban-sofa-bsf-62-v/593.html" class="title1">
				<img src="/noithat/032868124078.jpg" alt="Bàn sofa BSF 62 V" title="Bàn sofa BSF 62 V" height="180" width="205"></a>				</td>
  </tr></tbody></table>
				
				</div>
                <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-sofa-bsf-62-v/593.html" class="title1">Bàn sofa BSF 62 V</a><br>
                </h3>
                <div id="box-tdsp">
                  <div class="giamoi" id="giamoi">1,870,000 đ</div>
                  <div id="giacu"></div>
                </div>
				              </div></li>
  	  </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal" disabled="false" style="display: block;"></div><div class="jcarousel-next jcarousel-next-horizontal" disabled="false" style="display: block;"></div></div></div>
 
        </div>
      </div>
    </div>
	
    <div id="index-box">
      <div id="cont-box1">
        <div id="box-sp-home1">
          <div id="bg-ct-right1">
            <div id="bg-ct-sph">
						<!--import-->
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu0">
						<li id="current"><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat.html" title="Tủ sắt Hòa Phát"><h2 style="font-size:16px;">Tủ sắt Hòa Phát</h2></a></li>
												
					</ul>
					<a class="viewall" href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat.html"> xem tất cả &gt;&gt;</a>
					
					
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten0"> 
                    <div style="display: block;" id="tab1_0">
					                   <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-sat-gia-dinh-tu15b3c4/1832.html" title="Tủ Sắt Gia Đình TU15B3C4" class="Tủ Sắt Gia Đình TU15B3C4">
					  <img alt="Tủ Sắt Gia Đình TU15B3C4" title="Tủ Sắt Gia Đình TU15B3C4" src="/noithat/596880037054.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-sat-gia-dinh-tu15b3c4/1832.html" title="Tủ Sắt Gia Đình TU15B3C4" class="Tủ Sắt Gia Đình TU15B3C4">Tủ Sắt Gia Đình TU15B3C4</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">4,730,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-sat-locker-9813k/1812.html" title="Tủ sắt LOCKER 981-3K" class="Tủ sắt LOCKER 981-3K">
					  <img alt="Tủ sắt LOCKER 981-3K" title="Tủ sắt LOCKER 981-3K" src="/noithat/256256752996.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-sat-locker-9813k/1812.html" title="Tủ sắt LOCKER 981-3K" class="Tủ sắt LOCKER 981-3K">Tủ sắt LOCKER 981-3K</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,650,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-ghep-tu118gt/1682.html" title="Tủ ghép TU118GT" class="Tủ ghép TU118GT">
					  <img alt="Tủ ghép TU118GT" title="Tủ ghép TU118GT" src="/noithat/738129978133.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-ghep-tu118gt/1682.html" title="Tủ ghép TU118GT" class="Tủ ghép TU118GT">Tủ ghép TU118GT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,505,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat-tu-09k2sa/1644.html" title="Tủ sắt Hòa Phát TU 09K2SA" class="Tủ sắt Hòa Phát TU 09K2SA">
					  <img alt="Tủ sắt Hòa Phát TU 09K2SA" title="Tủ sắt Hòa Phát TU 09K2SA" src="/noithat/488607862172.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-sat-hoa-phat-tu-09k2sa/1644.html" title="Tủ sắt Hòa Phát TU 09K2SA" class="Tủ sắt Hòa Phát TU 09K2SA">Tủ sắt Hòa Phát TU 09K2SA</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,520,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-9863kt/1133.html" title="Tủ Locker TU 986-3KT" class="Tủ Locker TU 986-3KT">
					  <img alt="Tủ Locker TU 986-3KT" title="Tủ Locker TU 986-3KT" src="/noithat/679134546836.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-9863kt/1133.html" title="Tủ Locker TU 986-3KT" class="Tủ Locker TU 986-3KT">Tủ Locker TU 986-3KT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">3,600,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-986lt/1131.html" title="Tủ Locker TU 986LT" class="Tủ Locker TU 986LT">
					  <img alt="Tủ Locker TU 986LT" title="Tủ Locker TU 986LT" src="/noithat/164732374788.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-986lt/1131.html" title="Tủ Locker TU 986LT" class="Tủ Locker TU 986LT">Tủ Locker TU 986LT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,390,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu9843kt/1129.html" title="Tủ Locker TU984-3KT" class="Tủ Locker TU984-3KT">
					  <img alt="Tủ Locker TU984-3KT" title="Tủ Locker TU984-3KT" src="/noithat/766778619115.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu9843kt/1129.html" title="Tủ Locker TU984-3KT" class="Tủ Locker TU984-3KT">Tủ Locker TU984-3KT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">3,130,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-lockertu-9842lt/1127.html" title="Tủ LockerTU 984-2LT" class="Tủ LockerTU 984-2LT">
					  <img alt="Tủ LockerTU 984-2LT" title="Tủ LockerTU 984-2LT" src="/noithat/440045033319.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-lockertu-9842lt/1127.html" title="Tủ LockerTU 984-2LT" class="Tủ LockerTU 984-2LT">Tủ LockerTU 984-2LT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,190,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-984lt/1125.html" title="Tủ Locker TU 984LT" class="Tủ Locker TU 984LT">
					  <img alt="Tủ Locker TU 984LT" title="Tủ Locker TU 984LT" src="/noithat/706969302930.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-984lt/1125.html" title="Tủ Locker TU 984LT" class="Tủ Locker TU 984LT">Tủ Locker TU 984LT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,300,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-9833kt/1124.html" title="Tủ Locker TU 983-3KT" class="Tủ Locker TU 983-3KT">
					  <img alt="Tủ Locker TU 983-3KT" title="Tủ Locker TU 983-3KT" src="/noithat/705498395577.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/tu-locker-tu-9833kt/1124.html" title="Tủ Locker TU 983-3KT" class="Tủ Locker TU 983-3KT">Tủ Locker TU 983-3KT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,830,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                    	
						
						
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                
                 <script>
				
                    $(document).ready(function() {
                        $(".tap_menu_conten0 div").addClass('an'); // Initially hide all content
                        $(".tap_menu_conten0 li:first").attr("id","current"); // Activate first tab
                        $(".tap_menu_conten0 div:first").removeClass('an'); // Show first tab content
						$(".tap_menu_conten0 div:first").addClass('hienthi');
						$(".hienthi div").removeClass('an');
						$(".hienthi div").addClass('hienthi');
                        
                        $('.tap_menu0 a').hover(function(e) {
                            e.preventDefault();        
                            $(".tap_menu_conten0 div").addClass('an'); //Hide all content
                            $(".tap_menu0 li").attr("id",""); //Reset id's
                            $(this).parent().attr("id","current"); // Activate this
                          <!--  $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab-->
						    $(".tap_menu_conten0 div").removeClass('hienthi');
							var tap=$(this).attr('title');
							
							  $("#"+ tap ).addClass('hienthi');
							   $("#"+ tap ).removeClass('an');
							
							  $(".hienthi div").removeClass('an');
						      $(".hienthi div").addClass('hienthi');
							  $('#' + $(this).attr('title')).fadeIn();
                        });
                    })();
                </script>
			
			<!--end import-->
						<!--import-->
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu1">
						<li id="current"><a href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac.html" title="Két sắt - Két bạc"><h2 style="font-size:16px;">Két sắt - Két bạc</h2></a></li>
												
					</ul>
					<a class="viewall" href="http://noithathuyenhong.com/san-pham/ket-sat-ket-bac.html"> xem tất cả &gt;&gt;</a>
					
					
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten1"> 
                    <div style="display: block;" id="tab1_1">
					                   <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-bac-an-toan-ka320/1798.html" title="Két Bạc An Toàn KA320" class="Két Bạc An Toàn KA320">
					  <img alt="Két Bạc An Toàn KA320" title="Két Bạc An Toàn KA320" src="/noithat/728019766474.png" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-bac-an-toan-ka320/1798.html" title="Két Bạc An Toàn KA320" class="Két Bạc An Toàn KA320">Két Bạc An Toàn KA320</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">7,740,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-bac-an-toan-ka181/1797.html" title="Két Bạc An Toàn KA181" class="Két Bạc An Toàn KA181">
					  <img alt="Két Bạc An Toàn KA181" title="Két Bạc An Toàn KA181" src="/noithat/185038357884.png" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-bac-an-toan-ka181/1797.html" title="Két Bạc An Toàn KA181" class="Két Bạc An Toàn KA181">Két Bạc An Toàn KA181</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">4,950,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks05/1796.html" title="Két Khách sạn KKS05" class="Két Khách sạn KKS05">
					  <img alt="Két Khách sạn KKS05" title="Két Khách sạn KKS05" src="/noithat/751462212172.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks05/1796.html" title="Két Khách sạn KKS05" class="Két Khách sạn KKS05">Két Khách sạn KKS05</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,290,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks04/1795.html" title="Két Khách sạn KKS04" class="Két Khách sạn KKS04">
					  <img alt="Két Khách sạn KKS04" title="Két Khách sạn KKS04" src="/noithat/695994006293.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks04/1795.html" title="Két Khách sạn KKS04" class="Két Khách sạn KKS04">Két Khách sạn KKS04</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">16,400,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-kks01/1793.html" title="Két KKS01" class="Két KKS01">
					  <img alt="Két KKS01" title="Két KKS01" src="/noithat/714524134824.png" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-kks01/1793.html" title="Két KKS01" class="Két KKS01">Két KKS01</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,490,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks03/1792.html" title="Két Khách sạn KKS03" class="Két Khách sạn KKS03">
					  <img alt="Két Khách sạn KKS03" title="Két Khách sạn KKS03" src="/noithat/371145042635.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-khach-san-kks03/1792.html" title="Két Khách sạn KKS03" class="Két Khách sạn KKS03">Két Khách sạn KKS03</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,820,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-ks-168dt/1791.html" title="Két KS 168ĐT" class="Két KS 168ĐT">
					  <img alt="Két KS 168ĐT" title="Két KS 168ĐT" src="/noithat/534453364059.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-ks-168dt/1791.html" title="Két KS 168ĐT" class="Két KS 168ĐT">Két KS 168ĐT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">6,000,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks135-dt/1790.html" title="Két sắt  KS135 ĐT" class="Két sắt  KS135 ĐT">
					  <img alt="Két sắt  KS135 ĐT" title="Két sắt  KS135 ĐT" src="/noithat/717353647257.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks135-dt/1790.html" title="Két sắt  KS135 ĐT" class="Két sắt  KS135 ĐT">Két sắt  KS135 ĐT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">4,980,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks110-dt/1789.html" title="Két sắt  KS110 ĐT" class="Két sắt  KS110 ĐT">
					  <img alt="Két sắt  KS110 ĐT" title="Két sắt  KS110 ĐT" src="/noithat/779510556525.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks110-dt/1789.html" title="Két sắt  KS110 ĐT" class="Két sắt  KS110 ĐT">Két sắt  KS110 ĐT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">3,900,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks90-dt/1787.html" title="Két sắt  KS90 ĐT" class="Két sắt  KS90 ĐT">
					  <img alt="Két sắt  KS90 ĐT" title="Két sắt  KS90 ĐT" src="/noithat/560432078714.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ket-sat-ks90-dt/1787.html" title="Két sắt  KS90 ĐT" class="Két sắt  KS90 ĐT">Két sắt  KS90 ĐT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">3,460,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                    	
						
						
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                
                 <script>
				
                    $(document).ready(function() {
                        $(".tap_menu_conten1 div").addClass('an'); // Initially hide all content
                        $(".tap_menu_conten1 li:first").attr("id","current"); // Activate first tab
                        $(".tap_menu_conten1 div:first").removeClass('an'); // Show first tab content
						$(".tap_menu_conten1 div:first").addClass('hienthi');
						$(".hienthi div").removeClass('an');
						$(".hienthi div").addClass('hienthi');
                        
                        $('.tap_menu1 a').hover(function(e) {
                            e.preventDefault();        
                            $(".tap_menu_conten1 div").addClass('an'); //Hide all content
                            $(".tap_menu1 li").attr("id",""); //Reset id's
                            $(this).parent().attr("id","current"); // Activate this
                          <!--  $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab-->
						    $(".tap_menu_conten1 div").removeClass('hienthi');
							var tap=$(this).attr('title');
							
							  $("#"+ tap ).addClass('hienthi');
							   $("#"+ tap ).removeClass('an');
							
							  $(".hienthi div").removeClass('an');
						      $(".hienthi div").addClass('hienthi');
							  $('#' + $(this).attr('title')).fadeIn();
                        });
                    })();
                </script>
			
			<!--end import-->
						<!--import-->
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu2">
						<li id="current"><a href="http://noithathuyenhong.com/san-pham/ghe-van-phong.html" title="Ghế Văn phòng"><h2 style="font-size:16px;">Ghế Văn phòng</h2></a></li>
												
					</ul>
					<a class="viewall" href="http://noithathuyenhong.com/san-pham/ghe-van-phong.html"> xem tất cả &gt;&gt;</a>
					
					
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten2"> 
                    <div style="display: block;" id="tab1_2">
					                   <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-gl204/1838.html" title="Ghê GL204" class="Ghê GL204">
					  <img alt="Ghê GL204" title="Ghê GL204" src="/noithat/573945425049.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-gl204/1838.html" title="Ghê GL204" class="Ghê GL204">Ghê GL204</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,035,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-hop-vt1m/1837.html" title="Ghế Họp VT1M" class="Ghế Họp VT1M">
					  <img alt="Ghế Họp VT1M" title="Ghế Họp VT1M" src="/noithat/065637060957.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-hop-vt1m/1837.html" title="Ghế Họp VT1M" class="Ghế Họp VT1M">Ghế Họp VT1M</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">650,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-211/1801.html" title="Ghế  Lưới GL 211" class="Ghế  Lưới GL 211">
					  <img alt="Ghế  Lưới GL 211" title="Ghế  Lưới GL 211" src="/noithat/765258987471.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-211/1801.html" title="Ghế  Lưới GL 211" class="Ghế  Lưới GL 211">Ghế  Lưới GL 211</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,190,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl208-chan-nhua/1764.html" title="Ghế lưới GL208 chân nhựa" class="Ghế lưới GL208 chân nhựa">
					  <img alt="Ghế lưới GL208 chân nhựa" title="Ghế lưới GL208 chân nhựa" src="/noithat/542619591169.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl208-chan-nhua/1764.html" title="Ghế lưới GL208 chân nhựa" class="Ghế lưới GL208 chân nhựa">Ghế lưới GL208 chân nhựa</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,989,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl206-chan-ma/1763.html" title="Ghế Lưới GL206 Chân Mạ" class="Ghế Lưới GL206 Chân Mạ">
					  <img alt="Ghế Lưới GL206 Chân Mạ" title="Ghế Lưới GL206 Chân Mạ" src="/noithat/257512511610.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl206-chan-ma/1763.html" title="Ghế Lưới GL206 Chân Mạ" class="Ghế Lưới GL206 Chân Mạ">Ghế Lưới GL206 Chân Mạ</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,265,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-307/1754.html" title="Ghế  Lưới GL 307 " class="Ghế  Lưới GL 307 ">
					  <img alt="Ghế  Lưới GL 307 " title="Ghế  Lưới GL 307 " src="/noithat/029781249051.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-307/1754.html" title="Ghế  Lưới GL 307 " class="Ghế  Lưới GL 307 ">Ghế  Lưới GL 307 </a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,500,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-207/1747.html" title="Ghế  Lưới GL 207 " class="Ghế  Lưới GL 207 ">
					  <img alt="Ghế  Lưới GL 207 " title="Ghế  Lưới GL 207 " src="/noithat/901727670074.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-gl-207/1747.html" title="Ghế  Lưới GL 207 " class="Ghế  Lưới GL 207 ">Ghế  Lưới GL 207 </a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,650,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-vt1k-chan-son/1744.html" title="Ghế VT1K (Chân sơn)" class="Ghế VT1K (Chân sơn)">
					  <img alt="Ghế VT1K (Chân sơn)" title="Ghế VT1K (Chân sơn)" src="/noithat/919031666115.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-vt1k-chan-son/1744.html" title="Ghế VT1K (Chân sơn)" class="Ghế VT1K (Chân sơn)">Ghế VT1K (Chân sơn)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">490,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-cao-cap-gl311/1728.html" title="   Ghế lưới cao cấp GL311" class="   Ghế lưới cao cấp GL311">
					  <img alt="   Ghế lưới cao cấp GL311" title="   Ghế lưới cao cấp GL311" src="/noithat/107570642953.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-luoi-cao-cap-gl311/1728.html" title="   Ghế lưới cao cấp GL311" class="   Ghế lưới cao cấp GL311">   Ghế lưới cao cấp GL311</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,290,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-xoay-van-phong-gl-209-den/1727.html" title="Ghế xoay văn phòng GL 209 Đen" class="Ghế xoay văn phòng GL 209 Đen">
					  <img alt="Ghế xoay văn phòng GL 209 Đen" title="Ghế xoay văn phòng GL 209 Đen" src="/noithat/228212582486.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-xoay-van-phong-gl-209-den/1727.html" title="Ghế xoay văn phòng GL 209 Đen" class="Ghế xoay văn phòng GL 209 Đen">Ghế xoay văn phòng GL 209 Đen</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,130,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                    	
						
						
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                
                 <script>
				
                    $(document).ready(function() {
                        $(".tap_menu_conten2 div").addClass('an'); // Initially hide all content
                        $(".tap_menu_conten2 li:first").attr("id","current"); // Activate first tab
                        $(".tap_menu_conten2 div:first").removeClass('an'); // Show first tab content
						$(".tap_menu_conten2 div:first").addClass('hienthi');
						$(".hienthi div").removeClass('an');
						$(".hienthi div").addClass('hienthi');
                        
                        $('.tap_menu2 a').hover(function(e) {
                            e.preventDefault();        
                            $(".tap_menu_conten2 div").addClass('an'); //Hide all content
                            $(".tap_menu2 li").attr("id",""); //Reset id's
                            $(this).parent().attr("id","current"); // Activate this
                          <!--  $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab-->
						    $(".tap_menu_conten2 div").removeClass('hienthi');
							var tap=$(this).attr('title');
							
							  $("#"+ tap ).addClass('hienthi');
							   $("#"+ tap ).removeClass('an');
							
							  $(".hienthi div").removeClass('an');
						      $(".hienthi div").addClass('hienthi');
							  $('#' + $(this).attr('title')).fadeIn();
                        });
                    })();
                </script>
			
			<!--end import-->
						<!--import-->
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu3">
						<li id="current"><a href="http://noithathuyenhong.com/san-pham/sofa-van-phong.html" title="Sofa văn phòng"><h2 style="font-size:16px;">Sofa văn phòng</h2></a></li>
												
					</ul>
					<a class="viewall" href="http://noithathuyenhong.com/san-pham/sofa-van-phong.html"> xem tất cả &gt;&gt;</a>
					
					
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten3"> 
                    <div style="display: block;" id="tab1_3">
					                   <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-sofa--sf-05-vai-f13bao-gom-goi-tua/1710.html" title="Bo sofa   SF 05  vải F13,bao gồm gối tựa" class="Bo sofa   SF 05  vải F13,bao gồm gối tựa">
					  <img alt="Bo sofa   SF 05  vải F13,bao gồm gối tựa" title="Bo sofa   SF 05  vải F13,bao gồm gối tựa" src="/noithat/513533471026.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-sofa--sf-05-vai-f13bao-gom-goi-tua/1710.html" title="Bo sofa   SF 05  vải F13,bao gồm gối tựa" class="Bo sofa   SF 05  vải F13,bao gồm gối tựa">Bo sofa   SF 05  vải F13,bao gồm gối tựa</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">16,290,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-sfd-01-da/1690.html" title="Ghế SFD 01 Da " class="Ghế SFD 01 Da ">
					  <img alt="Ghế SFD 01 Da " title="Ghế SFD 01 Da " src="/noithat/551539869710.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-sfd-01-da/1690.html" title="Ghế SFD 01 Da " class="Ghế SFD 01 Da ">Ghế SFD 01 Da </a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">640,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-sofa-sf31/1689.html" title="Ghế SOFA -SF31" class="Ghế SOFA -SF31">
					  <img alt="Ghế SOFA -SF31" title="Ghế SOFA -SF31" src="/noithat/729937240039.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-sofa-sf31/1689.html" title="Ghế SOFA -SF31" class="Ghế SOFA -SF31">Ghế SOFA -SF31</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">9,900,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-ghe-sofa-01-da-that/1688.html" title="Ban ghe SOFA 01 DA THAT" class="Ban ghe SOFA 01 DA THAT">
					  <img alt="Ban ghe SOFA 01 DA THAT" title="Ban ghe SOFA 01 DA THAT" src="/noithat/907754745546.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-ghe-sofa-01-da-that/1688.html" title="Ban ghe SOFA 01 DA THAT" class="Ban ghe SOFA 01 DA THAT">Ban ghe SOFA 01 DA THAT</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">27,500,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ke-kg02/1636.html" title="Kệ KG02" class="Kệ KG02">
					  <img alt="Kệ KG02" title="Kệ KG02" src="/noithat/107526689900.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ke-kg02/1636.html" title="Kệ KG02" class="Kệ KG02">Kệ KG02</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,200,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-salon-sf-21/1377.html" title="Bộ Salon SF 21 " class="Bộ Salon SF 21 ">
					  <img alt="Bộ Salon SF 21 " title="Bộ Salon SF 21 " src="/noithat/237515415827.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-salon-sf-21/1377.html" title="Bộ Salon SF 21 " class="Bộ Salon SF 21 ">Bộ Salon SF 21 </a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">28,600,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-salon-sf-23/1376.html" title="Bộ Salon SF 23" class="Bộ Salon SF 23">
					  <img alt="Bộ Salon SF 23" title="Bộ Salon SF 23" src="/noithat/966599469787.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-salon-sf-23/1376.html" title="Bộ Salon SF 23" class="Bộ Salon SF 23">Bộ Salon SF 23</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">13,629,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-bsf-64v-ma-cu-04/1375.html" title="Bàn BSF 64V ( mã cũ 04)" class="Bàn BSF 64V ( mã cũ 04)">
					  <img alt="Bàn BSF 64V ( mã cũ 04)" title="Bàn BSF 64V ( mã cũ 04)" src="/noithat/252719015887.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-bsf-64v-ma-cu-04/1375.html" title="Bàn BSF 64V ( mã cũ 04)" class="Bàn BSF 64V ( mã cũ 04)">Bàn BSF 64V ( mã cũ 04)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">3,850,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-bsf-03/1374.html" title="Bàn BSF 03" class="Bàn BSF 03">
					  <img alt="Bàn BSF 03" title="Bàn BSF 03" src="/noithat/932585615354.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-bsf-03/1374.html" title="Bàn BSF 03" class="Bàn BSF 03">Bàn BSF 03</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">2,035,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-salon-06-san-pham-moi/1373.html" title="Bộ Salon 06 (Sản phẩm mới)" class="Bộ Salon 06 (Sản phẩm mới)">
					  <img alt="Bộ Salon 06 (Sản phẩm mới)" title="Bộ Salon 06 (Sản phẩm mới)" src="/noithat/558308526146.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-salon-06-san-pham-moi/1373.html" title="Bộ Salon 06 (Sản phẩm mới)" class="Bộ Salon 06 (Sản phẩm mới)">Bộ Salon 06 (Sản phẩm mới)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">10,360,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                    	
						
						
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                
                 <script>
				
                    $(document).ready(function() {
                        $(".tap_menu_conten3 div").addClass('an'); // Initially hide all content
                        $(".tap_menu_conten3 li:first").attr("id","current"); // Activate first tab
                        $(".tap_menu_conten3 div:first").removeClass('an'); // Show first tab content
						$(".tap_menu_conten3 div:first").addClass('hienthi');
						$(".hienthi div").removeClass('an');
						$(".hienthi div").addClass('hienthi');
                        
                        $('.tap_menu3 a').hover(function(e) {
                            e.preventDefault();        
                            $(".tap_menu_conten3 div").addClass('an'); //Hide all content
                            $(".tap_menu3 li").attr("id",""); //Reset id's
                            $(this).parent().attr("id","current"); // Activate this
                          <!--  $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab-->
						    $(".tap_menu_conten3 div").removeClass('hienthi');
							var tap=$(this).attr('title');
							
							  $("#"+ tap ).addClass('hienthi');
							   $("#"+ tap ).removeClass('an');
							
							  $(".hienthi div").removeClass('an');
						      $(".hienthi div").addClass('hienthi');
							  $('#' + $(this).attr('title')).fadeIn();
                        });
                    })();
                </script>
			
			<!--end import-->
						<!--import-->
            <div id="tab-home" style="position:relative;">
				<ul id="tabs-du-an" class="tap_menu4">
						<li id="current"><a href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat.html" title="Bàn ăn Hòa Phát"><h2 style="font-size:16px;">Bàn ăn Hòa Phát</h2></a></li>
												
					</ul>
					<a class="viewall" href="http://noithathuyenhong.com/san-pham/ban-an-hoa-phat.html"> xem tất cả &gt;&gt;</a>
					
					
			</div>
			<div id="content-tabs-duan" class="tap_menu_conten4"> 
                    <div style="display: block;" id="tab1_4">
					                   <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-tb06-tan-bi-vecni/1528.html" title="Bàn TB06 ( Tần bì Vecni)" class="Bàn TB06 ( Tần bì Vecni)">
					  <img alt="Bàn TB06 ( Tần bì Vecni)" title="Bàn TB06 ( Tần bì Vecni)" src="/noithat/073045869975.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-tb06-tan-bi-vecni/1528.html" title="Bàn TB06 ( Tần bì Vecni)" class="Bàn TB06 ( Tần bì Vecni)">Bàn TB06 ( Tần bì Vecni)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">4,400,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga24-tan-bi/1527.html" title="Ghế phòng ăn TGA-24 ( tần bì)" class="Ghế phòng ăn TGA-24 ( tần bì)">
					  <img alt="Ghế phòng ăn TGA-24 ( tần bì)" title="Ghế phòng ăn TGA-24 ( tần bì)" src="/noithat/775111846509.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga24-tan-bi/1527.html" title="Ghế phòng ăn TGA-24 ( tần bì)" class="Ghế phòng ăn TGA-24 ( tần bì)">Ghế phòng ăn TGA-24 ( tần bì)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">745,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga21-tan-bi/1526.html" title="Ghế phòng ăn TGA21 ( tần bì)" class="Ghế phòng ăn TGA21 ( tần bì)">
					  <img alt="Ghế phòng ăn TGA21 ( tần bì)" title="Ghế phòng ăn TGA21 ( tần bì)" src="/noithat/060431602713.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga21-tan-bi/1526.html" title="Ghế phòng ăn TGA21 ( tần bì)" class="Ghế phòng ăn TGA21 ( tần bì)">Ghế phòng ăn TGA21 ( tần bì)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">880,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga15-tan-bi/1525.html" title="Ghế phòng ăn TGA15 (tần bì)" class="Ghế phòng ăn TGA15 (tần bì)">
					  <img alt="Ghế phòng ăn TGA15 (tần bì)" title="Ghế phòng ăn TGA15 (tần bì)" src="/noithat/015382302078.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga15-tan-bi/1525.html" title="Ghế phòng ăn TGA15 (tần bì)" class="Ghế phòng ăn TGA15 (tần bì)">Ghế phòng ăn TGA15 (tần bì)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">790,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga12-tan-bi/1524.html" title="Ghế phòng ăn TGA12 (tần bì)" class="Ghế phòng ăn TGA12 (tần bì)">
					  <img alt="Ghế phòng ăn TGA12 (tần bì)" title="Ghế phòng ăn TGA12 (tần bì)" src="/noithat/904110208681.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ghe-phong-an-tga12-tan-bi/1524.html" title="Ghế phòng ăn TGA12 (tần bì)" class="Ghế phòng ăn TGA12 (tần bì)">Ghế phòng ăn TGA12 (tần bì)</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">810,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-ban-an-b48-1-ghe-g27/1523.html" title="Bộ bàn ăn B48+ 1 ghế G27" class="Bộ bàn ăn B48+ 1 ghế G27">
					  <img alt="Bộ bàn ăn B48+ 1 ghế G27" title="Bộ bàn ăn B48+ 1 ghế G27" src="/noithat/893573092407.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-ban-an-b48-1-ghe-g27/1523.html" title="Bộ bàn ăn B48+ 1 ghế G27" class="Bộ bàn ăn B48+ 1 ghế G27">Bộ bàn ăn B48+ 1 ghế G27</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,876,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/bo-ban-an-hinh-elip-b47-1-ghe-g18c/1522.html" title="Bộ bàn ăn hình elip B47 + 1 ghế G18C" class="Bộ bàn ăn hình elip B47 + 1 ghế G18C">
					  <img alt="Bộ bàn ăn hình elip B47 + 1 ghế G18C" title="Bộ bàn ăn hình elip B47 + 1 ghế G18C" src="/noithat/944495320422.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/bo-ban-an-hinh-elip-b47-1-ghe-g18c/1522.html" title="Bộ bàn ăn hình elip B47 + 1 ghế G18C" class="Bộ bàn ăn hình elip B47 + 1 ghế G18C">Bộ bàn ăn hình elip B47 + 1 ghế G18C</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,500 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-inox-bcn-712i/1521.html" title="Bàn Inox BCN 712-I" class="Bàn Inox BCN 712-I">
					  <img alt="Bàn Inox BCN 712-I" title="Bàn Inox BCN 712-I" src="/noithat/769996129058.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-inox-bcn-712i/1521.html" title="Bàn Inox BCN 712-I" class="Bàn Inox BCN 712-I">Bàn Inox BCN 712-I</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,040,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/ban-inox-bt-100i/1520.html" title="Bàn Inox BT 100-I" class="Bàn Inox BT 100-I">
					  <img alt="Bàn Inox BT 100-I" title="Bàn Inox BT 100-I" src="/noithat/548184940926.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/ban-inox-bt-100i/1520.html" title="Bàn Inox BT 100-I" class="Bàn Inox BT 100-I">Bàn Inox BT 100-I</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi">1,130,000 VND</div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                                       <div id="box-sp" style="position:relative;">
					  <div id="bg-pro">
					  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
					  <tbody><tr>
						<td><a href="http://noithathuyenhong.com/san-pham/cac-loai-mat-ban-ghe-composite/1518.html" title="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE" class="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE">
					  <img alt="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE" title="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE" src="/noithat/575181520296.jpg" width="204" height="175"></a>					  </td>
					  </tr></tbody></table>
					  
					  </div>
					  <h3 id="box-tdsp"><a href="http://noithathuyenhong.com/san-pham/cac-loai-mat-ban-ghe-composite/1518.html" title="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE" class="CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE">CÁC LOẠI MẶT BÀN + GHẾ COMPOSITE</a><br>
					  </h3>
					  <div id="box-tdsp">
						<div class="giamoi" id="giamoi"></div>
						<div id="giacu">						</div>
				     </div>
					                 </div>
                    	
						
						
						<div style="clear:both"></div>
                    </div>
					                    
                    
                    
                </div>
                
                 <script>
				
                    $(document).ready(function() {
                        $(".tap_menu_conten4 div").addClass('an'); // Initially hide all content
                        $(".tap_menu_conten4 li:first").attr("id","current"); // Activate first tab
                        $(".tap_menu_conten4 div:first").removeClass('an'); // Show first tab content
						$(".tap_menu_conten4 div:first").addClass('hienthi');
						$(".hienthi div").removeClass('an');
						$(".hienthi div").addClass('hienthi');
                        
                        $('.tap_menu4 a').hover(function(e) {
                            e.preventDefault();        
                            $(".tap_menu_conten4 div").addClass('an'); //Hide all content
                            $(".tap_menu4 li").attr("id",""); //Reset id's
                            $(this).parent().attr("id","current"); // Activate this
                          <!--  $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab-->
						    $(".tap_menu_conten4 div").removeClass('hienthi');
							var tap=$(this).attr('title');
							
							  $("#"+ tap ).addClass('hienthi');
							   $("#"+ tap ).removeClass('an');
							
							  $(".hienthi div").removeClass('an');
						      $(".hienthi div").addClass('hienthi');
							  $('#' + $(this).attr('title')).fadeIn();
                        });
                    })();
                </script>
			
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
		<div class="images_item"><a href="http://noithathuyenhong.com/" target="_blank"></a><a href="http://noithathuyenhong.com/" target="_blank"><img style="float:left" src="/noithat/691225.jpg" width="138" height="47"></a><a href="http://noithathuyenhong.com/" target="_blank"><img style="float:left" src="/noithat/saved_resource" width="138" height="47"></a>		</div>
	</li>
		 
	 
   
  </ul>

	  </div>	  </div>
</div>



<div id="footerbg">
  <div id="footerblank">
    <div id="footerbox">
	<div style="float:left;    width: 865px;">
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Giới thiệu chung</div>
        </div>
        <div class="footertxt">
		 <a href="http://noithathuyenhong.com/gioi-thieu.html" class="textmndichvu">Giới thiệu </a><br>
		           <a href="http://noithathuyenhong.com/gioi-thieu-chung/nang-luc-cong-ty/30.html" class="textmndichvu">Năng lực công ty</a><br>
                   <a href="http://noithathuyenhong.com/gioi-thieu-chung/ban-do-chi-dan-duong-di/51.html" class="textmndichvu">Bản đồ chỉ dẫn đường đi</a><br>
                 </div>
      </div>
      
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Trợ giúp mua hàng</div>
        </div>
        <div class="footertxt">
				   <a href="http://noithathuyenhong.com/tro-giup-mua-hang/huong-dan-mua-hang-online/31.html" title="Hướng dẫn mua hàng Online" class="textmndichvu">Hướng dẫn mua hàng Online</a><br>
		   		   <a href="http://noithathuyenhong.com/tro-giup-mua-hang/tro-giup-thong-tin/32.html" title="Trợ giúp thông tin" class="textmndichvu">Trợ giúp thông tin</a><br>
		   		   <a href="http://noithathuyenhong.com/tro-giup-mua-hang/hinh-thuc-thanh-toan/33.html" title="Hình thức thanh toán" class="textmndichvu">Hình thức thanh toán</a><br>
		   		   <a href="http://noithathuyenhong.com/tro-giup-mua-hang/hinh-thuc-mua-hang/34.html" title="Hình thức mua hàng" class="textmndichvu">Hình thức mua hàng</a><br>
		   		  
		  </div>
      </div>
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Quy định chung</div>
        </div>
        <div class="footertxt">
				<a href="http://noithathuyenhong.com/quy-dinh-chung/chinh-sach-van-chuyen/35.html" class="textmndichvu" title="Chính sách vận chuyển">Chính sách vận chuyển</a><br>
          		<a href="http://noithathuyenhong.com/quy-dinh-chung/chinh-sach-bao-hanh/36.html" class="textmndichvu" title="Chính sách bảo hành">Chính sách bảo hành</a><br>
          		<a href="http://noithathuyenhong.com/quy-dinh-chung/chinh-sach-cho-dai-ly-cap-2/38.html" class="textmndichvu" title="Chính sách cho đại lý cấp 2">Chính sách cho đại lý cấp 2</a><br>
          		<a href="http://noithathuyenhong.com/quy-dinh-chung/chinh-sach-ban-buon/47.html" class="textmndichvu" title="Chính sách bán buôn">Chính sách bán buôn</a><br>
          		  
		  </div>
      </div>
	  <div id="leftt" style="    width: 287px;
    overflow: hidden;

    line-height: 20px;">
   <div class="footerheading">
          <div class="footerheading">CHI NHÁNH HCM</div>
        </div>

<p>CÔNG TY TNHH SX TM ĐẦU TƯ PHÚC THỊNH</p>

<p>Địa chỉ   : 46 đường 339, Phường Phước Long B, Quận 9, Tp.HCM      </p>                       

 <p>Mã số thuế  : 0312001785</p>

<p>wedsite www.noithathoaphat123.com </p>

 <p>Nguyễn Trung Kiên  ĐT: 0902895569</p>

<p>Email: kientrung1248@gmail.com</p>
 <p> Email: noithathuyenhong433@gmail.com</p>

<p>Web: noithathuyenhong.com.vn / noithathuyenhong.com</p>
	  </div>
	  </div>
	  
      <div id="footerbox3">
        <div class="footerheading">
          <div class="footerheading">Thông tin liên hệ</div>
        </div>
        <div class="footertxt">
		<!--	<p><span><span><span style="font-size: medium;"><strong>C&Ocirc;NG TY TNHH TM &amp; SX NỘI THẤT HUY&Ecirc;N HỒNG</strong></span></span></span></p>
<p><span><strong style="line-height: 1.5;">Địa chỉ:</strong><span style="line-height: 1.5;"> 433 Giải Ph&oacute;ng, P. Phương Liệt, Q. Thanh Xu&acirc;n, H&agrave; Nội</span></span></p>
<p><span style="line-height: 1.5;"><strong>Mail: </strong>noithathuyenhong433@gmail.com<br /></span></p>
<p><span><strong>Điện thoại:</strong> 04.6674.9784 / 04.2212.3012 / Fax: 043.8696.590</span><br /><strong>Hotline: <span style="font-size: medium; color: #ff0000;">0977.741.236</span></strong>&nbsp;/&nbsp;<span style="color: #ff0000; font-size: medium;"><strong>0988.925.480/ 04.2212.3012</strong></span></p>
<p>&nbsp;</p>
<p><span style="background-color: #ffff00;"><strong>Chi nh&aacute;nh HCM</strong></span></p>
<p><strong>C&Ocirc;NG TY TNHH SX TM ĐẦU TƯ PH&Uacute;C THỊNH</strong></p>
<p><span style="line-height: 1.5;">Địa chỉ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;46 đường 339, Phường Phước Long B, Quận 9, Tp.HCM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
<p>&nbsp;<span style="line-height: 1.5;">M&atilde; số thuế&nbsp; : 0312001785</span></p>
<p><span style="line-height: 1.5;">wedsite&nbsp;</span><a style="line-height: 1.5;" href="http://www.noithathoaphat123.com/" target="_blank">www.noithathoaphat123.com</a><span style="line-height: 1.5;">&nbsp;</span></p>
<p>&nbsp;<span style="line-height: 1.5;">Nguyễn Trung Ki&ecirc;n &nbsp;</span><span style="line-height: 1.5;">ĐT: 0902895569</span></p>
<div><span>Email:&nbsp;<span><a href="mailto:kientrung1248@gmail.com" target="_blank">kientrung1248@gmail.com</a></span></span></div>
<p>&nbsp;<span style="line-height: 1.5;">&nbsp;</span><span style="line-height: 1.5; background-color: #ffff00;">Email: noithathuyenhong433@gmail.com</span></p>
<p><span style="background-color: #ffff00;">Web: noithathuyenhong.com.vn /&nbsp;noithathuyenhong.com</span></p>
<p><span style="color: #ff0000; font-size: medium;"><strong>&nbsp;</strong></span></p>
<div style="position: absolute; top: -1500px; overflow: auto;"><a title="&ocirc; t&ocirc; điện trẻ em" href="http://kidsmart123.com/o-to-dien-tre-em-b1339767.html">&ocirc; t&ocirc; điện trẻ em</a>|<a title="nội thất nh&agrave; đẹp" href="http://noithatchuyennghiep.vn/tin-tuc/10/noi-that-nha-dep">nội thất nh&agrave; đẹp</a>|<a title="c&ocirc;ng ty nội thất" href="http://noithatchuyennghiep.vn/">c&ocirc;ng ty nội thất</a><a title="cửa k&iacute;nh cường lực" href="http://noithatnhiha.com.vn/kinh-cuong-luc.html">cửa k&iacute;nh cường lực</a>|<a title="noi that tre em" href="http://noithattreem6688.com.vn">noi that tre em</a>| <a title="xe đẩy em b&eacute;" href="http://kidsmart123.com/xe-day-em-be-b1336308.html">xe đẩy em b&eacute;</a>| <a title="đ&egrave;n pin si&ecirc;u s&aacute;ng" href="http://shadow.vn/">đ&egrave;n pin si&ecirc;u s&aacute;ng</a>| <a title="Ph&ograve;ng ngủ đẹp" href="http://noithatnhapkhau.net.vn/dmsp/noi-that-sunny-dkf-series/">Ph&ograve;ng ngủ đẹp</a>| <a href="http://noithatnhapkhau.net.vn/dmsp/phong-ngu-vip-paris-style-2013/">Nội thất ph&ograve;ng ngủ</a>| <a title="Sofa da" href="http://noithatnhapkhau.net.vn/dmsp/sofa-da/">Sofa da</a>| <a title="Sofa g&oacute;c" href="http://noithatnhapkhau.net.vn/dmsp/sofa-goc/">Sofa g&oacute;c</a>| <a title="truyen tien hiep" href="http://tieuthuyethay.com/truyen-tien-hiep">truyen tien hiep</a> <a title="truyen sac hiep" href="http://tieuthuyethay.com/sac-hiep">truyen sac hiep</a>|<a title="Giường ngủ đẹp" href="http://noithatnhapkhau.net.vn/dmsp/noi-that-thuong-hai-cao-cap-2015/">Giường ngủ đẹp</a>|</div>-->

<p>CÔNG TY TNHH TM &amp; SX NỘI THẤT HUYÊN HỒNG</p>

<p>Địa chỉ: 433 Giải Phóng, P. Phương Liệt, Q. Thanh Xuân, Hà Nội</p>
<p>Mail: noithathuyenhong433@gmail.com</p>

<p>Hotline: 0977.741.236 / 0988.925.480/ 04.2212.3012</p>
<p style="position: absolute; top: -6800px; overflow: auto;">
<a href="http://noithattreem6688.com.vn/" title="noi that tre em">noi that tre em</a>|
<a href="http://tieuthuyethay.com/truyen-tien-hiep" title="truyen tien hiep">truyen tien hiep</a>|
<a href="http://tieuthuyethay.com/sac-hiep" title="truyen sac hiep">truyen sac hiep</a>|
<a href="http://tieuthuyethay.com/ngon-tinh-trung-quoc" title="truyen ngon tinh">truyen ngon tinh</a>|
<a href="http://tieuthuyethay.com/xuyen-khong" title="truyen xuyen khong">truyen xuyen khong</a>|
<a href="http://tieuthuyethay.com/truyen-ma" title="truyen ma">truyen ma</a>|
<a href="http://tieuthuyethay.com/truyen-teen" title="truyen teen">truyen teen</a>|
<a href="http://noithathuyenhong.com/noithatmelinh.vn/sofa-da-nhap-khau.html" title="sofa nhap khau">sofa nhap khau</a>|
<a href="http://pgkids.com.vn/" title="bán buôn quần áo trẻ em">bán buôn quần áo trẻ em</a>|
<a href="http://www.baobinhuatiendat.com.vn/tin-tuc/chi-tiet-tin/159/mang-nilon-tui-nilon-tai-tien-dat.html" title="tui nilon">tui nilon</a>|<a href="http://www.baobinhuatiendat.com.vn/" title="bao bi nhua">bao bi nhua</a>|
<a href="http://truyentienhiep.net/" title="truyen tien hiep">truyen tien hiep</a>|
<a href="http://tieuthuyethay.vn/" title="tieu thuyet hay">tieu thuyet hay</a>|
<a href="http://tieuthuyethay.vn/truyen-chu/truyen-ngon-tinh/" title="truyen ngon tinh">truyen ngon tinh</a>|
<a href="http://tieuthuyethay.vn/truyen-chu/truyen-xuyen-khong/" title="truyen xuyen khong">truyen xuyen khong</a>
<a href="http://www.wellspringsaigon.edu.vn/" title="truong quoc te">truong quoc te</a>|
<a href="http://taxinoibaigiare.vn/" title="taxi nội bài">taxi nội bài</a>|
<a href="http://congbietthuhanoi.com.vn/san-pham/10/cong-nhom-duc-nguyen-canh.html" title="cong nhom duc">cong nhom duc</a>|
<a href="http://duchoaauto.vn/" title="đồ chơi xe hơi">đồ chơi xe hơi</a>|

</p>
		</div>
    </div>
  </div>
  
</div>
<div id="footerbg2">
  <div id="footerblank">
    <div id="footerbox">
     	<div class="logothanhtoan">
			<ul>
							<li><img src="/noithat/397504.jpg"></li>
							</ul>
			
		</div>
		<div class="noidung_footer" style="text-align:center;">
		
		<br>
		© 2006 <a href="http://noithathuyenhong.com.vn/">www.noithathuyenhong.com.vn</a> All rights reserved.<br>
	  </div>
    </div>
  </div>
</div>

<form name="frmgh" method="get" action="http://noithathuyenhong.com/index.php">
  <input type="hidden" name="productid">
  <input type="hidden" name="size">
  <input type="hidden" name="command">
</form>
    <div id="divAdRight" style="display: block; position: absolute; top: 3830.96px; left: 1179.5px;">
     	
    </div>
    
    <div id="divAdLeft" style="display: block; position: absolute; top: 3830.96px; left: 19.5px;">
         
    </div>
    <script>
        function FloatTopDiv()
        {
            startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
            startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
            var d = document;
            function ml(id)
            {
                var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                el.x = startRX;
                el.y = startRY;
                return el;
            }
            function m2(id)
            {
                var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                e2.x = startLX;
                e2.y = startLY;
                return e2;
            }
            window.stayTopLeft=function()
            {
                if (document.documentElement && document.documentElement.scrollTop)
                    var pY =  document.documentElement.scrollTop;
                else if (document.body)
                    var pY =  document.body.scrollTop;
                if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
                ftlObj.y += (pY+startRY-ftlObj.y)/16;
                ftlObj.sP(ftlObj.x, ftlObj.y);
                ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
                ftlObj2.sP(ftlObj2.x, ftlObj2.y);
                setTimeout("stayTopLeft()", 1);
            }
            ftlObj = ml("divAdRight");
            //stayTopLeft();
            ftlObj2 = m2("divAdLeft");
            stayTopLeft();
        }
        function ShowAdDiv()
        {
            var objAdDivRight = document.getElementById("divAdRight");
            var objAdDivLeft = document.getElementById("divAdLeft");       
            if (document.body.clientWidth < 1000)
            {
                objAdDivRight.style.display = "none";
                objAdDivLeft.style.display = "none";
            }
            else
            {
                objAdDivRight.style.display = "block";
                objAdDivLeft.style.display = "block";
                FloatTopDiv();
            }
        } 
    </script>
    <script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 30;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
    </script><script type="text/javascript" language="javascript">MainContentW = 1000;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 30;ShowAdDiv();window.onresize=ShowAdDiv;;</script>

</div></div></body></html>