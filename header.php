<!doctype html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
  <meta name="keywords" content="KJSMJS" />
  <meta name="description" content="KJSMJS" />

  <title>KJSMJS</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<?php $wrapper_classes  = 'site-header';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';?>

<body >
<header id="main-header" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
  <?php //include (TEMPLATEPATH . '/navigation.php'); 
   get_template_part( 'navigation' ); 
  ?>
	</header>

  
