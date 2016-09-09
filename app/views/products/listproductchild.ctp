<div id="box-h-right">
	  	<div class="tcat">		
			<a href="./"> Trang chủ</a><span style=" font-weight:normal"> &gt;&gt; </span>
			<a href="/ds/<?php echo $cat['Catproduct']['id'];?>/<?php echo $cat['Catproduct']['alias'];?>"><?php echo $cat['Catproduct']['name'];?></a> 
			<span style="font-weight:normal"> </span>
		</div>
		<h1><a href="/dssp/<?php echo $catchild['Catproduct']['id'];?>/<?php echo $cat['Catproduct']['alias'];?>"> <?php echo $catchild['Catproduct']['name'];?></a> 
        <span style="font-weight:normal"> </span>
		</h1>
		<div class="conten_main sup_prdouct">
		
			<div style="width:90%;padding:0px 0px 20px 0px;font-size:18px;">  </div>
					<?php foreach($products as $pr) {?>
     	            <div id="box-sp" style="position:relative;">
						  <div id="bg-pro">
						  <table width="175" border="0" style="text-align:center; padding:0px; margin:0px;">
							  <tbody>
							  <tr>
								<td>
									<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
										<img alt="<?php echo $pr['Product']['title'];?>" title="<?php echo $pr['Product']['title'];?>" src="<?php echo DOMAIN;?><?php echo $pr['Product']['images'];?>" width="204" height="175">
									</a>
								</td>
							  </tr>
							  
							  </tbody>
						  
						  </table>
						  
						  </div>
						  <h3 id="box-tdsp">
							<a href="/sp/<?php echo $pr['Product']['id'];?>" title="<?php echo $pr['Product']['title'];?>">
								<?php echo $pr['Product']['title'];?>
							</a><br>
						  </h3>
						  <div id="box-tdsp">
							<div class="giamoi" id="giamoi">
								<?php echo number_format( $pr['Product']['price'],0);?>  VND
							</div>
							<div id="giacu">
							</div>
						 </div>
					</div>    
					<?php } ?>
               
		<div class="phantrang">        	
				<?php if($paginator->numbers()!=null){
					$paginator->options(array('url' => $this->passedArgs));
					echo $paginator->prev('<<', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
					echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
					echo $paginator->next('>>' , null, null, array('class' => 'disabled'));
					echo "</span>";
				}?>
		</div>   
		</div>
			
      </div>
			 

		

<?php echo $this->element('left');?>
