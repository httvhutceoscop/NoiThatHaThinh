    <?php $setting = $this -> requestAction('/comment/setting');?>
		<?php foreach($setting as $settings){?>
			<?php $footer = $settings['Setting']['footer'];?>
			<?php $hotline = $settings['Setting']['phone'];?>
			<?php $email = $settings['Setting']['email'];?>
			
	<?php } ?>


<div id="footerbg">
  <div id="footerblank">
    <div id="footerbox">
	<div style="float:left;    width: 865px;">
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Giới thiệu chung</div>
        </div>
        <div class="footertxt">
		<?php $showtin = $this->requestAction('comment/showtin/286');
			foreach($showtin as $showtin){?>
				<a href="/tin/<?php echo $showtin['News']['id'];?>/<?php echo $showtin['News']['alias'];?>.html" class="textmndichvu"><?php echo $showtin['News']['title'];?> </a><br>
		<?php } ?>       
		</div>
      </div>
      
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Trợ giúp mua hàng</div>
        </div>
        <div class="footertxt">
				   <?php $showtin = $this->requestAction('comment/showtin/291');
						foreach($showtin as $showtin){?>
							<a href="/tin/<?php echo $showtin['News']['id'];?>/<?php echo $showtin['News']['alias'];?>.html" class="textmndichvu"><?php echo $showtin['News']['title'];?> </a><br>
					<?php } ?> 
		</div>
      </div>
      <div id="footerbox2">
        <div class="footerheading">
          <div class="footerheading">Quy định chung</div>
        </div>
        <div class="footertxt">
				<?php $showtin = $this->requestAction('comment/showtin/289');
					foreach($showtin as $showtin){?>
						<a href="/tin/<?php echo $showtin['News']['id'];?>/<?php echo $showtin['News']['alias'];?>.html" class="textmndichvu"><?php echo $showtin['News']['title'];?> </a><br>
				<?php } ?> 
		  </div>
      </div>
	  <div id="leftt" style="    width: 287px;
    overflow: hidden;

    line-height: 20px;">
   <div class="footerheading">
          <div class="footerheading">CHI NHÁNH HÀ NỘI</div>
        </div>

			<?php echo $footer;?>
	  </div>
	  </div>
	  
      <div id="footerbox3">
        <div class="footerheading">
          <div class="footerheading">Thông tin liên hệ</div>
        </div>
        <div class="footertxt">
	
			<?php echo $footer;?>

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
		© 2016 <a href="http://noithathathinh.com.vn">www.noithathathinh.com.vn</a> All rights reserved.<br>
	  </div>
    </div>
  </div>
</div>

<form name="frmgh" method="get" action="/index.php">
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
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?49kNAhSriAzVZqQM2s0dBApBsjVtfIwC";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</div>


