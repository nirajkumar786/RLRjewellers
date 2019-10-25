<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_search
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="searchmenu">
<form action="<?php echo JRoute::_('index.php');?>" method="post" id="searchform">
	<div  class="mod-search<?php echo $moduleclass_sfx ?> input-append">

		<?php
			$output = '<input name="searchword" id="navs" maxlength="'.$maxlength.'"   type="text" size="'.$width.'" value="'.$text.'"  onblur="if (this.value==\'\') this.value=\''.$text.'\';" onfocus="if (this.value==\''.$text.'\') this.value=\'\';" />';

			if ($button) :
				$button = '<input type="submit" value="" id="searchsubmit">';
			endif;

			switch ($button_pos) :
				case 'right' :
					$output = $output.$button;
					break;

				case 'left' :
				default :
					$output = $button.$output;
					break;
			endswitch;

			echo $output;
		?>
	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	
	</div>
</form>
</div>