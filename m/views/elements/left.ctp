
<script type="text/javascript" src="<?php echo DOMAIN;?>js/ddaccordion.js"></script>
<script type="text/javascript">

//Initialize Arrow Side Menu:
ddaccordion.init({
	headerclass: "menuheaders", //Shared CSS class name of headers group
	contentclass: "menucontents", //Shared CSS class name of contents group
	revealtype: "clickgo", //Reveal content when user clicks or onmouseover the header? Valid value: "click", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["unselected", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: 500, //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>



<script type="text/javascript" src="<?php echo DOMAIN; ?>js/js.js"></script>





	<div id="danhmucmodun" >
<div id="tieudemenu5">
Danh mục trang sức
</div>
	
	
<div id ="menu2">


 <div class="category-product">
            <div class="arrowsidemenu">
                 <?php
				    $categoryproduct = $this->requestAction('/comment/submenuproduct/144');
					$i=0;
				    foreach($categoryproduct as $categoryproduct){
				 ?>
                <div class="menuheaders" headerindex="<?php echo $i;?>h"><a href="<?php echo DOMAIN;?>danh-sach-san-pham/<?php echo $categoryproduct['Catproduct']['id'];?>/<?php echo $categoryproduct['Catproduct']['alias'];?>.html"><?php echo $categoryproduct['Catproduct']['name'];?></a></div>
                 <ul class="menucontents" contentindex="<?php echo $i;?>c" style="display: none;">
                    <?php
                     $submenuproduct = $this->requestAction('/comment/submenuproduct/'.$categoryproduct['Catproduct']['id']);
                     foreach($submenuproduct as $submenuproduct){
					 if($submenuproduct['Catproduct']['parent_id']==$categoryproduct['Catproduct']['id']){
                    ?>
                    <li>
                        <a href="<?php echo DOMAIN;?>danh-sach-san-pham/<?php echo $submenuproduct['Catproduct']['id'];?>/<?php echo $submenuproduct['Catproduct']['alias'];?>.html">
                         <?php echo $submenuproduct['Catproduct']['name'];?>
                        </a>
                    </li>
                    <?php }}?> 
                  </ul>
                 <?php $i++;}?>
            </div>
        </div>
</div>

	
	
</div>
	 

   <div id="danhmucmodun" >
      <div id="tieudemenu5">
HỖ TRỢ TRỰC TUYẾN
</div>
<img src="<?php echo DOMAIN;?>css/images/anhhotro.png"  alt="anh ho tro"  style="margin:10px 25px;; "/>
<ul style="padding-left:10px;">
           <?php $support = $this->requestAction('/comment/helpsonline') ?>
             <?php  foreach($support as $itm ){?>                   
           <li style="margin: 5px 7px;"><a href="ymsgr:sendIM?<?php echo $itm['Helps']['user_yahoo']?>" style="margin: 0 10px; "><img alt="anh ho tro" align="absmiddle"  src="<?php echo DOMAIN;?>css/images/123.png"/></a>
		   <a rel="nofollow"  href="skype:<?php echo $itm['Helps']['user_skype'] ?>?call" style="margin: 0 10px;"><img lt="anh ho tro" align="absmiddle" src="<?php echo DOMAIN?>images/skype.png" style="height:22px;"/></a>
		   </li>
           <li style="margin: 5px 7px;"><font style="font-size: 13px; color: #4f4444; "><?php echo $itm['Helps']['title']?> </font> - <font style="font-size: 12px; color: #4f4444; "><?php echo $itm['Helps']['user_support']?> </font></li>
        
           <?php }?>
           </ul>


<?php $setting = $this->requestAction('/comment/setting') ?>
            <?php foreach($setting as $settings ){  ?>
<p style="padding-left:15px; padding-top:10px;">
<img alt="dien thoai" align="absmiddle" src="<?php echo DOMAIN;?>css/images/dienthoai12.png"/>
<font style="color:#656565; ">Hotline: </font> 
<b> <font style="font-size:16px; color:#A94244;"><?php echo $settings['Setting']['mobile'] ?></font></b>
 </p>
 <p style="padding-left:15px; padding-top:10px;">
 <img alt="thu" align="absmiddle" src="<?php echo DOMAIN;?>css/images/thu12.png"/>

 <font style="font-size:13px; "><?php echo $settings['Setting']['email'] ?></font>
 </p>

<?php } ?>


</br>
</div>

<div id="danhmucmodun" >
<div id="tieudemenu5">
Tin tức 
</div>
<style>
#noidungtintucnoibat a { color:#393839;}
#noidungtintucnoibat a:hover { color:#bd307b;}

</style>
<div id="noidungtintucnoibat" style="padding-top:5px;">
						<?php $thongtin = $this->requestAction('comment/thongtintintucngoai') ?>
	<ul><?php foreach($thongtin as $value) { ?>				
                        	                	
                         
                            	
								<li style="margin-left:0px; width:195px;  height:62px; padding-left:2px;"><img src="<?php echo DOMAINAD; ?><?php echo  $value['News']['images'];?>" style="height:55px; width:55px; float:left; margin-right:5px; border:2px solid #e7cbad;"><span style="margin-left:2px;"><a href="<?php echo DOMAIN;?>chi-tiet-tin/<?php echo $value['News']['id'];?>" style="width:100px; margin-left:2px; "><?php echo $value['News']['title'];?> </a> </span></li>                               
                               <?php } ?>
                            </ul>
 </div>                       




</div>
	  
	
	<div id="danhmucmodun" style="margin-top:5px;" >
      <div id="tieudemenu5">
SẢN PHẨM BÁN CHẠY
</div>

         
		 <marquee direction="up" behavior="scroll"  onmouseover="this.stop()" onmouseout="this.start()" style="height:330px;">

                        <?php $spbc= $this->requestAction('/comment/showsanphambanchay') ?>
                        <?php foreach($spbc as $spbc ){  ?>
                       
						<div style="text-align:center;">
                         <a  rel="nofollow" href="<?php echo DOMAIN;?>sp/<?php echo $spbc['Product']['id'] ?>/<?php echo $spbc['Product']['alias'] ?>.html" >
						 <img alt="<?php echo $spbc['Product']['title'];?>" src="<?php echo DOMAIN?><?php echo $spbc['Product']['images'];?>" border="0" alt="<?php echo $spbc['Product']['title'];?>" style=" margin:auto; max-width:210px; max-height:180px;  " /></a>  
                         <div style="font-weight:600; line-height:23px; margin:5px;">
						 <a rel="nofollow"  href="<?php echo DOMAIN;?>sp/<?php echo $spbc['Product']['id'] ?>/<?php echo $spbc['Product']['alias'] ?>.html" style="color:#939393;">
						 <?php echo $spbc['Product']['title'] ?>
						 </a>
						</div>
						   <div style="font-weight:600; color:red;">
						 <font>  <?php echo number_format( $spbc['Product']['price'],0);?>  VNĐ</font>
						 </div>
						 </div>	
						
					 
                         <?php }?> 
						 </marquee>
						 
							 
				
	</div>		  
	

	
	

	
	     <div id="danhmucmodun" >
      <div id="tieudemenu5">
LƯỢT TRUY CẬP
</div>
</br>
<center>

<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="hit tracker" ><script  type="text/javascript" >
try {Histats.start(1,2799718,4,428,112,75,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2799718&101" alt="hit tracker" border="0"></a></noscript>
<!-- Histats.com  END  -->

</br>
</center>
</br>
</br>
</div>
	
	
	
	
	<?php if(isset($_SESSION['daxem'])) { ?>

	     <div id="danhmucmodun" >
	 <div id="tieudemenu5">Bạn đã xem</div>
	
		<?php $i=0; foreach($_SESSION['daxem'] as $p) {  ?>
			<?php if($i<5) { ?>
				<?php $pr=$this->requestAction('/comment/id_product/'.$p) ; $i++; ?>
				<div id="khungsanpham2" style="margin:5px 0px; width:198px; height:240px;">
							<?php if(!empty($pr['Product']['newpro'])) { ?>
							<img alt="banchay" src="<?php echo DOMAIN;?>css/images/new.png" style=" position: absolute; width:71px; margin-left:42px;" />
							

							<?php } ?>
							<a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" >
							<!--<img alt="banchay" src="<?php echo DOMAIN;?>images/banchay.png" style=" position: absolute; width:80px;" />-->
							<div id="anhsanpham2" style="height:195px; width:198px;">
							<img alt="" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" style="max-width:198px; max-height:190px;"/>
							</div>
							</a>
							
								
								
								
								<div id="motasanpham3">
							<h4>
							 <a href="<?php echo DOMAIN;?>sp/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a>
							</h4>

							<?php if(!empty($pr['Product']['giakhuyenmai'])) { ?>
							
							<h5 style="color:#FF7316; text-algin:center; text-decoration:none;">
							  <?php echo number_format( $pr['Product']['giakhuyenmai'],0);?> VNĐ 
							 
							</h5>
							<?php } ?>

							<?php if(empty($pr['Product']['giakhuyenmai'])) { ?>
							
							<h5 style="text-decoration:none;">
							  <?php echo number_format( $pr['Product']['price'],0);?> VNĐ 
							  
							</h5>
							<?php } ?>

							</div>
								
								
						
					
							
					
							
							

							</div>
			<?php } ?>
		<?php } ?>
	
</div>
<?php }  ?>
			