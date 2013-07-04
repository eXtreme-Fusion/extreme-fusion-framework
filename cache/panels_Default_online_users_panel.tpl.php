<?php $this->sidePanel(__('Users online')); ?>
	<dl id="users_online">
		<dt><?php echo optLocale($this,'Guests online'); ?>:</dt>
		<dd><?php echo $this->data['guests']; ?></dd>
		<dt><?php echo optLocale($this,'Logged in users'); ?>:</dt>
		<dd><?php echo $this->data['members']; ?></dd>
		<dt><?php echo optLocale($this,'Total members'); ?>:</dt>
		<dd><?php echo $this->data['total']; ?></dd>
		<dt><?php echo optLocale($this,'Last member'); ?>:</dt>
		<dd><?php echo $this->data['member']; ?></dd>
		<?php ; if($this->data['inactive']){  ?>
		<dt><?php echo optLocale($this,'Inactive Members'); ?>:</dt>
		<dd><?php echo $this->data['member']; ?></dd>
		<?php  }  ?>
	</dl>
	<?php ; if($this->data['online']){  ?>
	<p class="links">
		<?php  if(is_array($this -> data['online']) && ($__online_cnt = sizeof($this -> data['online'])) > 0){    foreach($this -> data['online'] as $__online_id => &$__online_val){  ?>
		<?php echo $__online_val;  ; if(!($__online_id == $__online_cnt - 1)){  ?>, <?php  }  ?>
		<?php  } }  ?>
	</p>
	<?php  }  ?>
<?php $this->sidePanel(); ?>