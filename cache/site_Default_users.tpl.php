

<?php $this->middlePanel(optLocale($this,'Members List')); ?>
	<?php ; if($this->data['users']){  ?>
	<table class="tbl2">
		<thead>
			<tr>
				<th class="grid_4 bold"><?php echo optLocale($this,'Username'); ?></th>
				<th class="grid_2 bold"><?php echo optLocale($this,'User Level'); ?></th>
				<th class="grid_3 bold"><?php echo optLocale($this,'Groups'); ?></th>
				<th class="grid_3 bold"><?php echo optLocale($this,'Last visit'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php  if(is_array($this -> data['users']) && ($__users_cnt = sizeof($this -> data['users'])) > 0){    foreach($this -> data['users'] as $__users_id => &$__users_val){  ?>
			<tr class="<?php echo $__users_val['row']; ?>">
				<td><?php echo $__users_val['link']; ?></td>
				<td><?php echo $__users_val['role']; ?></td>
				<td><?php echo $__users_val['roles']; ?></td>
				<td><?php echo $__users_val['visit']; ?></td>
			</tr>
			<?php  } }  ?>
		</tbody>
	</table>
	<?php  }else{  ?>
	<div class="tbl2">
		<div class="sep_2 center"><?php echo optLocale($this,'No members have been found'); ?></div>
		<div class="clear"></div>
	</div>
	<?php  }  ?>
	<?php ; if($this->data['show_all']){  ?>
	<div class="tbl1 center">
		<a href="<?php echo $this->data['link']; ?>"><?php echo optLocale($this,'Show all'); ?></a>
	</div>
	<?php  }  ?>
	<div class="tbl center">
		<?php  if(is_array($this -> data['sort']) && ($__sort_cnt = sizeof($this -> data['sort'])) > 0){    foreach($this -> data['sort'] as $__sort_id => &$__sort_val){  ?>
		<a href="<?php echo $__sort_val['link']; ?>"<?php ; if($__sort_val['sel']){  ?> class="white bold"<?php  }  ?>><?php echo $__sort_val['disp']; ?></a>
		<?php  } }  ?>
	</div>
	<?php echo $this->data['page_nav']; ?>
<?php $this->middlePanel(); ?>