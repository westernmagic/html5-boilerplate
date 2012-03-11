<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]>
	<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" >
<![endif]-->
<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8" lang="en" >
<![endif]-->
<!--[if IE 8]>
	<html class="no-js lt-ie9" lang="en" >
<![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
	<html class="no-js" lang="en" >
<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		
		<!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>
			<?php echo $title_for_layout ; ?>
		</title>
		<meta name="description" content="" />
		<meta name="author" content="" />
		
		<!-- Mobile viewport optimized: h5bp.com/viewport -->
		<meta name="viewport" content="width=device-width" />
		
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
		
		<?php
			//echo $this->AssetCompress->includeCss() ;
			echo $this->Html->css( array( '/Html5/css/normalize' , 'cake.generic' , 'style' , '/GithubButtons/css/gh-buttons' , '/Html5/css/helper_printer' ) ) ;
		?>
		
		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
		
		<!-- All JavaScript at the bottom, except this Modernizr build. Modernizr enables HTML5 elements & feature detects for optimal performance. Create your own custom Modernizr build: www.modernizr.com/download/ -->
		<?php
			echo $this->Html->script( '/Html5/js/libs/modernizr-2.5.3.min.js' ) ;
			echo $this->Html->meta(' icon' );
	
			echo $this->fetch( 'meta' ) ;
			echo $this->fetch( 'css' ) ;
		?>
	</head>
	
	<body>
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7]>
			<p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
		<![endif]-->

		<header>
		
		</header>
		<div role="main">
			<?php
				echo $this->Session->flash() ;
				echo $this->Session->flash( 'auth' ) ;
			?>
			<?php echo $this->fetch( 'content' ) ; ?>
		</div>
		<footer>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</footer>
		<?php echo $this->element( 'sql_dump' ) ; ?>
		
		<!-- JavaScript at the bottom for fast page loading -->
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write( '<?php echo str_replace( '</script>' , '<\/script>' , $this->Html->script( '/Html5/js/libs/jquery-1.7.1.min.js' ) ); ?>' ) ;
		</script>
		
		<!-- scripts concatenated and minified via build script -->
		<?php echo $this->Html->script( array( '/Html5/js/plugins.js' , '/Html5/js/script.js' ) ) ; ?>
		<!-- end scripts -->
		
		<?php
			//echo $this->AssetCompress->includeJs() ;
			echo $this->fetch( 'script' ) ;
			echo $this->Js->writeBuffer() ;
		?>
		
		<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. mathiasbynens.be/notes/async-analytics-snippet -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
