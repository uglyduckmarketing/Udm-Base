<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('header_layout_'.$layout));
?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show basic_header common_setting">
	<li><h4>Navigation: </h4>
		<select name="navigation" id="navigation">
			<?php 
				$menus=wp_get_nav_menus();
				foreach( $menus as $item ) 
				{
			?>
				<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo esc_attr($item->name);  ?></option>
			<?php
				}
			?>
		</select>
		<div class="clearfix"></div>
	</li>
	<li><h4>Drop Down Style: </h4>
		<select name="dropdownstyle" id="editdropdownstyle">
			<option value="">Select Style</option>
			<?php  
				global $wpdb;
				$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
				foreach($layouts as $layout){
			?>
				<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>" <?php selected(str_replace("submenu_layout_","",$layout),$data['dropdownstyle']); ?>><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
			<?php	
				}
			?>
		</select>
		<div class="clearfix"></div>
	</li>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="">Layout Button</a>
	</h2>
	<li class="colorchange"><h4>Button Color: </h4>
		<select name="button_color" id="button_color">			
			<option value="primary" <?php selected('primary',$data['button_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['button_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['button_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['button_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['button_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Button Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo esc_attr($data['button_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Button Text Color: </h4>
		<select name="button_text_color" id="button_text_color">			
			<option value="primary" <?php selected('primary',$data['button_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['button_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['button_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['button_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['button_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Button Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo esc_attr($data['button_text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="">Background Setting</a>
	</h2>
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">			
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo esc_attr($data['background_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="">Link Setting</a>
	</h2>
	<li class="colorchange"><h4>Link Color: </h4>
		<select name="link_color" id="link_color">			
			<option value="primary" <?php selected('primary',$data['link_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['link_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['link_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['link_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['link_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Link Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="<?php echo esc_attr($data['link_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="">Top Bar Setting</a>
	</h2>
	<li><h4>Top Bar: </h4>
		<span class="switch">
			<input type="checkbox" name="top_bar" class="switch" id="top_bar" value="yes" <?php checked('yes',$data['top_bar']); ?> >
			<label for="top_bar">Hide/Show</label>
		</span>
		<ul id="topbardata" <?php if($data['top_bar']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li class="colorchange"><h4>Background Color: </h4>
				<select name="topbar_background_color" id="topbar_background_color">					
					<option value="primary" <?php selected('primary',$data['topbar_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['topbar_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['topbar_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['topbar_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['topbar_background_color']); ?>>Custom</option>
				</select>
				<div class="clearfix"></div>
				<ul class="customcolor" <?php if($data['topbar_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li><h4>Background Custom Color: </h4>
						<input class="udm_color_picker" type="text" name="topbar_background_custom_color" value="<?php echo esc_attr($data['topbar_background_custom_color']); ?>" />
						<div class="clearfix"></div>
					</li>
				</ul>
			</li>
			<li class="colorchange"><h4>Links Color: </h4>
				<select name="topbar_link_color" id="topbar_link_color">
					<option value="primary" <?php selected('primary',$data['topbar_link_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['topbar_link_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['topbar_link_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['topbar_link_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['topbar_link_color']); ?>>Custom</option>
				</select>
				<div class="clearfix"></div>
				<ul class="customcolor" <?php if($data['topbar_link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li><h4>Links Custom Color: </h4>
						<input class="udm_color_picker" type="text" name="topbar_link_custom_color" value="<?php echo esc_attr($data['topbar_link_custom_color']); ?>" />
						<div class="clearfix"></div>
					</li>
				</ul>
			</li>
			<li class="colorchange"><h4>Text Color: </h4>
				<select name="topbar_text_color" id="topbar_text_color">
					<option value="primary" <?php selected('primary',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Custom</option>
				</select>
				<div class="clearfix"></div>
				<ul class="customcolor"  <?php if(isset($data['topbar_text_color']) && $data['topbar_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li><h4>Text Custom Color: </h4>
						<input class="udm_color_picker" type="text" name="topbar_text_custom_color" value="<?php echo isset($data['topbar_text_custom_color']) ? $data['topbar_text_custom_color'] : ''; ?>" />
						<div class="clearfix"></div>
					</li>
				</ul>
			</li>
			<h2 class="header_layout_heading">
				<a href="javascript:void(0);" data-toggle="collapse" data-target="">Top Bar Widget</a>
			</h2>
			<li>
				<ul id="topbar_layouts">
					<?php
						include get_template_directory() . "/udm-plugin/admin/headers/templates/basic_topbar_layout.php";
					?>
				</ul>
			</li>
		</ul>
	</li>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="">Right Header Setting</a>
	</h2>
	<li><h4>Header Button: </h4>
		<span class="switch">
			<input  type="checkbox" name="header_button" class="switch" id="header_button" value="yes" <?php checked('yes',$data['header_button']); ?>>
			<label for="header_button">Hide/Show</label>
		</span>
		<ul id="show_button_text" <?php if($data['header_button']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Header Button Text: </h4>
				<input class="" type="text" name="header_button_text" value="<?php echo esc_attr($data['header_button_text']); ?>" />
				<div class="clearfix"></div>
			</li>
			<li><h4>Header Button Link: </h4>
				<input class="" type="text" name="header_button_link" value="<?php echo esc_attr($data['header_button_link']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Right Header: </h4>
		<span class="switch">
			<input  type="checkbox" name="right_header" class="switch" id="right_header" value="yes" <?php checked('yes',$data['right_header']); ?>>
			<label for="right_header">Hide/Show</label>
		</span>
		<ul id="show_header_right" <?php if($data['right_header']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Right Header: </h4>
				<input type="text" name="right_header_text" value="<?php echo esc_attr($data['right_header_text']); ?>">
				<div class="clearfix"></div>
			</li>
			<li class="colorchange">
				<h4>Right Header Color: </h4>
				<select name="right_header_color" id="button_color">
					<option value="primary" <?php selected('primary',$data['right_header_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['right_header_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['right_header_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['right_header_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['right_header_color']); ?>>Custom</option>
				</select>
				<div class="clearfix"></div>
				<ul class="customcolor" <?php if($data['right_header_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li><h4>Right Header Custom Color: </h4>
						<input class="udm_color_picker" type="text" name="right_header_custom_color" value="<?php echo esc_attr($data['right_header_custom_color']); ?>" />
						<div class="clearfix"></div>
					</li>
				</ul>
			</li>
			<li><h4>Right Header Phone: </h4>
				<input type="text" name="right_header_phone" value="<?php echo esc_attr($data['right_header_phone']); ?>">
				<div class="clearfix"></div>
			</li>
			<li class="colorchange">
				<h4>Right Header Phone Color: </h4>
				<select name="right_header_phone_color" id="button_color">
					<option value="primary" <?php selected('primary',$data['right_header_phone_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['right_header_phone_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['right_header_phone_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['right_header_phone_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['right_header_phone_color']); ?>>Custom</option>
				</select>
				<div class="clearfix"></div>
				<ul class="customcolor" <?php if($data['right_header_phone_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li><h4>Right Header Custom Color: </h4>
						<input class="udm_color_picker" type="text" name="right_header_phone_custom_color" value="<?php echo esc_attr($data['right_header_phone_custom_color']); ?>" />
						<div class="clearfix"></div>
					</li>
				</ul>
			</li>
			<div class="clearfix"></div>
		</ul>
	</li>

	<li id="bottombutton_data" <?php if($data['top_bar']!="yes"){}else{  ?> style="display:none;" <?php } ?>><h4>Bottom Button Hide: </h4>
		<span class="switch">
			<input type="checkbox" name="bottom_button_hide" class="switch" id="bottom_button_hide" value="yes" <?php checked('yes',$data['bottom_button_hide']); ?> >
			<label for="bottom_button_hide">Hide/Show</label> 
		</span>
		<ul>
			<li><h4>Bottom Button Text </h4><input type="text" name="bottombar_button_text" value="<?php echo esc_attr($data['bottombar_button_text']); ?>" >
			<div class="clearfix"></div>
			</li>	 
			<li><h4>Bottom Button Link </h4><input type="text" name="bottombar_button_link" value="<?php echo esc_attr($data['bottombar_button_link']); ?>" >
			<div class="clearfix"></div>
			</li>
		</ul> 
	</li>
	<div class="clearfix"></div>
</ul>
<script>
jQuery(document).ready(function($) {
	$('.udm_color_picker').wpColorPicker();  //Add color picker 
	$('#editright_side_widget').change(function(){
		if($(this).val() == "1")
		{
			$('#editcallactionwidget').hide();
			$('#editphonewidget').show();
		}
		else if($(this).val() == "2")
		{
			$('#editcallactionwidget').show();
			$('#editphonewidget').hide();
		}
		else
		{
			$('#editcallactionwidget').hide();
			$('#editphonewidget').hide();
		}
	});
	$('.colorchange select').change(function(){
		if($(this).val() == "custom")
		{
			$(this).parent().find('.customcolor').show();
		}
		else
		{
			$(this).parent().find('.customcolor').hide();
		}
	});
		
	$('#top_bar').change(function(){
		if($(this).prop('checked')==true)
		{
			$('#bottombutton_data').hide();
			$('#topbardata').show();
		}
		else
		{
			$('#bottombutton_data').show();

			$('#topbardata').hide();
		}
	});
	$('#header_button').change(function(){
		if($(this).prop('checked')==true)
		{
			$('#show_button_text').show();
			$('#show_header_right').hide();
			$('#right_header').prop('checked',false);
		}
		else
		{
			$('#show_button_text').hide();
		}
	});
	$('#right_header').change(function(){
		if($(this).prop('checked')==true)
		{
			$('#header_button').prop('checked',false);
			$('#show_header_right').show();
			$('#show_button_text').hide();
		}
		else
		{
			$('#show_header_right').hide();
		}
	});
});																		
</script>