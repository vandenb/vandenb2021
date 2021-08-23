<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122665771-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122665771-1');
</script>



<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php if ( is_home() ) { ?>

<?php } ?>
<link rel="stylesheet" href="https://use.typekit.net/moy0ief.css">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>



  <div class="container">
        <section class="headersection">
        
            <div class="headercontainer">
                <div class="mastheadcolumn">
                        <h1 class="masthead">
                                <a href="/" class="blacklink"><span class="vdb">vandenb.com //</span></a>
                                <a href="/"><span class="walter">Walter&nbsp;van&nbsp;den&nbsp;Berg</span></a>
                        </h1>
                        <div class="about">
                                <p><?php dynamic_sidebar( 'sidebar-1' ); ?><!-- Inhoud staat in widget 'over' --></p>
                            </div>
                </div>
                <div class="metacolumn">
                        <div class="metalist">
							<?php dynamic_sidebar( 'sidebar-2' ); ?><!-- Inhoud staat in widget 'metalinks' -->
                            
                        </div>
                    </div>
            </div>
    
        </section>

        <section class="tophrsection">
            <div class="columns">
                <div class="column">
                        <hr class="is-standard-hr"> 
                </div>
            </div>
        </section>



