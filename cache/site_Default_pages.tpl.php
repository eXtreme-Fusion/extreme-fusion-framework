

<?php ; if($this->data['message']){  ?>
	<div class="<?php echo $this->data['class']; ?>"><?php echo $this->data['message']; ?></div>
<?php  }else{  ?>

	<?php ; if($this->data['page']=='main'){  ?>
		<?php $this->middlePanel('Przegląd treści'); ?>
			<?php ; if($this->data['data']){  ?>
				<p class="center"><a href="<?php echo optUrl($this,'controller=>','pages','action=>','categories'); ?>" title="Kategorie treści">Wyświetl wszystkie kategorie</a></p>
				<p>Na tej stronie znajdują się nastepujące rodzaje materiałów:</p>
				<ul class="margin-b-10">
					<?php  if(is_array($this -> data['data']) && ($__data_cnt = sizeof($this -> data['data'])) > 0){    foreach($this -> data['data'] as $__data_id => &$__data_val){  ?>
						<div class="tbl">
							<li><a href="<?php echo $__data_val['link']; ?>" title="<?php echo $__data_val['name']; ?>"><?php echo $__data_val['name']; ?></a></li>
						</div>
					<?php  } }  ?>
				</ul>
				<p class="center">Wybierz jeden z nich, by zobaczyć przypisane mu kategorie.</p>
			<?php  }else{  ?>
				Brak materiałów na stronie
			<?php  }  ?>
		<?php $this->middlePanel(); ?>
	<?php  }elseif($this->data['page']=='type'){  ?>
		<?php $this->middlePanel('Nawigacja'); ?>
		<p>Jesteś tutaj: <a href="<?php echo optUrl($this); ?>" title="Materiały na stronie">Materiały na stronie</a> &raquo; <?php echo $this->data['type']; ?> &raquo; Kategorie treści wybranego typu</p>
		<?php $this->middlePanel(); ?>


			<?php ; if($this->data['data']){  ?>
				
				<?php $i = 0; ?>
				<?php  if(is_array($this -> data['data']) && ($__data_cnt = sizeof($this -> data['data'])) > 0){    foreach($this -> data['data'] as $__data_id => &$__data_val){  ?>
					<?php opentable('Kategoria &raquo; '.$this->data['data'][$i]['name']); ?>
						<div class="tbl formated_text clearfix">
							<section id="content"><?php ; if($__data_val['thumbnail']){  ?><img src="<?php echo $this->data['ADDR_UPLOAD']; ?>images/<?php echo $__data_val['thumbnail']; ?>"><?php  }   echo $__data_val['description']; ?></section>
							<p><a href="<?php echo $__data_val['link']; ?>" title="<?php echo $__data_val['name']; ?>">Materiały w kategorii...</a></p>
						</div>
					<?php $i++; closetable(); ?>

				<?php  } }  ?>
			<?php  }else{  ?>
				<?php $this->middlePanel('Kategorie treści'); ?>
					Brak materiałów dla tego typu treści
				<?php $this->middlePanel(); ?>
			<?php  }  ?>
		
		<?php closetable(); ?>
	<?php  }elseif($this->data['page']=='category'){  ?>
		<?php $this->middlePanel('Nawigacja'); ?>
		<p>Jesteś tutaj: <a href="<?php echo optUrl($this); ?>" title="Materiały na stronie">Materiały na stronie</a> &raquo; <a href="<?php echo $this->data['type']['link']; ?>" title="<?php echo $this->data['type']['name']; ?>"><?php echo $this->data['type']['name']; ?></a> &raquo; Materiały w kategorii: <?php echo $this->data['category']; ?></p>
		<?php $this->middlePanel(); ?>

			<?php ; if($this->data['data']){  ?>
				
				<?php $i = 0; ?>
				<?php  if(is_array($this -> data['data']) && ($__data_cnt = sizeof($this -> data['data'])) > 0){    foreach($this -> data['data'] as $__data_id => &$__data_val){  ?>
					<?php opentable('Materiał &raquo; '.$this->data['data'][$i]['title']); ?>
						<div class="tbl formated_text clearfix">
							<p class="margin-b-10"><small>Dodane przez <?php echo $__data_val['author']; ?> dnia <?php echo $__data_val['date']; ?></small></p>
							<section id="preview"><?php echo $__data_val['preview']; ?></section>
							<div><a href="<?php echo $__data_val['link']; ?>">Czytaj więcej...</a></div>
						</div>
					<?php $i++; closetable(); ?>
				<?php  } }  ?>
			<?php  }else{  ?>
				
				<?php opentable('Materiały w kategorii '.$this->data['category']); ?>
					Brak materiałów w tej kategorii
				<?php closetable(); ?>
			<?php  }  ?>
	<?php  }elseif($this->data['page']=='categories'){  ?>
		<?php $this->middlePanel('Nawigacja'); ?>
		<p>Jesteś tutaj: <a href="<?php echo optUrl($this); ?>" title="Materiały na stronie">Materiały na stronie</a> &raquo; Przeglądana kategoria: <?php echo $this->data['category']; ?></p>
		<?php $this->middlePanel(); ?>

			<?php ; if($this->data['data']){  ?>
				<?php $i = 0; ?>
				<?php  if(is_array($this -> data['data']) && ($__data_cnt = sizeof($this -> data['data'])) > 0){    foreach($this -> data['data'] as $__data_id => &$__data_val){  ?>
					<?php opentable('Materiał &raquo; '.$this->data['data'][$i]['title']); ?>
						<div class="tbl formated_text clearfix">
							<p class="margin-b-10"><small>Dodane przez <?php echo $__data_val['author']; ?> dnia <?php echo $__data_val['date']; ?></small></p>
							<section id="preview"><?php echo $__data_val['preview']; ?></section>
							<div><a href="<?php echo $__data_val['link']; ?>">Czytaj więcej...</a></div>
						</div>
					<?php $i++; closetable(); ?>
				<?php  } }  ?>
			<?php  }else{  ?>
				<?php opentable('Materiały w kategorii '.$this->data['category']); ?>
					Brak materiałów w tej kategorii
				<?php closetable(); ?>
			<?php  }  ?>
	<?php  }elseif($this->data['page']=='categories_list'){  ?>
		<?php $this->middlePanel('Nawigacja'); ?>
		<p>Jesteś tutaj: <a href="<?php echo optUrl($this); ?>" title="Materiały na stronie">Materiały na stronie</a> &raquo; Przegląd kategorii</p>
		<?php $this->middlePanel(); ?>

			<?php ; if($this->data['data']){  ?>
				<?php $i = 0; ?>
				<?php  if(is_array($this -> data['data']) && ($__data_cnt = sizeof($this -> data['data'])) > 0){    foreach($this -> data['data'] as $__data_id => &$__data_val){  ?>
					<?php opentable('Kategoria &raquo; '.$this->data['data'][$i]['name']); ?>
						<div class="tbl formated_text clearfix">
							<section id="preview"><?php ; if($__data_val['thumbnail']){  ?><img src="<?php echo $this->data['ADDR_UPLOAD']; ?>images/<?php echo $__data_val['thumbnail']; ?>"><?php  }   echo $__data_val['description']; ?></section>
							<div><a href="<?php echo $__data_val['link']; ?>">Więcej...</a></div>
						</div>
					<?php $i++; closetable(); ?>
				<?php  } }  ?>
			<?php  }else{  ?>
				<?php opentable('Kategorie treści'); ?>
					Brak utworzonych kategorii
				<?php closetable(); ?>
			<?php  }  ?>
	<?php  }elseif($this->data['page']=='entry'){  ?>
		<?php $this->middlePanel('Nawigacja'); ?>
		<p>Jesteś tutaj: <a href="<?php echo optUrl($this); ?>" title="Materiały na stronie">Materiały na stronie</a> &raquo; <a href="<?php echo $this->data['type']['url']; ?>" title="<?php echo $this->data['type']['name']; ?>"><?php echo $this->data['type']['name']; ?></a> &raquo; Czytasz: <?php echo $this->data['entry']; ?></p>
		<?php $this->middlePanel(); ?>

		<?php opentable($this->data['data']['title']); ?>
			<div class="margin-b-10">
				<small>Dodane przez <?php echo $this->data['data']['author']; ?> dnia <?php echo $this->data['data']['date']; ?></small>

					<?php ; if($this->data['keyword']){  ?>
						<small>Słowa kluczowe: </small>
						<?php  if(is_array($this -> data['keyword']) && ($__keyword_cnt = sizeof($this -> data['keyword'])) > 0){    foreach($this -> data['keyword'] as $__keyword_id => &$__keyword_val){  ?>
							<a href="<?php echo $__keyword_val['url']; ?>" title="<?php echo $__keyword_val['name']; ?>" class="small"><?php echo $__keyword_val['name']; ?></a>,
						<?php  } }  ?>
					<?php  }  ?>
					<?php ; if($this->data['cats']){  ?>
						<small>Kategorie: </small>
						<?php  if(is_array($this -> data['cats']) && ($__cats_cnt = sizeof($this -> data['cats'])) > 0){    foreach($this -> data['cats'] as $__cats_id => &$__cats_val){  ?>
							<a href="<?php echo $__cats_val['url']; ?>" title="<?php echo $__cats_val['name']; ?>" class="small"><?php echo $__cats_val['name']; ?></a>,
						<?php  } }  ?>
					<?php  }  ?>

			</div>
			<?php ; if($this->data['data']){  ?>
				<div class="formated_text clearfix"><?php ; if($this->data['data']['thumbnail']){  ?><img src="<?php echo $this->data['ADDR_UPLOAD']; ?>images/<?php echo $this->data['data']['thumbnail']; ?>"><?php  }   echo $this->data['data']['content']; ?></div>
			<?php  }else{  ?>
				Wystąpił błąd. Przepraszamy za utrudnienia.
			<?php  }  ?>
		<?php closetable(); ?>
		<?php ; if($this->data['user_allow_comments']){  ?>
			<?php echo $this->data['comments']; ?>
		<?php  }  ?>
	<?php  }  ?>
<?php  }  ?>