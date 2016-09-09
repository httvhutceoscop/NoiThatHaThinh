<ul>	
	<?php
		$categoryproduct = $this->requestAction('/comment/submenuproduct');
		$i=0;
		foreach($categoryproduct as $categoryproduct){
	?>
		<li>
			<a href="/ds/<?php echo $categoryproduct['Catproduct']['id'];?>/<?php echo $categoryproduct['Catproduct']['alias'];?>.html"><?php echo $categoryproduct['Catproduct']['name'];?></a>
				<?php $categoryproduct2 = $this->requestAction('/comment/submenuproduct/'.$categoryproduct['Catproduct']['id']);?>
				<?php if(!empty($categoryproduct2)){?>
					<ul class="cap2">
						<?php
												
							foreach($categoryproduct2 as $categoryproduct2){
						?>
							<li>
								<a href="/dssp/<?php echo $categoryproduct2['Catproduct']['id'];?>/<?php echo $categoryproduct2['Catproduct']['alias'];?>"><?php echo $categoryproduct2['Catproduct']['name'];?></a>
							</li>
						<?php } ?>
				
					</ul>	
				<?php } ?>
		</li>
	<?php } ?>		
</ul>