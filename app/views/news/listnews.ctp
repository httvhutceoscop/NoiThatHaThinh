

<div id="box-h-right">
	  	<div class="tcat">		
			<a href="./"> Trang chủ</a><span style=" font-weight:normal"> &gt;&gt; </span>
				<?php echo $cat['Category']['name'];?>
			<span style="font-weight:normal"> </span>
		</div>
		<h1><a href="san-pham/ban-lam-viec-hoa-phat.htm"> <?php echo $cat['Category']['name'];?></a> 
        <span style="font-weight:normal"> </span>
		</h1>
 
	<div class="title_home_page toplist topds">
            <h2>
                
            </h2>
	</div>

     
        <?php if(count($listnews)==1) { ?>
		<?php foreach ($listnews as $listnews) { ?>
		<div class="m1" style="padding:3px 10px !important;min-height: 585px !important;">            
		<?php echo $listnews['News']['content'] ?>
		</div>
		<?php } ?>
		      <?php } else { if(count($listnews) > 1) { ?>
		<div class="m1" style="padding:3px 10px !important;">            
                               
                <div class="roundBoxBody">
                     <?php  if($listnews){?>
                        <?php  foreach($listnews as $itm){ ?>
                            <div class="intro-content" style="margin: 10px 0; padding: 5px 0; float:left;">                           
                                	
                                        <span class="picBox" style="width:128px; height: 98px; float: left;"> 
                                             <a href="<?php echo DOMAIN?>tin/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html">
                                                	<img src="<?php echo DOMAIN;?><?php echo $itm['News']['images'];?>" width="128" height="103" alt="<?php echo $itm['News']['title']?>"/>
                                             </a>
                                        </span> 
                                  
                                   
                                   <div style="padding-left: 140px;"> 
								
								   
                                  
                                    <h3>
                                        <a  style="color: #237BA0 !important;" href="<?php echo DOMAIN?>tin/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html">
                                            <?php echo strip_tags($this->Text->truncate( $itm['News']['title'],130,array('ending' => '...','exact' => false)));?></a>
                                        </a>
                                    </h3>     
                                    <div>	                                                        		
                                   		<?php echo strip_tags($this->Text->truncate( $itm['News']['introduction'],290,array('ending' => '...','exact' => false)));?>
                                    </div>
                                    </div>
                                    <div class="detail" align="right">
                                    	<a rel="nofollow" href="<?php echo DOMAIN?>tin/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html">
                                    	      <u><i>Chi tiết</i></u> 
    			                      	 </a> 
                                         
                                    </div> 
                             </div>
                             
                              <div class="clearfix"></div><br />
                        <?php } }else{?> 
                            <div id="noidung">
                                <p>Chưa có tin</p>
                            </div>
                        <?php }?>
     	
                   <div id="page" style="float: right;">        	
                        <?php if($paginator->numbers()!=null){
            				$paginator->options(array('url' => $this->passedArgs));
            				echo $paginator->prev('<<', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->next('>>' , null, null, array('class' => 'disabled'));
            				echo "</span>";
                        }?>
                   </div>                             
                                            
                </div>
                  
             <div class="clearfix"></div>
        </div> 
		<?php } }?>
		
        <div class="b"><div class="b"><div class="b"></div></div></div>
    </div>
</div>

			
