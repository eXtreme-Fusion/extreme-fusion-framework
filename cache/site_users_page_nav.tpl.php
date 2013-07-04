<?php ; if($this->data['nums']){  ?>
	<div class="center">
		<?php ; if($this->data['first']){  ?><a href="<?php echo optUrl($this,"controller =>",optRouter($this,'controller'),optRouter($this,'action'),$this->data['first']); ?>" title="<?php echo optLocale($this,'Go to first page'); ?>" class="buttone">Do pierwszej</a><?php  }  ?>
			<?php  if(is_array($this -> data['nums']) && ($__nums_cnt = sizeof($this -> data['nums'])) > 0){    foreach($this -> data['nums'] as $__nums_id => &$__nums_val){  ?>
				<?php ; if($__nums_val==$this->data['current']){  ?>
					<strong class="button"><?php echo $__nums_val; ?></strong>
				<?php  }else{  ?>
					<a href="<?php echo optUrl($this,"controller =>",optRouter($this,'controller'),optRouter($this,'action'),$__nums_val); ?>" title="<?php echo optLocale($this,'Go to page'); ?>" class="buttone"><?php echo $__nums_val; ?></a>
				<?php  }  ?>
			<?php  } }  ?>
		<?php ; if($this->data['last']){  ?><a href="<?php echo optUrl($this,"controller =>",optRouter($this,'controller'),optRouter($this,'action'),$this->data['last']); ?>" title="<?php echo optLocale($this,'Go to last page'); ?>" class="buttone">Do ostatniej</a><?php  }  ?>
	</div>
<?php  }  ?>