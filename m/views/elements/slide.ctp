 
<!-- slide sp -->
 <div class="container">
 <div class="row">
		<div id="slidersp">
			<div class="col-xs-12">
				<div class="rowsp">	
					
					<div id="slider" >
						<div id="owl-demo" class="owl-carousel  owl-theme">	
						<?php $slide = $this -> requestAction('/comment/slideshow');?>
						<?php foreach($slide as $slide){?>
						<div class="item">
							<a href="#"><img class="img-sl" src="<?php echo DOMAINAD;?><?php echo $slide['Slideshow']['images'];?>" alt="bac tot"/></a>
						 </div>
						<?php } ?>					
					
						</div>
					 </div>							
					 
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- end slide sp-->