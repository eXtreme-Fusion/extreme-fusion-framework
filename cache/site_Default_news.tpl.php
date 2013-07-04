

<?php ; if($this->data['action']&&$this->data['action']!=='page'){  ?>
	<?php ; if($this->data['rows']){  ?>
		<?php $this->middlePanel(optLocale($this,'News preview')); ?>
			<article class="news dark border_top_other">
				<header>
					<p class="text_dark"><?php echo optLocale($this,'Date:'); ?> <time datetime="<?php echo $this->data['news']['datetime']; ?>" pubdate="pubdate"><?php echo $this->data['news']['date']; ?></time></p>
					<h3>
						<a href="<?php echo $this->data['news']['url']; ?>" title="<?php echo $this->data['news']['title_name']; ?>"><?php echo $this->data['news']['title_name']; ?></a>
						<?php ; if($this->data['access_edit']){  ?>
							<a href="<?php echo $this->data['ADDR_ADMIN']; ?>pages/news.php?page=news&amp;action=edit&amp;id=<?php echo $this->data['news']['title_id']; ?>&amp;indexPage=true" class="admin-box" title="<?php echo optLocale($this,'Edit'); ?>">[<?php echo optLocale($this,'Edit'); ?>]</a>
						<?php  }  ?>
					</h3>
					<?php ; if($this->data['news']['allow_comments']){  ?><a href="#comments" class="news_comments" title="<?php echo optLocale($this,'Comments:'); ?> <?php echo $this->data['news']['num_comments']; ?>"><?php echo $this->data['news']['num_comments']; ?></a><?php  }  ?>
					<div class="light text_light box_shadow1">
						<?php ; if($this->data['news']['category_id']){  ?><p><?php echo optLocale($this,'Category:'); ?> <a href="<?php echo $this->data['news']['category_link']; ?>" rel="tag"><?php echo $this->data['news']['category_name']; ?></a></p><?php  }  ?>
						<p><?php echo optLocale($this,'Author:'); ?> <a href="<?php echo $this->data['news']['author_link']; ?>" rel="author"><?php echo $this->data['news']['author_name']; ?></a></p>
						<p><?php echo optLocale($this,'Reads:'); ?> <?php echo $this->data['news']['reads']; ?></p>
					</div>
				</header>
				<div id="content_extended" class="formated_text clearfix">
					<?php ; if($this->data['news']['content']){  ?>
						<?php echo $this->data['news']['content']; ?>
					<?php  }  ?>
					<?php ; if($this->data['news']['content_ext']){  ?>
						<?php echo $this->data['news']['content_ext']; ?>
					<?php  }  ?>
				</div>
				<footer class="text_dark">
					<?php ; if($this->data['news']['keyword']){  ?>
						<p>
							<strong><?php echo optLocale($this,'Tags:'); ?></strong>
							<?php echo $this->data['news']['keyword']; ?>
						</p>
					<?php  }  ?>
					<?php ; if($this->data['news']['source']){  ?>
						<p><strong><?php echo optLocale($this,'Source'); ?>:</strong> <a href="<?php echo $this->data['news']['source']; ?>" target="_blank"><?php echo $this->data['news']['source']; ?></a></p>
					<?php  }  ?>
				</footer>
			</article>
		<?php $this->middlePanel(); ?>
		<?php echo $this->data['comments']; ?>
	<?php  }else{  ?>
		<?php $this->middlePanel(optLocale($this,'Error')); ?>
			<p class="status"><?php echo optLocale($this,'No data!'); ?></p>
		<?php $this->middlePanel(); ?>
	<?php  }  ?>
<?php  }else{  ?>
	<?php $this->middlePanel(optLocale($this,'News')); ?>
		<?php ; if($this->data['news']){  ?>
			<?php  if(is_array($this -> data['news']) && ($__news_cnt = sizeof($this -> data['news'])) > 0){    foreach($this -> data['news'] as $__news_id => &$__news_val){  ?>
				<article class="news dark border_top_other">
					<header>
						<p class="text_dark"><?php echo optLocale($this,'Date:'); ?> <time datetime="<?php echo $__news_val['datetime']; ?>" pubdate="pubdate"><?php echo $__news_val['date']; ?></time></p>
						<h3><a href="<?php echo $__news_val['url']; ?>" title="<?php echo $__news_val['title_name']; ?>"><?php echo $__news_val['title_name']; ?></a></h3>
						<?php ; if($__news_val['allow_comments']){  ?><a href="<?php echo $__news_val['url']; ?>#comments" class="news_comments" title="<?php echo optLocale($this,'Comments:'); ?> <?php echo $__news_val['num_comments']; ?>"><?php echo $__news_val['num_comments']; ?></a><?php  }  ?>
						<div class="light text_light box_shadow1">
							<?php ; if($__news_val['category_id']){  ?><p><?php echo optLocale($this,'Category:'); ?> <a href="<?php echo $__news_val['category_link']; ?>" rel="tag"><?php echo $__news_val['category_name']; ?></a></p><?php  }  ?>
							<p><?php echo optLocale($this,'Author:'); ?> <a href="<?php echo $__news_val['author_link']; ?>" rel="author"><?php echo $__news_val['author_name']; ?></a></p>
							<p><?php echo optLocale($this,'Language:'); ?> <?php echo $__news_val['language']; ?></p>
							<p><?php echo optLocale($this,'Reads:'); ?> <?php echo $__news_val['reads']; ?></p>
						</div>
					</header>
					<div class="formated_text clearfix">
						<?php echo $__news_val['content']; ?>
					</div>
					<footer class="text_dark clearfix">
						<?php ; if($__news_val['content_ext']){  ?>
							<a href="<?php echo $__news_val['url']; ?>#content_extended" class="button more"><?php echo optLocale($this,'Read more...'); ?></a>
						<?php  }  ?>
						<?php ; if($__news_val['keyword']){  ?>
							<p>
								<strong><?php echo optLocale($this,'Słowa kluczowe:'); ?></strong>
								<?php echo $__news_val['keyword']; ?>
							</p>
						<?php  }  ?>
						<?php ; if($__news_val['source']){  ?>
							<p><strong><?php echo optLocale($this,'Source'); ?>:</strong> <a href="<?php echo $__news_val['source']; ?>" target="_blank"><?php echo $__news_val['source']; ?></a></p>
						<?php  }  ?>
					</footer>
					</article>
			<?php  } }  ?>
		<?php echo $this->data['page_nav']; ?>
	<?php  }else{  ?>
		<p class="status"><?php echo optLocale($this,'No News has been posted yet'); ?></p>
	<?php  }  ?>
<?php $this->middlePanel(); ?>
<?php  }  ?>
