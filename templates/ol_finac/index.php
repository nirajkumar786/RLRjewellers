<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2015 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,social.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">

<div class="mx-base">
<div id="mx-top-header" class="clearfix">
<div class="mx-base">
<?php 
$sboost->addModules('top-menu'); // module top-menu
?>
<?php $sboost->addFeatures('social'); //social ?>
</div>
<div class="clearfix"></div>	
<?php 
$sboost->addFeatures('logo');//Logo
?>
<?php 
$sboost->addModules('search'); // search
$sboost->addModules('banner'); // banner
?>
</div>

<div id="mx-header">
<div class="mx-base">
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
</div>
</div>

<div id="mx-mainbase">
<?php if ($sboost->showSlideItem()): ?>
<?php include 'slider/slider.php'; ?> 
<?php endif; ?>
<div id="tophead">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>
<div id="wrapper">
<?php
$sboost->addModules("header"); //position header
?>

<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>
</div>
</div> 
</div>


<div id="map">
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>
<?php if ($this->countModules( 'extra' )) : ?>
<div id="extra">
<?php $sboost->addModules('extra', 'mx_xhtml'); //extra  ?>
</div>
<?php endif; ?> 

<?php if ($this->countModules( 'bottom1 or bottom2 or bottom3 or bottom4 or bottom5 or bottom6' )) : ?>
<div id="bottsite" class="clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>
<?php endif; ?> 
<div id="bottomspo">
<!--Start Footer-->
<?php $sboost->addModules('bottom', 'mx_xhtml'); //bottom  ?>
<div id="mx-footer" class="mx-base">
<div id="mx-bft" class="clearfix">
<?php $sboost->addFeatures('colors');//Template colors ?>
<div class="cp">
<?php $sboost->addFeatures('copyright,designed')  ?>					
</div>
<?php
$sboost->addFeatures('gotop');		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->
</div>
</div>
</div>


<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>