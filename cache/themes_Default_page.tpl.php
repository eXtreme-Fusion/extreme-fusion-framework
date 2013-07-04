<?php ; if($this->data['logo']){  ?>
<header id="site_top">
	<h1><?php echo $this->data['logo']; ?></h1>
</header>
<?php  }  ?>

<?php ; if($this->data['menu']){  ?>
<nav id="main_nav">
	<ul>
	<?php  if(is_array($this -> data['menu']) && ($__menu_cnt = sizeof($this -> data['menu'])) > 0){    foreach($this -> data['menu'] as $__menu_id => &$__menu_val){  ?>
		<li<?php ; if($__menu_val['selected']){  ?> class="selected"<?php  }  ?>><?php echo $__menu_val['sep']; ?><a href="<?php echo $__menu_val['link']; ?>"<?php ; if($__menu_val['target']){  ?> target="_blank"<?php  }  ?>><?php echo $__menu_val['name']; ?></a></li>
	<?php  } }  ?>
	</ul>
</nav>
<?php  }  ?>

<section id="site_mid" >
	<?php ; if($this->data['LEFT']){  ?><aside id="s_left"><?php echo $this->data['LEFT']; ?></aside><?php  }  ?>
	<?php ; if($this->data['RIGHT']){  ?><aside id="s_right"><?php echo $this->data['RIGHT']; ?></aside><?php  }  ?>
	<section id="<?php ; if($this->data['LEFT']&&$this->data['RIGHT']){  ?>s_center<?php  }   ; if(!$this->data['LEFT']&&!$this->data['RIGHT']){  ?>no_both<?php  }   ; if(!$this->data['LEFT']&&$this->data['RIGHT']){  ?>no_left<?php  }   ; if(!$this->data['RIGHT']&&$this->data['LEFT']){  ?>no_right<?php  }  ?>">
		<?php ; if($this->data['getTryLogin']){  ?>
			<div class="error bold">
				Logowanie nie powiodło się. Sprawdź poprawność wprowadzanych danych i spróbuje jeszcze raz.
			</div>
		<?php  }  ?>
		<?php echo $this->data['CONTENT']; ?>
	</section>
</section>

<?php ; if($this->data['footer']){  ?>
<footer id="site_bot">
	<?php ; if($this->data['copyright']){  ?>
		<address><?php echo $this->data['copyright']; ?></address>
	<?php  }  ?>
	<p><?php echo $this->data['footer']; ?></p>
	<address>Theme by <a href="http://nlds-group.com/" title="NLDS-Group.com"><img src="<?php echo $this->data['THEME_IMAGES']; ?>nlds_logo.png" alt="NLDS-Group.com"></a></address>
	<?php ; if($this->data['admin_panel_link']){  ?><p><?php echo $this->data['admin_panel_link']; ?></p><?php  }  ?>
	<?php ; if($this->data['visits_count']){  ?><p>Unikalnych wizyt: <?php echo $this->data['visits_count']; ?></p><?php  }  ?>
</footer>
<?php  }  ?>