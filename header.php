<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&family=M+PLUS+1p:wght@400;700&display=swap" rel="stylesheet">
	<title><?php echo get_bloginfo('name'); ?></title>
	<meta name="description" content="Hi! My name is Kyle Willits. I'm a web developer and teacher in Japan and this is my website." />
	
	<?php wp_head(); ?>
</head>
<!-- Hey! I see you looking at this code! This is an entirely custom Wordpress theme, along with some added functionality to Wordpress itself. You can request the full theme from me using any of the listed social media contacts if you want! -->
<?php
	if($post){
		echo '<body id="page-'.$post->post_name.'">';
	}else{
		echo '<body id="page-404">';
	}
?>