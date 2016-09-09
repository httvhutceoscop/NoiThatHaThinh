
<?php echo $this->element('left');?>








<div id="box-h-rightq">
	  	<div class="tcatq" style="width:1180px;">		
			<span><a href="/">Trang chủ</a> &gt;&gt;
				<span class="tcat" style="width:1000px;">
					<span>
					<a href="/san-pham.html">Sản phẩm</a> &gt;&gt;
					<a href="/ds/<?php echo $cat['Catproduct']['id'];?>/<?php echo $cat['Catproduct']['alias'];?>">
					  <?php echo $cat['Catproduct']['name'];?> 
					</a> &gt;&gt;
					<a href="/dssp/<?php echo $catchild['Catproduct']['id'];?>/<?php echo $catchild['Catproduct']['alias'];?>">
						<?php echo $catchild['Catproduct']['name'];?>    
					</a> &gt;&gt;
					<?php echo $views['Product']['title'];?>
					</span>
				</span>
			</span>
		</div>   
		<div class="conten_main3" style="margin-top:3px; position:relative;">
     	           
 <!--show-->  
  <div style="float:left;width:400px;">
	<div class="img_main" style="border:1px solid #ccc; float:left;;margin:0px 0px 0px 0px;">
	<a href="/<?php echo $views['Product']['images'];?>" class="fancybox" rel="group">
	<img src="/<?php echo $views['Product']['images'];?>" align="left" width="400px"></a>
	</div>
	<div class="ima_sup" style="float:left;width:400px;">
	<img class="thum_img" src="/<?php echo $views['Product']['images'];?>" width="60">
	</div>
</div>
 <div class="tour_detail" style="float:left;width:500px;margin:0px 10px 10px 20px;background-color:#FFF;padding: 0px 10px 10px 10px;color: #666666; line-height: 22px;">   		
        <ul>
        	<li>
				<h1 style="color:#0173ba;margin-bottom: 3px; font-size:18px;"><?php echo $views['Product']['title'];?></h1>
			</li>
			<li><span style="color:#FF6600; font-size:18px;"><?php echo number_format( $views['Product']['price'],0);?>  đ</span> <span class="mota_product"><span>(đã bao gồm 10%VAT</span></span>)</li>
            <li class="mota_product"><span>Giá thị trường <span style="text-decoration:line-through;line-height: 22px;">Liên hệ</span>
			             </span></li><li class="mota_product"><span>Mã sản phẩm: <span style="font-size:13px;line-height: 22px;"></span> </span></li>
            <li class="mota_product"><span>Sản phẩm của Tập Đoàn Hóa Phát</span></li>
            <li class="mota_product"><span>Vận chuyển miễn phí trong nội thành Hà Nội</span></li>
		  <li class="mota_product">Bảo hành:<span style="font-size:13px; line-height: 22px;color:#000000;">		    </span><span style="line-height: 22px; color:#666666;">12 tháng theo tiêu chuẩn của nhà máy</span> </li>
	      <!--<li class="mota_product"><span><span style="color:#FF0000; font-size:18px;">1188</span> người đã quan tâm sản phảm này</span>.</li> -->
			<li class="mota_product">Gọi đặt hàng: <span class="style1"><span class="style3">04.294.5426</span></span> / <span class="style1"><span class="style3">0988.993.835</span></span></li>
		    <li><a href="/mua-hang/<?php echo $views['Product']['id'];?>"><div class="add_cart"></div></a></li>
        </ul>
		<br>

	
</div>
    
        <div class="clear"></div>
        
<div class="nd" style="margin-top:10px; float:left;">
   <div id="usual1" class="usual"> 
  <ul> 
    <li><a class="selected" href="/#tab1">Thông số kỹ thuật</a></li> 
    <li><a href="/#tab3">Bản đồ chỉ dẩn</a></li> 
	<li><a href="/#tab5">Hướng dẩn thanh toán</a></li> 
  </ul> 
  <?php echo $views['Product']['content'];?>
  
  
  <div id="tab3" class="content_tab" style="padding: 0px; display: none;">
  
					    <div align="left">
					      <p>
					     
				          </p>
	        </div>
		
		    <div class="clear"></div> 
  </div>
<div id="tab5" class="content_tab" style="padding: 0px; display: none;">
  <?php $setting = $this->requestAction('/comment/setting');?>
	<?php  foreach($setting as $k=>$item){?> 
	              	 	 <?php echo $item['Setting']['content']?>
	              	 <?php }?> 				
	
			
			<div class="clear"></div> 
            
  </div> 
</div>  



</div>



<script language="javascript" src="/noithat/my_script.js"></script>

<script type="text/javascript">
$(document).ready(function() {

  $('.ptncomen').click(function(){
 
 if(isEmpty(document.getElementById('title'), "Xin nhập Họ tên.")){
		document.getElementById('title').focus();
		return false;
	}
	if(!check_email(document.frm.email1.value)){
		alert("Email không hợp lệ");
		document.frm.email1.focus();
		return false;
	}
	
	
	
	if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
  	var id=$('#idsp').val()+' == '+$('#title').val()+' == '+$('#email1').val()+' == '+$('#noidung').val();
  	
	
			
			$.ajax({
					url:"ajax.php",
					type:"post",
					data:"id="+id,
					async:true,
					success:function(result){
						$("#result").html(result);
							}
						})
	   
	   
  
  });
$('.ptntraloi').click(function(){
	$('.noidungtraloi').fadeOut();
	$(this).parent().find('.noidungtraloi').fadeIn("slow");	
});
	

});
</script>


<div class="commen">
<?php $comment = $this->requestAction('products/khachhangbinhluan/'.$views['Product']['id']);?>
<?php foreach($comment as $comment ){  ?>
<div class="noidung" style="border-bottom: 1px dotted silver; padding: 5px;" >                            
<div class="main">
<h3><?php echo $comment['Comment']['name'];?> </h3><i>Email:<?php echo $comment['Comment']['email'];?> - ( Ngày: <?php echo date('d-m-Y', strtotime($comment['Comment']['created'])); ?>)</i> <br />

<p><?php echo $comment['Comment']['content'];?></p>

</div>
</div>
<?php }?>


<div id="comment" style="padding:50px 10px;">

                <?php echo $form->create(null, array( 'url' => DOMAIN.'products/add/'.$views['Product']['id'],'type' => 'post')); ?>	
                    <h2 ><u>Bình luận sản phẩm:</u></h2>
                    <div style="margin-bottom:6px; margin-top:15px; float:left; width:98%;">
                    <span style="float:left; margin-right:5px;">Họ tên:</span>
					
                    <?php echo $form->input('Comment.name',array( 'label' => '','style'=>'width:200px;height:25px;float:left;','value'=>$this->Session->read('name')));?>
					

                     <span style="float:left; margin-right:6px; margin-left:6px;">Email:</span>
                     <?php echo $form->input('Comment.email',array( 'label' => '','style'=>'width:200px;height:25px;float:left;','value'=>$this->Session->read('email')));?></div>
                     <span style="float:left; margin-right:6px; margin-left:0px;">Nội Dung:</span>
                    <p><?php echo $form->input('Comment.content',array( 'label' => '','rows'=>10,'cols'=>60));?></p>           
                   
                    <div class="rowPost" style="padding-bottom: 45px !important;">
                    <div class="captcha">
                        <label>
                            Nhập mã an toàn</label>(<span class="redfont">*</span>)</div>
                    <div class="inputcaptcha">
                        
                        <div class="col1">
                        
                         <input id="security" class="required" name="security" />     
                               </div>
                               <div class="col2"><img alt="" id="captcha" src="<?php echo DOMAIN?>user/create_image" />
                               </div>
                        <div class="col1" style="padding-top: 20px;">
                         <input style="padding:5px;width: 50px;" type="submit" value="Gửi"/>
                        <input style="padding:5px;width: 70px;" type="reset" value="nhập lại" />
                        </div>
                        
                    </div>
                </div>
  </div>  
	
	
	
</div>

<div class="phantrang"></div>
		 </div>
      </div>
