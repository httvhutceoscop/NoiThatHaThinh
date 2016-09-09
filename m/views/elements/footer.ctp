
<!-- footer pc -->
<div class="navbar-toggle collapsed">
<div class="home_content_sp">
<div class="col-xs-12">
<div class="rowsp">
<div class="contact_form_sp">

<div class="col-xs-12" style="margin-top:10px;">
	
</div>


</div>
</div>
</div>
</div>
</div>
<div class="collapse navbar-collapse">
<div id="footer">
	
    <div class="footer_content">
        <div class="row">
		<a href="#" class="scrollup" id="scrollup_pc">Scroll</a>
		
            <div class="col-xs-12">
                <div class="row logo-footer">
                   
					<p class="copyright">
				<?php $setting = $this -> requestAction('/comment/setting');?>
			<?php foreach($setting as $settings){?>
							<?php echo $settings['Setting']['footer'];?>
			<?php } ?>
				
				</p>
                </div>
            </div>       
            
			<div class="col-xs-12">
			
				
			</div>
        </div>
    </div>
</div>
</div>
<!-- end footer pc -->
<!-- footer sp -->
<div class="navbar-toggle collapsed">
	<div id="footer_sp">
			<a href="#" class="scrollup" id="scrollup_sp">Scroll</a>
			<a href="tel:0988993835" class="callup" id="scrollup_pc">call</a>
			
			<div class="content_sp_footer">
				<?php $setting = $this -> requestAction('/comment/setting');?>
<?php foreach($setting as $settings){?>
				<?php echo $settings['Setting']['footer'];?>
<?php } ?>  
				
			</div>
	</div>
</div>

<!--End of Zopim Live Chat Script-->
<!-- end footer sp --> 
</body>
</html>



