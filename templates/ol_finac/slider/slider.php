<?php

defined('_JEXEC') or die;
$slide = $this->params->get('slides');
$base_url = $this->baseurl;
$cacheFolder = JURI::base(true).'/cache/';
$sitePath = JURI::base(true).'/templates/ol_finac/slider/';
$document = JFactory::getDocument(); 


$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$bannerTime	     = $this->params->get('bannerTime');
$slider_items    = $this->params->get('slider_items'); 
$socialCode         = $this->params->get ('socialCode');
$sliders_img            = $this->params->get('sliders_img');
$sliders_title            = $this->params->get('sliders_title');
$ol_target_url       = $this->params->get('ol_target_url');
$ol_target           = $this->params->get('ol_target');

$document->addScript($sitePath.'assets/js/modernizr.custom.js');
$document->addStyleSheet($sitePath.'assets/css/style.css');

?>

<div id="vs-container" class="vs-container">
<header class="vs-header">
<ul class="vs-nav">
<?php foreach ($slider_items as $item) : ?>
<li></li>
<?php endforeach; ?>
</ul>
</header>
<div class="vs-wrapper">
<?php foreach ($slider_items as $item) : ?>
<section id="section-<?php echo $item->sliders_title; ?>">
<div class="vs-content"><img src="<?php echo $base_url; ?>/<?php echo $item->sliders_img; ?>"/>
<?php if (!empty($item->sliders_title)) : ?><div class="descript"><h1><?php echo $item->sliders_title; ?></h1></div><?php endif;?>
</div>
</section>
<?php endforeach; ?>
</div>
</div>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/assets/js/classie.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/assets/js/hammer.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/assets/js/main.js"></script>

<div class="clear"></div>       

