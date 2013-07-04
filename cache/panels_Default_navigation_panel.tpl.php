

<?php $this->sidePanel(__('Navigation Panel')); ?>
<?php ; if($this->data['nav']){  ?>
<ul id="side_nav">
	<?php  if(is_array($this -> data['nav']) && ($__nav_cnt = sizeof($this -> data['nav'])) > 0){    foreach($this -> data['nav'] as $__nav_id => &$__nav_val){  ?>
	<?php ; if($__nav_val['type']==1){  ?>
	<li class="header"><?php echo $__nav_val['name']; ?></li>
	<?php  }elseif($__nav_val['type']==2){  ?>
	<li class="separator"></li>
	<?php  }else{  ?>
	<li><a href="<?php echo $__nav_val['url']; ?>"<?php ; if($__nav_val['link_target']){  ?> <?php echo $__nav_val['link_target'];   }  ?>><?php echo $__nav_val['name']; ?></a></li>
	<?php  }  ?>
	<?php  } }  ?>
</ul>
<?php  }else{  ?>
<div class="error center"><?php echo optLocale($this,'No site links'); ?></div>
<?php  }  ?>
<?php $this->sidePanel(); ?>