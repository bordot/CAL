<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width">
    <meta itemprop="isFamilyFriendly" content="True">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
 <link rel="stylesheet" id="style" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
  <link rel="stylesheet" id="style" href="<?php echo get_template_directory_uri(); ?>/composer.css" media="all">
         <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
 
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
  
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//a.optnmstr.com">
    <link rel="dns-prefetch" href="//s.w.org">
   
<link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet"> 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header clear" role="banner">
    <div class="site-message-wrap">
        <a href="faq/" id="site-message" class="loaded">
            <div class="container">
                <div class="text"><span class="text1">Do you have questions about Class Action Links? Check out our new FAQ page!</span><span class="text2">Have questions about Class Action Links?</span></div>
            </div>
        </a>
    </div>
    <div class="container top-hat">
        <div class="links mobile no_translate"> <a href="signup/">Create an Account</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login/">Sign in</a></div>
        <div class="livesearchwrap">
            <div id="search-2" class="widget_search">search
                <form class="search" method="get" action="" role="search"> <input class="search-input" name="s" placeholder="To search, type and hit enter." type="search"> <button class="search-submit" type="submit" role="button">Search</button></form>
            </div>
        </div>
        <div class="gsearch-wrap">
            <style>
                .gsearch-wrap button {
                		    display: none;
                	    }
            </style>
            <form class="search" method="get" action="" role="search"> <input class="search-input" name="s" placeholder="To search, type and hit enter." type="search"> <button class="search-submit" type="submit" role="button">Search</button></form>
        </div>
        <div class="social-wrap no_translate"> <a href="https://www.facebook.com/#" class="social-ico headerfb"><i class="fab fa-facebook"></i></a> <a href="https://twitter.com/#" class="social-ico headert"><i class="fab fa-twitter-square"></i></a> <a href="https://plus.google.com/#" class="social-ico"><i class="fab fa-google-plus-square"></i></a>            <a href="http://www.linkedin.com/#" class="social-ico"><i class="fab fa-linkedin"></i></a></div>
        <div class="links no_translate desktop"> <a href="signup/">Create an Account</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login/">Sign in</a></div>
    </div>
    <div class="container header-wrap">
        <div class="section group" itemscope="" itemprop="sourceOrganization" itemtype="http://schema.org/Organization">
            <div class="col span_5_of_12">
                <div class="logo" itemprop="name"> <a href="<?php echo get_home_url(); ?>" itemprop="url"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img" itemprop="logo" width="460"> </a></div>
            </div>
            <div class="col span_7_of_12">
                <div class="google-letterboard-ad">
                   ads
                    </script>
                </div>
            </div>
        </div>
        <nav class="nav no_translate" role="navigation">
            <div id="megaMenu" class="megaMenuContainer megaResponsive megaResponsiveToggle wpmega-withjs megaMenuOnHover megaFullWidth megaMenuHorizontal wpmega-noconflict megaMinimizeResiduals megaResetStyles megaMenu-withjs">
              						<?php html5blank_nav(); ?>
</div>
           
            <div class="menu-left-tri"></div>
            <div class="menu-right-tri"></div>
        </nav>
    </div>
</header>

<div class="container main-wrap">
    <div id="cta-float" style="top: 222px;"></div>
    <script type="text/javascript">
        window.onload = function() {
        
          function getScrollTop() {
            if (typeof window.pageYOffset !== 'undefined' ) {
              // Most browsers
              return window.pageYOffset;
            }
        
            var d = document.documentElement;
            if (d.clientHeight) {
              // IE in standards mode
              return d.scrollTop;
            }
        
            // IE in quirks mode
            return document.body.scrollTop;
          }
        
          window.onscroll = function() {
            var box = document.getElementById('cta-float'),
                scroll = getScrollTop();
        
            if (scroll <= 222) {
              box.style.top = "222px";
            }
            else {
              box.style.top = (scroll + -150) + "px";
            }
          };
        
        };
    </script>
    <section role="main">
