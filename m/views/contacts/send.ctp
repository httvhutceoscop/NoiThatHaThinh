 <style>
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }

    #main-register input, .text-main input {
    border: 1px solid #CCC;
    border-radius: 5px;
    }
    input {
    padding: 1px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;

}
</style> 
<div class="container">	 
<div class="row rowslide rowlistbottom">  
    	<div class="title_home_page toplist topds" style="height:50px;">
            <h2>Liên hệ</h2>
		</div>
        <div class="m3">            
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">
                           <div style="width:90%; margin: 0 auto;">
		


						
						   <?php $setting = $this->requestAction('/comment/setting');?>
               	<div>	
               		<ul class="lienhe" style="list-style: none;">
			     	 	<?php  foreach($setting as $k=>$item){?> 
                        <li><h1 style="padding: 5px; color: rgb(168, 8, 8); font-size: 16px;"><?php echo $item['Setting']['name'] ?></h1></li>
	               			<li>Địa chỉ: <?php echo $item['Setting']['address'] ?></li>
	               			<li>Điện thoại: <?php echo $item['Setting']['phone'] ?> - Hotline: <font color="red"><?php echo $item['Setting']['mobile'] ?></font></li>
	               			<li> Email:<?php echo $item['Setting']['email'] ?></li>
	               			<li> Website:<font color="blue" style="font-size:17px;"><?php echo $item['Setting']['url'] ?></font></li>
	               			
	               		<?php }?>
	               	</ul>
	              </div>
						   
                             <?php echo $this->element('plugin/plugin-contac');?>
                        </div>
                </div>                  
             </div>            
             <div class="clearfix"></div>
        </div> 
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
</div>





