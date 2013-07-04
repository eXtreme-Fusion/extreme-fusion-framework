<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->data['Theme']['Title']; ?></title>
	<meta charset="<?php echo optLocale($this,'html_charset'); ?>">
	<meta name="description" content="<?php echo $this->data['Theme']['Desc']; ?>">
	<meta name="keywords" content="<?php echo $this->data['Theme']['Keys']; ?>">
	
		<script> 
			var addr_images = "<?php echo $this->data['ADDR_IMAGES']; ?>";
			var addr_site = "<?php echo $this->data['ADDR_SITE']; ?>";
		</script>
	
	<link href="<?php echo $this->data['ADDR_FAVICON']; ?>" rel="shortcut icon">
	<link href="<?php echo $this->data['THEME_CSS']; ?>main.css" rel="stylesheet">
	<link href="<?php echo $this->data['THEME_CSS']; ?>styles.css" rel="stylesheet">
	<link href="<?php echo $this->data['THEME_CSS']; ?>jquery/jquery.uniform.min.css" rel="stylesheet">
	<link href="<?php echo $this->data['THEME_CSS']; ?>jquery/jquery.qtip.min.css" rel="stylesheet">
	<link href="<?php echo $this->data['ADDR_COMMON_CSS']; ?>grid.960.css" rel="stylesheet">
	<link href="<?php echo $this->data['ADDR_COMMON_CSS']; ?>jquery-ui.css" rel="stylesheet">
	<link href="<?php echo $this->data['ADDR_CSS']; ?>main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo $this->data['THEME_JS']; ?>html5shiv.min.js"></script>
	<![endif]-->
	<script src="<?php echo $this->data['ADDR_COMMON_JS']; ?>jquery.js"></script>
	<script src="<?php echo $this->data['ADDR_COMMON_JS']; ?>jquery-ui.js"></script>
	<script src="<?php echo $this->data['THEME_JS']; ?>jquery.main.js"></script>
	<script src="<?php echo $this->data['THEME_JS']; ?>jquery.tools.min.js"></script>
	<script src="<?php echo $this->data['THEME_JS']; ?>jquery.uniform.min.js"></script>
	<script src="<?php echo $this->data['THEME_JS']; ?>jquery.qtip.min.js"></script>
	<script src="<?php echo $this->data['ADDR_COMMON_JS']; ?>common.js"></script>
	<?php echo $this->data['Theme']['Tags']; ?>
</head>
<body>
