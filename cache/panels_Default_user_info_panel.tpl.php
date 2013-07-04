<?php ; if($this->data['is_logged_in']){  ?>
	<?php $this->sidePanel(__('User Panel')); ?>
        <div id="user_info_panel">
					<div class="top">
						<strong><?php echo optLocale($this,'Hello :username!',array(':username'=>$this->data['username'])); ?></strong>
						<a href="<?php echo $this->data['url_messages']; ?>"<?php ; if($this->data['messages']){  ?> class="message"<?php  }  ?>></a>
					</div>
					<div class="mid">
						<div class="avatar">
							<img src="<?php echo $this->data['avatar']; ?>" alt="Avatar" />
						</div>
						<ul id="nav">
							<li><a href="<?php echo $this->data['url_account']; ?>"><p class="edit"><?php echo optLocale($this,"Edit profile"); ?></p></a></li>
							<li><a href="<?php echo $this->data['url_messages']; ?>"><p class="messages"><?php echo optLocale($this,"Messages"); ?></p></a></li>
							<li><a href="<?php echo $this->data['url_users']; ?>"><p class="members"><?php echo optLocale($this,"Users"); ?></p></a></li>
							<?php ; if($this->data['is_admin']){  ?><li><a href="<?php echo $this->data['ADDR_ADMIN']; ?>" class="long"><p class="admin"><?php echo optLocale($this,"Admin Panel"); ?></p></a></li><?php  }  ?>
						</ul>
					</div>
					<div class="bot">
						<p><a href="<?php echo $this->data['url_logout']; ?>" class="button"><?php echo optLocale($this,"Logout"); ?></a></p>
					<?php ; if($this->data['messages']){  ?>
						<p><a href="<?php echo $this->data['url_messages']; ?>"><?php echo $this->data['messages']; ?></a></p>
                    <?php  }  ?>
					</div>
				</div>
	<?php $this->sidePanel(); ?>
<?php  }else{  ?>
	<?php $this->sidePanel(__('Login')); ?>
	<div id="user_info_panel">
		<form method="post" action="<?php echo $this->data['URL_REQUEST']; ?>">
			<input type="text" name="username" id="username" class="valueSystem" value="<?php echo optLocale($this,"Username:"); ?>">
			<input type="password" name="password" id="password" class="valueSystem" value="<?php echo optLocale($this,"Password:"); ?>">
			<div>
				<input type="checkbox" name="remember_me" value="y" id="remember">
				<label for="remember"><?php echo optLocale($this,"Remember me"); ?></label>
			</div>
			<input type="submit" name="login" value="<?php echo optLocale($this,"Login"); ?>">
		</form>
		<?php ; if($this->data['enable_reg']){  ?><p><a href="<?php echo $this->data['url_register']; ?>"><?php echo optLocale($this,"Register"); ?></a></p><?php  }  ?>
		<p><a href="<?php echo $this->data['url_password']; ?>"><?php echo optLocale($this,"Forgot password"); ?></a></p>
	</div>
	<?php $this->sidePanel(); ?>
<?php  }  ?>