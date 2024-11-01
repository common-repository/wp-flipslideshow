<?php
function flp_get_def_settings()
{
	$flp_settings = array('bannerWidth' => '710',
			'bannerHeight' => '410',
			'auto_slidetime' => '5',
			'ShowHandOnButtons' => 'show',
			'auto_slide' => 'show',
			'rotation_type' => 'vertical',
			'picture_scaling' => 'yes',
			'bgcolor' => 'FF0000',
			'title_autohide' => 'hide',
			'control_status' => 'show',
			'scrollbtn_width' => '30',
			'scrollbtn_arowsize' => '16',
			'scrollbtn_arowcolor' => '000000',
			'menu_height' => '35',
			'menu_spacing' => '2',
			'menuItem_number' => '5',
			'menuTranition_time' => '0.6',
			'item_margin' => '10',
			'item_height' => '220',
			'item_round' => '15',
			'item_spacing' => '20',
			'item_number' => '3',
			'item_number' => '3',
			'item_borderSize' => '2',
			'item_borderColor' => 'FF0000',
			'item_backgroundColor' => 'FF0000',
			'item_titlePriceMoveTime' => '1.5',
			'control_panelHeight' => '43',
			'control_panelWidth' => '160',
			'control_panelPosition' => 'BR',
			'control_buttonBackgroundColor' => 'FFFFFF',
			'control_buttonActiveBackgroundColor' => 'CCCCCC',
			'control_buttonSize' => '30',
			'control_buttonSpacing' => '12',
			'control_graphicSize' => '18',
			'control_statusLineSize' => '5',
			'control_statusLineColor' => '000000',
			'wmode' => 'transparent',
			'name_activesize' => '13',
			'name_inactivesize' => '13',
			'name_activecolor' => 'FFFFFF',
			'name_inactivecolor' => 'CCCCCC',
			'target' => '_self',
			'title_size' => '15',
			'title_color' => 'FFFFFF',
			'price_size' => '15',
			'price_color' => 'FFFFFF',
			'desc_size' => '12',
			'desc_length' => '40',
			'desc_color' => 'FFFFFF'	
			);
	return $flp_settings;
}
function __get_flp_xml_settings()
{
	//FLP_PLUGIN_URL.'/price_images/'.$ops['pricebtn_img']
	$ops = get_option('flp_settings', array());
	
	$xml_settings = '<baseDef
		ShowHandOnButtons="'.trim((($ops['ShowHandOnButtons'] == 'show') ? 'true' : 'false')).'"
		ControlStatus="'.trim($ops['control_status']).'"
		AutoSlideTime="'.trim($ops['auto_slidetime']).'"
		PlayPauseVisible="true"
		AutoSlide="'.trim((($ops['auto_slide'] == 'show') ? 'true' : 'false')).'"
		TitleAutohide="'.trim((($ops['title_autohide'] == 'show') ? 'true' : 'false')).'"
		
		RotationType="'.trim($ops['rotation_type']).'"
		PictureScaling="'.trim($ops['picture_scaling']).'"
		BackgroundColor="0x'.trim($ops['bgcolor']).'"

		

		ScrollButtonWidth="'.trim($ops['scrollbtn_width']).'"
		ScrollButtonArrowSize="'.trim($ops['scrollbtn_arowsize']).'"
		
		ScrollButtonArrowColor="0x'.trim($ops['scrollbtn_arowcolor']).'"
		MenuHeight="'.trim($ops['menu_height']).'"
		MenuSpacing="'.trim($ops['menu_spacing']).'"
		MenuItemsNumber="'.trim($ops['menuItem_number']).'"
		MenuTransitionTime="'.trim($ops['menuTranition_time']).'"
		
		ContainerBorderSize="5"
		ItemMargin="'.trim($ops['item_margin']).'"
		ItemHeight="'.trim($ops['item_height']).'"
		ItemRound="'.trim($ops['item_round']).'"
		ItemSpacing="'.trim($ops['item_spacing']).'"
		
		ItemNumber="'.trim($ops['item_number']).'"
		ItemBorderSize="'.trim($ops['item_borderSize']).'"
		ItemBorderColor="0x'.trim($ops['item_borderColor']).'"
		ItemBackgroundColor="0x'.trim($ops['item_backgroundColor']).'"
		ItemMoveTimer="1.5"
		
		ItemDelayTimer="100"
		ItemTitleBackgroundColor="0x666666"
		ItemTitleBackgroundAlpha="75"
		ItemPriceBackgroundColor="0x666666"
		ItemPriceBackgroundAlpha="75"
		
		ItemTitlePriceMoveTime="'.trim($ops['item_titlePriceMoveTime']).'"
		ControlPanelHeight="'.trim($ops['control_panelHeight']).'"
		ControlPanelWidth="'.trim($ops['control_panelWidth']).'"
		ControlPanelPosition="'.trim($ops['control_panelPosition']).'"
		ControlButtonBackgroundColor="0x'.trim($ops['control_buttonBackgroundColor']).'"
		
		ControlButtonActiveBackgroundColor="0x'.trim($ops['control_buttonActiveBackgroundColor']).'"
		ControlButtonSize="'.trim($ops['control_buttonSize']).'"
		ControlButtonSpacing="'.trim($ops['control_buttonSpacing']).'"
		ControlGraphicSize="'.trim($ops['control_graphicSize']).'"
		ControlStatusLineSize="'.trim($ops['control_statusLineSize']).'"
		
		ControlStatusLineColor="0x'.trim($ops['control_statusLineColor']).'">
		
	</baseDef>';
	return $xml_settings;
}
function flp_get_album_dir($album_id)
{
	global $gflp;
	$album_dir = FLP_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function flp_get_album_url($album_id)
{
	global $gflp;
	$album_url = FLP_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function flp_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_flp_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_flp_gallery($vars);
	return $ret;
}
function display_flp_gallery($vars)
{
	global $wpdb, $gflp;
	$ops = get_option('flp_settings', array());
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "flp_all.xml";
	}
	//die(FLP_PLUGIN_XML_DIR . '/' . $xml_filename);


	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}flp_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gflp->flp_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
				$album_dir = flp_get_album_url($album['album_id']);//FLP_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
				$categories .= '
	<menu>
	<name activesize="'.$ops['name_activesize'].'" inactivesize="'.$ops['name_inactivesize'].'" activecolor="0x'.$ops['name_activecolor'].'" inactivecolor="0x'.$ops['name_inactivecolor'].'"><![CDATA['.$album['name'].']]>	</name>';
				foreach($images as $key => $img)
				{
					if( $img['status'] == 0 ) continue;
					
					$categories .= '
	<item url="'.$img['link'].'" target="'.trim($ops['target']).'"  pic="'.$album_dir."/big/".$img['image'].'" >

		<title size="'.trim($ops['title_size']).'" color="0x'.trim($ops['title_color']).'"><![CDATA['.$img['title'].']]></title>';
if ($img['price'] > 0) {
$categories .= '
		<price size="'.trim($ops['price_size']).'" color="0x'.trim($ops['price_color']).'"><![CDATA['.$img['price'].']]></price>';
}
$categories .= '
		<desc size="'.trim($ops['desc_size']).'" color="0x'.trim($ops['desc_color']).'"><![CDATA['.strip_tags($img['description']).']]></desc>
	</item>';
				}
				$categories .= '
			</menu>';
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}flp_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
			$categories .= '<menu>
	<name activesize="'.$ops['name_activesize'].'" inactivesize="'.$ops['name_inactivesize'].'" activecolor="0x'.$ops['name_activecolor'].'" inactivecolor="0x'.$ops['name_inactivecolor'].'"><![CDATA[All Albums]]>	</name>';

			foreach($images as $key => $img)
			{
				$album = $gflp->flp_get_album($img['category_id']);
				$album_dir = flp_get_album_url($album['album_id']);//FLP_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
				if( $img['status'] == 0 ) continue;
				
				$categories .= '
	<item url="'.$img['link'].'" target="'.trim($ops['target']).'"  pic="'.$album_dir."/big/".$img['image'].'" >

		<title size="'.trim($ops['title_size']).'" color="0x'.trim($ops['title_color']).'"><![CDATA['.$img['title'].']]></title>';
if ($img['price'] > 0) {
$categories .= '
		<price size="'.trim($ops['price_size']).'" color="0x'.trim($ops['price_color']).'"><![CDATA['.$img['price'].']]></price>';
}
$categories .= '
		<desc size="'.trim($ops['desc_size']).'" color="0x'.trim($ops['desc_color']).'"><![CDATA['.strip_tags($img['description']).']]></desc>
	</item>';
			}
			$categories .= '
			</menu>';
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}flp_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gflp->flp_get_album_images($album['album_id']);
			$album_dir = flp_get_album_url($album['album_id']);//FLP_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
				$categories .= '
	<menu>
	<name activesize="'.$ops['name_activesize'].'" inactivesize="'.$ops['name_inactivesize'].'" activecolor="0x'.$ops['name_activecolor'].'" inactivecolor="0x'.$ops['name_inactivecolor'].'"><![CDATA['.$album['name'].']]>	</name>';
				foreach($images as $key => $img)
				{
					if($img['status'] == 0 ) continue;
					
					$categories .= '
	<item url="'.$img['link'].'" target="'.trim($ops['target']).'"  pic="'.$album_dir."/big/".$img['image'].'" >

		<title size="'.trim($ops['title_size']).'" color="0x'.trim($ops['title_color']).'"><![CDATA['.$img['title'].']]></title>';
		if ($img['price'] > 0) {
$categories .= '
		<price size="'.trim($ops['price_size']).'" color="0x'.trim($ops['price_color']).'"><![CDATA['.$img['price'].']]></price>';
}
		$categories .= '
		<desc size="'.trim($ops['desc_size']).'" color="0x'.trim($ops['desc_color']).'"><![CDATA['.strip_tags($img['description']).']]></desc>
	</item>';
				}
				$categories .= '
			</menu>';
			}
		}
		//$xml_filename = "flp_all.xml";
	}
	
	$xml_tpl = __get_flp_xml_template();
	$settings = __get_flp_xml_settings();
	$xml = str_replace(array('{settings}', '{categories}'), 
						array($settings, $categories), $xml_tpl);
	//write new xml file
	$fh = fopen(FLP_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(FLP_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		$fh = fopen(FLP_PLUGIN_XML_DIR . '/' . $xml_filename, 'r');
		$xml = fread($fh, filesize(FLP_PLUGIN_XML_DIR . '/' . $xml_filename));
		fclose($fh);
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = "
		<script language=\"javascript\">AC_FL_RunContent = 0;</script>
<script src=\"".FLP_PLUGIN_URL."/js/AC_RunActiveContent.js\" language=\"javascript\"></script>

		<script language=\"javascript\"> 
	if (AC_FL_RunContent == 0) {
		alert(\"This page requires AC_RunActiveContent.js.\");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '".$ops['bannerWidth']."',
			'height', '".$ops['bannerHeight']."',
			'src', '".FLP_PLUGIN_URL."/js/wp_flipslideshow',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', '".$ops['wmode']."',
			'devicefont', 'false',
			'id', 'xmlswf_vmflp',
			'bgcolor', '".$ops['bgcolor']."',
			'name', 'xmlswf_vmflp',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', '".FLP_PLUGIN_URL."/js/wp_flipslideshow',
			'salign', '',
			'flashVars','XMLFile=".FLP_PLUGIN_URL."/xml/$xml_filename'
			); //end AC code
	}
</script>
";
//echo FLP_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return $ret_str;
	}
	return true;
}
function __get_flp_xml_template()
{
	$xml_tpl = '<?xml version="1.0" encoding="utf-8" ?>

	<slideshow >
	{settings}
	{categories}
	</slideshow>';
	return $xml_tpl;
}
?>