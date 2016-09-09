<div class="content-box">
    <div class="content-box-header">
    <?php echo $javascript->link('loader'); ?>    
        <h3>Thêm mới </h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab1"></a></li> 
            <li><a href="#tab2" class="default-tab">Thêm mới</a></li>
        </ul>
        
        <div class="clear"></div>
        
    </div> 
    <div class="content-box-content">
        
        <div class="tab-content" id="tab1"> 
        </div>
        
        <div class="tab-content default-tab" id="tab2">
        
              <?php echo $form->create(null, array( 'url' => DOMAINAD.'manufacturers/add','type' => 'post','name'=>'image')); ?>	    
                
                <fieldset> 
                    <p>
                        <label>Tên  </label>
                        <?php echo $form->input('Manufacturer.name',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
					<div class="post-name">
					<p>
                        <label>Bản đồ</label>
						<?php echo $javascript->link('maps'); ?>
							<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAVcJQrx7VsumiP2heFwp6URQLaiSrhXTkLq3mA9rOmHpVsHwBjxTg7C5-XXHl634dCROpHwKMO9BzmQ" type="text/javascript"></script>
					
</p>
					
						<div class="fl">
							<select id="city_map" class="form_control">
								<option value="2">Bản đồ Hà Nội</option>
								<option value="3">Bản đồ Hồ Chí Minh</option>
								<option value="32">Bản đồ Hải Phòng</option>
								<option value="65">Bản đồ Đà Nẵng</option>
								<option value="15">Bản đồ Cần Thơ</option>
							</select> <input type="button" class="form_button" value=" Tìm kiếm " onclick="findAddress(&#39;&#39;)">
						</div>
						<div class="fr">
							Kích thước:
							<select class="form_control" onchange="change_map_size(this.value)">
							<option value="1" selected="selected">Bình thường</option>
							<option value="2">Lớn</option>
							</select>
						</div>
					</div>
					<div id="map_canvas" style="width: 100%; height: 400px; position: relative; background-color: rgb(229, 227, 223);">
						
					</div>
					<?php echo $form->input('Manufacturer.map_x_axis',array( 'label' => '', 'id'=>'map_x_axis', 'type' => 'hidden'));?>
					<?php echo $form->input('Manufacturer.map_y_axis',array( 'label' => '', 'id'=>'map_y_axis', 'type' => 'hidden'));?>
					<?php echo $form->input('Manufacturer.map_information',array( 'label' => '', 'id'=>'map_information', 'type' => 'hidden'));?>
				</div>
			
			
                     <!--<p>
                        <label>Tên Danh mục lọc cha</label>              
                        <?php 
                              echo $form->select('Manufacturer.parent_id', $list_cat, null,array('empty'=>'Chọn danh mục lọc cha','class'=>'small-input'));
                         ?>
                    </p>-->

                    <p>
                        <label>Trạng thái</label>
                         <?php echo $form->radio('Manufacturer.status', array(0 => 'Chưa Active', 1 => 'Đã Active'), array('value' => '1','legend'=>'')); ?>
                    </p>
					<p>
                        <label>Điện thoại</label>
                        <?php echo $form->input('Manufacturer.title',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
					<p>
                        <label>Keywords</label>
                        <?php echo $form->input('Manufacturer.keywords',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
					<p>
                        <label>Description</label>
                        <?php echo $form->input('Manufacturer.description',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
                    <p>
                        <input class="button" type="submit" value="Thêm mới" />
                    </p>
                    
                </fieldset>
                
                <div class="clear"></div>
                
            <?php echo $form->end(); ?>
            
        </div>
        
    </div>
 </div>
<script>
	function submitAddUserpost(){
		if(frmAddUserpost.contact.value != "" && frmAddUserpost.category.value != "" && frmAddUserpost.title.value != "")
				$('#frmAddUserpost').submit();
		else
			alert("Hãy điền đầy đủ thông tin");
	}
	function changeSelected(iddiv, namefile, str){
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById(iddiv).innerHTML= xmlhttp.responseText;
			}
		}
		var url = "<?php echo DOMAIN; ?>manufacturers/" + namefile + "/" + str;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
</script>