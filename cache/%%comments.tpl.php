<?php ; if(!$this->data['only_comments']){  ?>
	<?php $this->middlePanel(optLocale($this,'Add comments')); ?>
		<?php ; if($this->data['can_comment']){  ?>
			<div id="comment_form">
				<p id="loading" class="center hide info close-valid"><?php echo optLocale($this,'Adding your comment'); ?></p>
				<p id="added" class="center hide valid close-valid"><?php echo optLocale($this,'Comment has been added'); ?></p>
				<form method="post" action="<?php echo $this->data['URL_REQUEST']; ?>" class="center" name="comment">
					<?php ; if($this->data['iGUEST']){  ?>
						<div class="line center"><input id="author" type="text" class="valueSystem" name="author" value="<?php echo optLocale($this,'Your name'); ?>" /></div>
					<?php  }  ?>
					
					<div><textarea id="post" rows="4" class="cm_textarea" name="post" placeholder="<?php echo optLocale($this,'Enter a comment'); ?>"></textarea></div>
					<div class="line center">
						<?php  if(is_array($this -> data['bbcode']) && ($__bbcode_cnt = sizeof($this -> data['bbcode'])) > 0){    foreach($this -> data['bbcode'] as $__bbcode_id => &$__bbcode_val){  ?>
							<button type="button" onClick="addText('<?php echo $__bbcode_val['textarea']; ?>', '[<?php echo $__bbcode_val['value']; ?>]', '[/<?php echo $__bbcode_val['value']; ?>]', 'comment');"><img src="<?php echo $__bbcode_val['image']; ?>" title="<?php echo $__bbcode_val['description']; ?>" class="tip"></button>
						<?php  } }  ?>
					</div>
					<div class="line center">
						<?php  if(is_array($this -> data['smiley']) && ($__smiley_cnt = sizeof($this -> data['smiley'])) > 0){    foreach($this -> data['smiley'] as $__smiley_id => &$__smiley_val){  ?>
							<img src="<?php echo $this->data['ADDR_IMAGES']; ?>smiley/<?php echo $__smiley_val['image']; ?>" title="<?php echo $__smiley_val['text']; ?>" class="tip" onclick="insertText('<?php echo $__smiley_val['textarea']; ?>', '<?php echo $__smiley_val['code']; ?>', 'comment');">
							<?php ; if($__smiley_val['i']%10==0){  ?></div><div><?php  }  ?>
						<?php  } }  ?>
					</div>
					<input id="item" type="hidden" name="item" value="<?php echo $this->data['item']; ?>" />
					<input id="type" type="hidden" name="type" value="<?php echo $this->data['type']; ?>" />
					<div class="line center"><span id="send" class="button"><?php echo optLocale($this,'Add replay'); ?></span></div>
				</form>
			</div>
		<?php  }else{  ?>
			<p class="center"><?php echo optLocale($this,'Commenting has been disabled for your group permissions'); ?></p>
		<?php  }  ?>
	<?php $this->middlePanel(); ?>

	<div id="comment-block">
<?php  }  ?>
	<?php ; if($this->data['comment']){  ?>
		<div id="comments">
			<?php echo $this->data['page_nav']; ?>
			<?php  if(is_array($this -> data['comment']) && ($__comment_cnt = sizeof($this -> data['comment'])) > 0){    foreach($this -> data['comment'] as $__comment_id => &$__comment_val){  ?>
				<div class="comment" id="body_<?php echo $__comment_val['id']; ?>">
					<div class="cm_avatar center">
						<img src="<?php echo $__comment_val['avatar']; ?>" alt="none_avatar" width="60px" />
					</div>
					<div class="cm_content">
						<div class="cm_content2">
							<div class="details">
								<?php echo $__comment_val['author']; ?>, <?php echo $__comment_val['datestamp']; ?>
								<?php ; if($__comment_val['edit']){  ?>
									<a href="<?php echo $this->data['ADDR_AJAX']; ?>comments.php?id=<?php echo $__comment_val['id']; ?>&amp;action=edit&amp;request=get" id="<?php echo $__comment_val['id']; ?>" rel="facebox" class="facebox">[Edycja]</a>
								<?php  }  ?>
								<?php ; if($__comment_val['delete']){  ?>
									<a href="<?php echo $this->data['ADDR_AJAX']; ?>comments.php?id=<?php echo $__comment_val['id']; ?>&amp;action=delete&amp;request=get" id="<?php echo $__comment_val['id']; ?>" rel="facebox">[Usuń]</a>
								<?php  }  ?>
								<a href="#body_<?php echo $__comment_val['id']; ?>" class="block-right">[#<?php echo $__comment_val['id']; ?>]</a>
							</div>
							<div class="cm_post" id="content_<?php echo $__comment_val['id']; ?>">
								<?php echo $__comment_val['post']; ?>
							</div>
						</div>
					</div>
				</div>
			<?php  } }  ?>
			<?php ; if($this->data['count']/2>=$this->data['limit']/2){   echo $this->data['page_nav'];   }  ?>
		</div>
	<?php  }  ?>
<?php ; if(!$this->data['only_comments']){  ?>
	</div>
<?php  }  ?>