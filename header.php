<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8"><!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feedpress.me/lefreakcestchic"><!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
-->
    <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
    <!--
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script type="text/javascript" src="//use.typekit.net/gwo2lkq.js">
</script>
    <script type="text/javascript">
  try{Typekit.load();}catch(e){}
    </script><?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <ul class="topnav">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?><?php endif; ?>
    </ul>

    <div class="block header">
        <h1 class="ni"><a href="/" class="ni" title="Regresar al home"></a></h1>
        <ul class="locations">
          <li>
            <span class="circle"></span><a href="#">Antofagasta</a>
          </li>
          <li>
            <span class="circle"></span><a href="#">Viña del mar</a>
          </li>
          <li>
            <span class="circle"></span><a href="#">Santiago</a>
          </li>
        </ul>
        <ul class="mainnav">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?><?php endif; ?>
        </ul>
    </div>

    <div class="block header sticky">
        <ul class="topnav">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?><?php endif; ?>
        </ul>
        <h1 class="ni"><a href="/" class="ni" title="Regresar al home"></a></h1>

        <ul class="mainnav">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?><?php endif; ?>
        </ul>
    </div>

