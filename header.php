<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!--PCとスマホ--->
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<!---title---->
			<title><?php bloginfo('name'); ?></title>
			<meta name="description" content="<?php bloginfo('description'); ?>" />
			<?php wp_head(); ?>
		<!---CSS---->
			<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" />	
		<!---fontAwesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

<!--body--->
<body <?php body_class(); ?>>
	
<!--ヘッダー-->
<header class="header">
			<div class="pc-header"><?php dynamic_sidebar('PCヘッダー'); ?></div>
			<div class="se-header"><?php dynamic_sidebar('SEヘッダー'); ?></div>
		<?php wp_head(); ?>
</header>
<!--ヘッダーここまで-->