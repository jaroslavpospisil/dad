<?php 
  $i =  '';
  
  if(isset($_REQUEST['i'])){  
      if(!file_exists('pages/'.$i.'.php')) 
      { 
        $i =  '404'; 
        header("HTTP/1.0 404 Not Found");
      }
  }else{
    $i =  'home';
  }
  
   
    $url =  'http://localhost/japo/dad';
?>









<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> 
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>DAD - Amatérský divadelní spolek</title>
		<meta name='description' content='DAD - amatérský divadelní spolek'/>
		<meta name='keywords' content='grayscale images demo, grayscale internet explorer 11, grayscale image tutorial'/>
		<link rel="shortcut icon" type="image/png" href="favicon.ico">
		<!--[if IE]><link rel='shortcut icon' href='favicon.ico' type='text/x-icon'/><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link href="<?php echo $url; ?>/normalize.css" rel="stylesheet" media="screen">
		<link href="<?php echo $url; ?>/style.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?php echo $url; ?>/jplayer/lib/jquery.min.js"></script>
    <link href="<?php echo $url; ?>/jplayer/dist/skin/blue.monday/css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo $url; ?>/jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/jplayer/dist/add-on/jplayer.playlist.min.js"></script>

	</head>
	<body>

		<div class="container">

      
    <?php 
     include('pages/'.$i.'.php');
    ?>
    
			
		</div>
    	<div class="footer"> &copy; Jarynus 2015 <br /><a href="mailto:japooos@gmail.com" title="japooos@gmail.com">japooos@gmail.com</a></div>
	</body>
</html>

		

 
