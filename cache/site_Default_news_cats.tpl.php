

<?php ; if($this->data['page']=='category'){  ?>
	
	<?php opentable(__('News categories').' &raquo; '.$this->data['category']['cat_name']) ?>
		<p class="cat_top dark text_dark">
			<a href="<?php echo $this->data['all_news_url']; ?>"><?php echo optLocale($this,'News'); ?></a> <img src="<?php echo $this->data['THEME_IMAGES']; ?>bullet.png" alt=""> <a href="<?php echo $this->data['all_news_cats_url']; ?>"><?php echo optLocale($this,'News categories'); ?></a> <img src="<?php echo $this->data['THEME_IMAGES']; ?>bullet.png" alt=""> <strong><?php echo optLocale($this,$this->data['category']['cat_name']); ?></strong> (<?php echo $this->data['category']['cat_news_count']; ?>)
		</p>
		<?php ; if($this->data['rows']){  ?>
			<div class="clearfix">
				<?php  if(is_array($this -> data['rows']) && ($__rows_cnt = sizeof($this -> data['rows'])) > 0){    foreach($this -> data['rows'] as $__rows_id => &$__rows_val){  ?>
						<article class="news dark border_top_other">
						<header class="clearfix">
							<p class="text_dark"><?php echo optLocale($this,'Date:'); ?> <time datetime="<?php echo $__rows_val['news_datetime']; ?>" pubdate="pubdate"><?php echo $__rows_val['news_datestamp']; ?></time> | <?php echo optLocale($this,'Author:'); ?> <a href="<?php echo $__rows_val['profile_url']; ?>" rel="author"><?php echo $__rows_val['news_author_name']; ?></a></p>
							<h3><a href="<?php echo $__rows_val['news_url']; ?>" title="<?php echo $__rows_val['news_title_name']; ?>"><?php echo $__rows_val['news_title_name']; ?></a></h3>
						</header>
						<div class="formated_text clearfix">
							<?php echo $__rows_val['news_content']; ?>
						</div>
						<footer class="clearfix">
							<a href="<?php echo $__rows_val['news_url']; ?>" class="button more"><?php echo optLocale($this,'Read more...'); ?></a>
						</footer>
					</article>
				<?php  } }  ?>
			</div>
			<?php echo $this->data['page_nav']; ?>
		<?php  }else{  ?>
			<p class="status"><?php echo optLocale($this,'There are no news in the specified category.'); ?></p>
		<?php  }  ?>
	<?php closetable() ?>
<?php  }elseif($this->data['page']=='overview'){  ?>
	<?php $this->middlePanel(optLocale($this,'News categories')); ?>
		<p class="cat_top dark text_dark">
			<a href="<?php echo $this->data['all_news_url']; ?>"><?php echo optLocale($this,'News'); ?></a> <img src="<?php echo $this->data['THEME_IMAGES']; ?>bullet.png" alt=""> <strong><?php echo optLocale($this,'News categories'); ?></strong>
		</p>
		<?php ; if($this->data['i']){  ?>
			<ul class="cat_list">
				<?php  if(is_array($this -> data['i']) && ($__i_cnt = sizeof($this -> data['i'])) > 0){    foreach($this -> data['i'] as $__i_id => &$__i_val){  ?>
					<li>
						<a href="<?php echo $__i_val['url']; ?>" title="<?php echo $__i_val['cat_title_name']; ?>" class="dark">
							<span>
								<strong><?php echo optLocale($this,$__i_val['cat_title_name']); ?></strong>
								<img src="<?php echo $this->data['NEWS_CAT_IMAGES'];  echo $__i_val['cat_image']; ?>" alt="<?php echo $__i_val['cat_title_name']; ?>">
								<small class="text_dark"><?php echo optLocale($this,'News:'); ?> <?php echo $__i_val['cat_count_news']; ?></small>
							</span>
						</a>
					</li>
				<?php  } }  ?>
			</ul>
		<?php  }else{  ?>
			<p class="status"><?php echo optLocale($this,'There are no categories.'); ?></p>
		<?php  }  ?>
	<?php $this->middlePanel(); ?>
<?php  }  ?>