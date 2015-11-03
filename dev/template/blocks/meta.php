<!DOCTYPE html>
<html lang="<?php echo $meta_lang;?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<link rel="alternate" hreflang="x-default" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/en'.$dir;?>" />
	<link rel="alternate" hreflang="ru" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$dir;?>" />
<!-- build:remove -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='/libs/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<link href='/css/jquery.fancybox.css' rel='stylesheet' type='text/css'>
<!-- /build -->
<!--favicons-->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
<!--favicons-->
<!-- build:css inline ../../../dev/css/meta.min.css -->
	<link href="/css/meta.css" rel="stylesheet">
<!-- /build -->
<!-- build:remove -->
	<link href="/css/style.css" rel="stylesheet">
<!-- /build -->
<!-- build:template
	<script>
	(function(u){function loadCSS(e,t,n){"use strict";function r(){for(var t,i=0;i<d.length;i++)d[i].href&&d[i].href.indexOf(e)>-1&&(t=!0);t?o.media=n||"all":setTimeout(r)}var o=window.document.createElement("link"),i=t||window.document.getElementsByTagName("script")[0],d=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",i.parentNode.insertBefore(o,i),r(),o}for(var i in u){loadCSS(u[i]);}}(['http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic']));
	</script>
<!-- /build -->
<script>var lang="<?php echo $meta_lang;?>";</script>
<script>function menu(){document.getElementById('cd-primary-nav').classList.toggle('nav-is-visible');document.getElementById('cd-main-header').classList.toggle('nav-is-visible');return false;}</script>
</head>
<?php if ($dir=='/') { ?>
<body itemscope itemtype="http://schema.org/Hostel">
<?php } else { ?>
<body>
<?php } ?>