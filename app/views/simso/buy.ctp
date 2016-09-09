<?php echo $javascript->link('jquery.validate', true); ?>

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
    padding: 3px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;

}
</style> 
<style>
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }
	table {
    border: 0 none;
    border-spacing: 0;
}
#input{
	width:236px;
	border: 1px solid #a0b581;
	height:22px;
	font-weight:normal;
	margin-left:20px;
	}
.guimail textarea{
	width:336px;
	height:102px;
	font-weight:normal;
	border: 1px solid #ccc;
	}

.guimail {
   
    font-weight: bold;
    margin-bottom: 40px;
   
    width: 100%;
}
	.tblGrid tr td,.tblGrid tr th {
	border: 1px solid #ccc;
	padding:5px;
    border-spacing: 0;
}
.guimail tr td{
	padding-top:10px;
	}
.bgLLGray th {
    color: #817F80;
    padding-right: 10px;
    text-align: right;
}
.guimail .blue{
	color:blue;
}

</style>
<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
				name: {
				required: true,
				minlength: 2
			},
			phone: {
				required: true,
			},
            address: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			
			agree: "required"
		},
		messages: {
				name: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập tên !</span>",
				minlength: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > Tên lớn hơn 2 ký tự !</span>"
			},
            phone: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập số điện thoại để chúng tôi liên lạc khi giao hàng !</span>",
				
			},
			address: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập số địa chỉ để chúng tôi liên lạc khi giao hàng !</span>",
				
			},
			email:{
						required: "<br> <span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;margin:65px; ' >Xin vui lòng nhập Email</span> ",
                        email: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > Email không đúng !"

			}
		}
	});
});
</script>
<div id="main-center">
<div id="danhmuccacsanpham">
    	<div class="top">Sản phẩm trong giỏ hàng
        </div>
        <div class="m3" style="padding: 20px;">   
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">
                     <div class="text-main">
             <table class="tblGrid " width="100%" border="1" cellpadding="5" cellspacing="5" style="border-collapse: collapse">
                    <tr>
                        <th width="100">Hình ảnh</th>
                        <th width="200">Tên sản phẩm</th>
                        <th width="100">Số lượng</th>
                        <th width="100">Giá</th>
                        <th width="100">Tổng giá</th>
                    </tr>
                    <?php  $a = array();
					
					
					
					$total=0; foreach($shopingcart as $key=>$product) { ?>
                    <?php if($product['name']!=null){ $a[1] = $product['name']; 
														$a[2] = $product['price'];
														
														$a[4] = $product['sl'];
														
																					?>
                    <tr>       
                        <td align="center"><img width="70" src="<?php echo DOMAINAD;?><?php echo $product['images']; ?>" /></td>
                        <td><?php echo $product['name']; ?></td>
                        <td align="center"><?php echo $product['sl']; ?> </td>
                        <td align="center"><font color="red"><?php echo number_format($product['price']); ?></font></td>
                        <td align="center"><font color="red"><?php echo number_format($product['total']); ?></font></td>
                    </tr>
                    <?php $total += $product['total']; } }
                   		
                    	echo '<tr><td align="right" colspan="5"><b>Tổng giá sản phẩm:</b> <font color="red">'.number_format($total).' VNĐ </font></td></tr>';
                    ?> 
                </table>
		     
            <br/>
           
            <div style="clear: both;background: #ffe4dd;padding:5px;color: #b52427"><strong>Thông tin dặt hàng</strong></div>
            
            <form name="check_form" id="signupForm" method="post" action="<?php echo DOMAIN;?>thanh-toan">
			<input class="contacts" type="hidden" value="<?php echo $shopingcart; ?>" name="images">
			<input class="contacts" type="hidden" value="<?php echo $total; ?>" name="total">
             <?php if ($this->Session->read('name')) {?>
            <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                <tbody>
                    <tr>
                        <th class="w160 vam">Họ tên đầy đủ</th>
                        <td>
                            <input type="text" title="" name="name" id="Name"  value="<?php echo $this->Session->read('name'); ?>" class="validate[required] inputText w200 input-validation-error blur">
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ Email</th>
                        <td>
                            <input type="text" value="<?php echo $this->Session->read('email'); ?>" title="" name="email" id="Email" class="validate[required,custom[email]] inputText w200 valid">
                        </td>
                    </tr>
                    <tr>
                        <th>Điện thoại di động</th>
                        <td>
                            <input type="text" title="(xx)xxx&ndash;xxxxx" name="phone"  value="<?php echo $this->Session->read('phone'); ?>" id="Mobile" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid"><span style="color:#F00;">(*)</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>
                            <input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w500 valid"><span style="color:#F00;">(*)</span>
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Hình thức thanh toán</th>
                        <td>
                           <select name="payop" id="payop">
                              <option value="0">Thanh toán khi nhận hàng</option>
                            
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php }else{?>
			
<?php

/**
 *	
 *		Phiên bản: 0.1   
 *		Tên lớp: BaoKimPayment
 *		Chức năng: Tích hợp thanh toán qua baokim.vn cho các merchant site có đăng ký API
 *						- Xây dựng URL chuyển thông tin tới baokim.vn để xử lý việc thanh toán cho merchant site.
 *						- Xác thực tính chính xác của thông tin đơn hàng được gửi về từ baokim.vn.
 *		
 */

class BaoKimPayment 
{
	// URL checkout của baokim.vn
	private $baokim_url = 'https://www.baokim.vn/payment/customize_payment/order';

	// Mã merchante site 
	private $merchant_id = '6263';	// Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

	// Mật khẩu bảo mật
	private $secure_pass = 'ceadfbfe34ff6693'; // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

	/**
	 * Hàm xây dựng url chuyển đến BaoKim.vn thực hiện thanh toán, trong đó có tham số mã hóa (còn gọi là public key)
	 * @param $order_id				Mã đơn hàng
	 * @param $business 			Email tài khoản người bán
	 * @param $total_amount			Giá trị đơn hàng
	 * @param $shipping_fee			Phí vận chuyển
	 * @param $tax_fee				Thuế
	 * @param $order_description	Mô tả đơn hàng
	 * @param $url_success			Url trả về khi thanh toán thành công
	 * @param $url_cancel			Url trả về khi hủy thanh toán
	 * @param $url_detail			Url chi tiết đơn hàng
	 * @return url cần tạo
	 */
	public function createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail)
	{
		// Mảng các tham số chuyển tới baokim.vn
		$params = array(
			'merchant_id'		=>	strval($this->merchant_id),
			'order_id'			=>	strval($order_id),
			'business'			=>	strval($business),
			'total_amount'		=>	strval($total_amount),
			'shipping_fee'		=>  strval($shipping_fee),
			'tax_fee'			=>  strval($tax_fee),
			'order_description'	=>	strval($order_description),
			'url_success'		=>	strtolower($url_success),
			'url_cancel'		=>	strtolower($url_cancel),
			'url_detail'		=>	strtolower($url_detail)
		);
		ksort($params);
		
		$str_combined = $this->secure_pass.implode('', $params);
		$params['checksum'] = strtoupper(md5($str_combined));
		
		//Kiểm tra  biến $redirect_url xem có '?' không, nếu không có thì bổ sung vào
		$redirect_url = $this->baokim_url;
		if (strpos($redirect_url, '?') === false)
		{
			$redirect_url .= '?';
		}
		else if (substr($redirect_url, strlen($redirect_url)-1, 1) != '?' && strpos($redirect_url, '&') === false)
		{
			// Nếu biến $redirect_url có '?' nhưng không kết thúc bằng '?' và có chứa dấu '&' thì bổ sung vào cuối
			$redirect_url .= '&';			
		}
				
		// Tạo đoạn url chứa tham số
		$url_params = '';
		foreach ($params as $key=>$value)
		{
			if ($url_params == '')
				$url_params .= $key . '=' . urlencode($value);
			else
				$url_params .= '&' . $key . '=' . urlencode($value);
		}
		return $redirect_url.$url_params;
	}
	
	/**
	 * Hàm thực hiện xác minh tính chính xác thông tin trả về từ BaoKim.vn
	 * @param $_GET chứa tham số trả về trên url
	 * @return true nếu thông tin là chính xác, false nếu thông tin không chính xác
	 */
	public function verifyResponseUrl($_GET = array())
	{
		$checksum = $_GET['checksum'];
		unset($_GET['checksum']);
		
		ksort($_GET);
		$str_combined = $this->secure_pass.implode('', $_GET);

        // Mã hóa các tham số
		$verify_checksum = strtoupper(md5($str_combined));
		
		// Xác thực mã của chủ web với mã trả về từ baokim.vn
		if ($verify_checksum === $checksum) 
			return true;
		
		return false;
	}
}
?>			
			
			
		
			
			
			
			
			
            
            <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                <tbody>
                    <tr>
                        <th class="w160 vam">Họ tên đầy đủ</th>
                        <td>
                            <input type="text" value="" title="" name="name" id="Name" data-val-required="" data-val-length-max="50" data-val-length="" data-val="true" class="validate[required] inputText w200 input-validation-error blur">
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ Email</th>
                        <td>
                            <input type="text" value="" title="" name="email" id="Email" data-val-regex-pattern=".+\@.+\..+" data-val-regex="" data-val-length-max="100" data-val-length="" data-val="true" class="validate[required,custom[email]] inputText w200 valid">
                            
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Email" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Điện thoại di động</th>
                        <td>
                            <input type="text" value="" title="(xx)xxx&ndash;xxxxx" name="phone" id="Mobile" name="" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid">
                            
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Mobile" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>
                            <input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w900 valid">
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Hình thức thanh toán</th>
                        <td>
                            <select name="payop" id="payop">
                              <option value="0">Thanh toán khi nhận hàng</option>
                              
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
			  
			
			
			
			
			
            <?php }?>
            <div class="pt20 tar" style="padding-bottom:15px; padding-top:0px !important; padding-left:350px;">
                   <input type="submit" class="button ml15" value="Đồng ý đặt hàng" id="btnPlaceOrder1">
            </div>
            </form>
			
			
			
			
			
			
          </div>
                </div>                  
             </div>  
             <div id="contacts">		     	
				<h2 style="padding: 10px 0;"><font color="#a70908" style="font-size: 16px;">Mọi chi tiết xin liên hệ:</font></h2>
				
				           
		     	 	<?php $setting = $this->requestAction('/comment/setting');?>
               	<div>	
               		<ul class="lienhe" style="list-style: none;">
			     	 	<?php  foreach($setting as $k=>$item){?> 
                        <li><h1 style="padding: 5px; color: rgb(168, 8, 8); font-size: 21px;"><?php echo $item['Setting']['name'] ?></h1></li>
	               			<li>Địa chỉ: <?php echo $item['Setting']['address'] ?></li>
	               			<li>Điện thoại: <?php echo $item['Setting']['phone'] ?> - Hotline: <font color="red"><?php echo $item['Setting']['mobile'] ?></font></li>
	               			<li> Email:<?php echo $item['Setting']['email'] ?></li>
	               			<li> Website:<font color="blue" style="font-size:17px;"><?php echo $item['Setting']['url'] ?></font></li>
	               			
	               		<?php }?>
	               	</ul>
	              </div>
	              <div>
	              	<?php  foreach($setting as $k=>$item){?> 
	              	 	 <?php echo $item['Setting']['content']?>
	              	 <?php }?> 
	              </div>	
		     </div>          
             <div class="clearfix"></div>
        </div> 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
    
 </div>