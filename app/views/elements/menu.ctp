
<div id="nav-menuhome2">
  <ul>
	<li><a href="/index.html"><span>Trang chủ</span></a></li>
	<?php $menupro1 = $this->requestAction('/comment/menucategory') ?>
   <?php foreach($menupro1 as $menupro1){?>
	<li>
		
			<a href="<?php echo DOMAIN;?>danh-sanh-tin/<?php echo $menupro1['Category']['id'];?>/<?php echo $menupro1['Category']['alias'];?>">
			<span>
			<?php echo $menupro1['Category']['name'];?> 
			</span>
			</a>
		
	</li>
	<?php } ?>
	<li><a href="/lien-he"><span>Liên hệ</span></a></li>
  </ul>
</div>





