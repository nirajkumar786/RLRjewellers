<?php
/*---------------------------------------------------------------
# Package - Sboost Framework  
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2015 olwebdesign.com. All Rights Reserved. 
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
if($this->getParam('jquery',0)) {
	$this->addJQuery();
}