
 <?php if($session->read('lang')==1){?>

 
	<div id="menus">
              <ul id="nav" class='menu1'>
              	<li class='m1'><a href="<?php echo DOMAIN?>"><img src="<?php echo DOMAIN;?>css/images/home.png"/></a></li>
			  		
	
			 <?php $menupro1 = $this->requestAction('/comment/menucategory') ?>
   <?php foreach($menupro1 as $menupro1){?>
   <li class='m<?php echo $menupro1['Category']['id'];?>'><a href="<?php echo DOMAIN;?>danh-sanh-tin/<?php echo $menupro1['Category']['id'];?>/<?php echo $menupro1['Category']['alias'];?>"> <?php echo $menupro1['Category']['name'];?> </a>
   <ul class='menu2'>
   <?php $menupro2 = $this->requestAction('/comment/submenunew/'.$menupro1['Category']['id']) ?>
   <?php foreach($menupro2 as $menupro2){?>
   <li class='m<?php echo $menupro2['Category']['id'];?>'>
   <a href="<?php echo DOMAIN;?>danh-sanh-tin/<?php echo $menupro2['Category']['id'];?>"> <?php echo $menupro2['Category']['name'];?>   </a>
   
   </li>
   <?php } ?>
   </ul>
   
   
   </li>
   
   
   <?php } ?>

                            
                 <li class='m9'><a href="<?php echo DOMAIN?>lien-he">Liên hệ</a></li>
				
				 
				 <span style="float:right;">

				 <div id="timkiemthongtin" style="background:url(<?php echo DOMAIN;?>css/images/thongtintimkiem.png) no-repeat;height:22px; width:172px; float:right; margin-top:17px; padding-left:10px;">
		
		<form method="post" id="check_form" action="<?php echo DOMAIN; ?>products/search" >
				<input type="text" style="width:140px; height:21px;   border:none; color:#A8A8A8; background:none; float:left;font-size:11px;"  name="s"; value="Tìm mã sản phẩm..."  autocomplete="off"  onkeypress="return quickSearchKeyPress(event);" onfocus="this.value=''";/>
				 
				 </form>
		
		
		</div>
				 
				 
				</span>
                                
</ul>		


</div>


			
			
			
    <?php } if($session->read('lang')==2){?>
    	<div id="menus">
              <ul id="nav"><li style="background:none; margin-top:5px; margin-left: 10px;"><img align="absbottom" src="<?php echo DOMAIN?>images/home.png" /></li>
              	<li><a href="<?php echo DOMAIN?>">Home</a></li>                                              
                 <li><a href="<?php echo DOMAIN?>gioi-thieu">About us</a></li>
                 <li><a href="<?php echo DOMAIN?>san-pham">Products</a></li>
                 <li><a href="<?php echo DOMAIN?>tin-tuc">News - Event</a></li>
                 <li><a href="<?php echo DOMAIN?>tuyen-dung">Recruitment</a></li>
                 <li><a href="<?php echo DOMAIN?>lien-he">Contact us</a></li>               
</ul>	            
          </div>
    <?php }?>

