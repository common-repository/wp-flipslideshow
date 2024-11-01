<?php
global $wpdb, $gflp;
$ops = get_option('flp_settings', array());
//$ops = array_merge($flp_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_flp_settings" />
		<table>
				<tr>
			<td title="<?php _e('slideshow width (px)'); ?>"><?php _e('Slider width (px)'); ?></td>
			<td><input type="text" name="settings[bannerWidth]"  value="<?php print @$ops['bannerWidth']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Slideshow height (px)'); ?>"><?php _e('Slider height (px)'); ?></td>
			<td><input type="text" name="settings[bannerHeight]"  value="<?php print @$ops['bannerHeight']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Auto Slidetime.'); ?>"><?php _e('Auto Slidetime'); ?></td>
			<td><input type="text" name="settings[auto_slidetime]"  value="<?php print @$ops['auto_slidetime']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Auto play'); ?>"><?php _e('Auto Play'); ?></td>
			<td>
				<select name="settings[ShowHandOnButtons]">
					<option value="show" <?php print (@$ops['ShowHandOnButtons'] == 'show') ? 'selected' : ''; ?>><?php _e('Yes'); ?></option>
					<option value="hide" <?php print (@$ops['ShowHandOnButtons'] == 'hide') ? 'selected' : ''; ?>><?php _e('No'); ?></option>
				</select>
			</td>
		</tr>

		<tr>
			<td title="<?php _e('Auto slide True/False'); ?>"><?php _e('Auto slide'); ?></td>
			<td>
				<select name="settings[auto_slide]">
					<option value="show" <?php print (@$ops['auto_slide'] == 'show') ? 'selected' : ''; ?>><?php _e('Enable'); ?></option>
					<option value="hide" <?php print (@$ops['auto_slide'] == 'hide') ? 'selected' : ''; ?>><?php _e('Disable'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Rotation Type'); ?>"><?php _e('Rotation Type'); ?></td>
			<td>
				<select name="settings[rotation_type]">
					<option value="vertical" <?php print (@$ops['rotation_type'] == 'vertical') ? 'selected' : ''; ?>><?php _e('vertical'); ?></option>
					<option value="horizontal" <?php print (@$ops['rotation_type'] == 'horizontal') ? 'selected' : ''; ?>><?php _e('Horizontal'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Picture Scaling'); ?>"><?php _e('Picture Scaling'); ?></td>
			<td>
				<select name="settings[picture_scaling]">
					<option value="yes" <?php print (@$ops['picture_scaling'] == 'yes') ? 'selected' : ''; ?>><?php _e('Yes'); ?></option>
					<option value="no" <?php print (@$ops['picture_scaling'] == 'no') ? 'selected' : ''; ?>><?php _e('No'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('For example: #ffffff. Slect wmode transperant if you dont want background color'); ?>"><?php _e('Background color'); ?></td>
			<td><input type="text" name="settings[bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Title Autohide'); ?>"><?php _e('Auto hide title'); ?></td>
			<td>
				<select name="settings[title_autohide]">
					<option value="show" <?php print (@$ops['title_autohide'] == 'show') ? 'selected' : ''; ?>><?php _e('Yes'); ?></option>
					<option value="hide" <?php print (@$ops['title_autohide'] == 'hide') ? 'selected' : ''; ?>><?php _e('No'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Show/Hide Play/Pause, next/previous buttons.'); ?>"><?php _e('Controls'); ?></td>
			<td>
				<select name="settings[control_status]">
					<option value="show" <?php print (@$ops['control_status'] == 'show') ? 'selected' : ''; ?>><?php _e('Show'); ?></option>
					<option value="hide" <?php print (@$ops['control_status'] == 'hide') ? 'selected' : ''; ?>><?php _e('Hide'); ?></option>
					<option value="autohide" <?php print (@$ops['control_status'] == 'autohide') ? 'selected' : ''; ?>><?php _e('Autohide'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Scroll Button Width'); ?>"><?php _e('Scroll Button Width'); ?></td>
			<td><input type="text" name="settings[scrollbtn_width]"  value="<?php print @$ops['scrollbtn_width']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Scroll Button Arrow Size'); ?>"><?php _e('Scroll Button Arrow Size'); ?></td>
			<td><input type="text" name="settings[scrollbtn_arowsize]"  value="<?php print @$ops['scrollbtn_arowsize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Scroll Button Arrow Color.'); ?>"><?php _e('Scroll Button Arrow Color'); ?></td>
			<td><input type="text" name="settings[scrollbtn_arowcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['scrollbtn_arowcolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Height of Menu'); ?>"><?php _e('Menu Height'); ?></td>
			<td><input type="text" name="settings[menu_height]"  value="<?php print @$ops['menu_height']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Menu Spacing.'); ?>"><?php _e('Menu Spacing'); ?></td>
			<td><input type="text" name="settings[menu_spacing]"  value="<?php print @$ops['menu_spacing']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Menu Item Number'); ?>"><?php _e('Menu Item Number'); ?></td>
			<td><input type="text" name="settings[menuItem_number]"  value="<?php print @$ops['menuItem_number']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Menu Tranition Time'); ?>"><?php _e('Menu Tranition Time'); ?></td>
			<td>
				<select name="settings[menuTranition_time]">
					<option value="0" <?php print (@$ops['menuTranition_time'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['menuTranition_time'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['menuTranition_time'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['menuTranition_time'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['menuTranition_time'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['menuTranition_time'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['menuTranition_time'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['menuTranition_time'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['menuTranition_time'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['menuTranition_time'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['menuTranition_time'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Item Margin.'); ?>"><?php _e('Item Margin'); ?></td>
			<td><input type="text" name="settings[item_margin]"  value="<?php print @$ops['item_margin']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Height.'); ?>"><?php _e('Item Height'); ?></td>
			<td><input type="text" name="settings[item_height]"  value="<?php print @$ops['item_height']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Round.'); ?>"><?php _e('Item Round'); ?></td>
			<td><input type="text" name="settings[item_round]"  value="<?php print @$ops['item_round']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Spacing.'); ?>"><?php _e('Item Spacing'); ?></td>
			<td><input type="text" name="settings[item_spacing]"  value="<?php print @$ops['item_spacing']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Number.'); ?>"><?php _e('Item Number'); ?></td>
			<td><input type="text" name="settings[item_number]"  value="<?php print @$ops['item_number']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Number.'); ?>"><?php _e('Item Number'); ?></td>
			<td><input type="text" name="settings[item_number]"  value="<?php print @$ops['item_number']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Border Size.'); ?>"><?php _e('Item Border Size'); ?></td>
			<td><input type="text" name="settings[item_borderSize]"  value="<?php print @$ops['item_borderSize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Border Color.'); ?>"><?php _e('Item Border Color'); ?></td>
			<td><input type="text" name="settings[item_borderColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['item_borderColor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Background Color.'); ?>"><?php _e('Item Background Color'); ?></td>
			<td><input type="text" name="settings[item_backgroundColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['item_backgroundColor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Item Title Move Time.'); ?>"><?php _e('Item Title Move Time'); ?></td>
			<td><input type="text" name="settings[item_titlePriceMoveTime]"  value="<?php print @$ops['item_titlePriceMoveTime']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Panel Height.'); ?>"><?php _e('Control Panel Height'); ?></td>
			<td><input type="text" name="settings[control_panelHeight]"  value="<?php print @$ops['control_panelHeight']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Panel Width.'); ?>"><?php _e('Control Panel Width'); ?></td>
			<td><input type="text" name="settings[control_panelWidth]"  value="<?php print @$ops['control_panelWidth']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Panel Position'); ?>"><?php _e('Control Panel Position'); ?></td>
			<td>
				<select name="settings[control_panelPosition]">
					<option value="TL" <?php print (@$ops['control_panelPosition'] == 'TL') ? 'selected' : ''; ?>><?php _e('Top Left'); ?></option>
					<option value="TR" <?php print (@$ops['control_panelPosition'] == 'TR') ? 'selected' : ''; ?>><?php _e('Top Right'); ?></option>
					<option value="BL" <?php print (@$ops['control_panelPosition'] == 'BL') ? 'selected' : ''; ?>><?php _e('Bottom Left'); ?></option>
					<option value="BR" <?php print (@$ops['control_panelPosition'] == 'BR') ? 'selected' : ''; ?>><?php _e('Bottom Right'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Control Button Background Color.'); ?>"><?php _e('Control Button Background Color'); ?></td>
			<td><input type="text" name="settings[control_buttonBackgroundColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['control_buttonBackgroundColor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Button Active Background Color.'); ?>"><?php _e('Control Button Active Background Color'); ?></td>
			<td><input type="text" name="settings[control_buttonActiveBackgroundColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['control_buttonActiveBackgroundColor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Button Size.'); ?>"><?php _e('Control Button Size'); ?></td>
			<td><input type="text" name="settings[control_buttonSize]"  value="<?php print @$ops['control_buttonSize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Button Spacing.'); ?>"><?php _e('Control Button Spacing'); ?></td>
			<td><input type="text" name="settings[control_buttonSpacing]"  value="<?php print @$ops['control_buttonSpacing']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Graphic Size.'); ?>"><?php _e('Control Graphic Size'); ?></td>
			<td><input type="text" name="settings[control_graphicSize]"  value="<?php print @$ops['control_graphicSize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Status Line Size.'); ?>"><?php _e('Control Status Line Size'); ?></td>
			<td><input type="text" name="settings[control_statusLineSize]"  value="<?php print @$ops['control_statusLineSize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Control Status Line Color.'); ?>"><?php _e('Control Status Line Color'); ?></td>
			<td><input type="text" name="settings[control_statusLineColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['control_statusLineColor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Select the wmode of flash'); ?>"><?php _e('wmode'); ?></td>
			<td>
				<select name="settings[wmode]">
					<option value="opaque" <?php print (@$ops['wmode'] == 'opaque') ? 'selected' : ''; ?>><?php _e('opaque'); ?></option>
					<option value="transparent" <?php print (@$ops['wmode'] == 'transparent') ? 'selected' : ''; ?>><?php _e('transparent'); ?></option>
					<option value="window" <?php print (@$ops['wmode'] == 'window') ? 'selected' : ''; ?>><?php _e('window'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Name Active size.'); ?>"><?php _e('Name Active size'); ?></td>
			<td><input type="text" name="settings[name_activesize]"  value="<?php print @$ops['name_activesize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Name InActive size.'); ?>"><?php _e('Name InActive size'); ?></td>
			<td><input type="text" name="settings[name_inactivesize]"  value="<?php print @$ops['name_inactivesize']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Name Active color.'); ?>"><?php _e('Name Active color'); ?></td>
			<td><input type="text" name="settings[name_activecolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['name_activecolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Name In-Active color.'); ?>"><?php _e('Name InActive color'); ?></td>
			<td><input type="text" name="settings[name_inactivecolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['name_inactivecolor']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Where do you load the target url when user clicks on the image'); ?>"><?php _e('Traget Link'); ?></td>
			<td>
				<select name="settings[target]">
					<option value="_blank" <?php print (@$ops['target'] == '_blank') ? 'selected' : ''; ?>><?php _e('New Window'); ?></option>
					<option value="_self" <?php print (@$ops['target'] == '_self') ? 'selected' : ''; ?>><?php _e('Same Window'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Title Size.'); ?>"><?php _e('Title Size'); ?></td>
			<td><input type="text" name="settings[title_size]"  value="<?php print @$ops['title_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Title Color.'); ?>"><?php _e('Title Color'); ?></td>
			<td><input type="text" name="settings[title_color]" class="color {hash:false,caps:true}" value="<?php print @$ops['title_color']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Price Size.'); ?>"><?php _e('Price Size'); ?></td>
			<td><input type="text" name="settings[price_size]"  value="<?php print @$ops['price_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Price Color.'); ?>"><?php _e('Price Color'); ?></td>
			<td><input type="text" name="settings[price_color]" class="color {hash:false,caps:true}" value="<?php print @$ops['price_color']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Description Size.'); ?>"><?php _e('Description Size'); ?></td>
			<td><input type="text" name="settings[desc_size]"  value="<?php print @$ops['desc_size']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Description Length.'); ?>"><?php _e('Description Length'); ?></td>
			<td><input type="text" name="settings[desc_length]"  value="<?php print @$ops['desc_length']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Description Color.'); ?>"><?php _e('Description Color'); ?></td>
			<td><input type="text" name="settings[desc_color]" class="color {hash:false,caps:true}" value="<?php print @$ops['desc_color']; ?>" /></td>
		</tr>
		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>