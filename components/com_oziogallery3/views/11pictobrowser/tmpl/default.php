<?php
/**
* This file is part of Ozio Gallery 3.
*
* Ozio Gallery 3 is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* (at your option) any later version.
*
* Foobar is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*
* @copyright Copyright (C) 2010 Open Source Solutions S.L.U. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see RT-LICENSE.php
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
	<div class="componentheading<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>
<?php if ( $this->params->get('showintrotext')) : ?>
<table width="100%" cellpadding="4" cellspacing="0" border="0" align="center" class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
<tr>
	<td valign="top" class="contentdescription<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
		<?php echo $this->escape($this->params->get('introtext')); ?>	
	</td>
</tr>
</table>
<?php endif; ?>
   <table align="<?php echo $this->table ?>">
   <tr>  
		<td align="<?php echo $this->table ?>">
				<div id="oziopictoflickr">Get the flash player here: http://www.adobe.com/flashplayer</div>
				<script type="text/javascript" src="<?php echo JURI::root() ?>components/com_oziogallery3/assets/js/15/swfobject.js"></script>
				<script type="text/javascript"> 
				var so = new SWFObject("<?php echo JURI::root() ?>components/com_oziogallery3/skin/pictobrowser/pictobrowser.swf", "PictoBrowser", "<?php echo $this->larghezza ?>", "<?php echo $this->altezza ?>", "8", "#<?php echo $this->bg?>"); 
					so.addVariable("source", "<?php echo $this->source ?>");
<?php if ($this->source =='sets'): ?>
					so.addVariable("names", "<?php echo $this->set_name ?>");
					so.addVariable("userName", "<?php echo $this->user_name ?>"); 
					so.addVariable("userId", "<?php echo $this->user_id ?>"); 
					so.addVariable("ids", "<?php echo $this->set_id ?>");					
<?php endif; ?>
<?php if ($this->source =='keyword'): ?>
					so.addVariable("names", "<?php echo $this->gname ?>");
					so.addVariable("userName", "<?php echo $this->user_name ?>"); 
					so.addVariable("userId", "<?php echo $this->user_id ?>"); 
					so.addVariable("ids", "<?php echo $this->gname ?>");	
			<?php endif; ?>
<?php if ($this->source =='groups'): ?>
					so.addVariable("names", "<?php echo $this->group_name ?>");
					so.addVariable("userName", "<?php echo $this->user_name ?>"); 
					so.addVariable("userId", "<?php echo $this->user_id ?>"); 
					so.addVariable("ids", "<?php echo $this->group_id ?>");	
<?php endif; ?>
					so.addVariable("titles", "<?php echo $this->titles ?>"); 
					so.addVariable("displayNotes", "<?php echo $this->note ?>"); 
					so.addVariable("thumbAutoHide", "<?php echo $this->autohide ?>"); 
					so.addVariable("imageSize", "<?php echo $this->imagesize?>"); 
					so.addVariable("vAlign", "<?php echo $this->valign?>"); 
					so.addVariable("displayZoom", "<?php echo $this->zoom?>");
					so.addVariable("vertOffset", "<?php echo $this->offset?>"); 
					so.addVariable("colorHexVar", "<?php echo $this->bg?>"); 
					so.addVariable("initialScale", "<?php echo $this->scale?>"); 
					so.addVariable("bgAlpha", "<?php echo $this->bgalpha?>"); 
					so.write("oziopictoflickr");	
				</script>		
		</td>
	</tr>
</table>
<?php if ( $this->debug == 1 ) : ?>   
	<table class="oziopre"><tr><td>   
		<?php echo $this->oziodebug ?> 
	</td></tr></table> 
<?php endif; ?>	
<?php require(JPATH_COMPONENT_ADMINISTRATOR.DS."assets".DS."css".DS."ozio.css");  ?> 