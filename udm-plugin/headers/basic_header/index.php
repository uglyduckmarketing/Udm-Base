<?php
$data=unserialize(get_option('header_layout_'.$layout));
?>
<!--top-header_basic-->
<header class="bordered basic_header main_header">
<?php if($data['top_bar']=="yes"){ ?> 
	<section class="top_basic_header top_basic_show">
		<div class="container">
			<div class="row">				
				<div class="col-md-6 top_heade_left padd_0">
					<?php 
					if(isset($data['left_top_bar_show']) && $data['left_top_bar_show'] == 'yes')
						{ 
						if(isset($data['lefttopbartext']) && $data['lefttopbartext'] == 'yes')
						{ 
					?>
						<p><?php echo isset($data['lefttopbar_text']) ? $data['lefttopbar_text'] : ''; ?></p>
					<?php 
						} 
						else if(isset($data['lefttopbarphone']) &&  $data['lefttopbarphone'] == 'yes')
						{
							if(isset($data['lefttopbar_phone_left_text']) && $data['lefttopbar_phone_left_text']!="")
							{
								 ?> 
								 <strong class="lefttextt_phoneno" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['lefttopbar_phone_left_text']) ? $data['lefttopbar_phone_left_text'] : ''; ?></strong>
								 <?php
							}
							if(isset($data['lefttopbar_phone_overright']) && $data['lefttopbar_phone_overright']=="yes")
							{
								?>
								<a class="" href="tel:<?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?>"><?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?></a>
								<?php
							}else{
								?>
								<a class="" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a>
								<?php
							}					
						}
						
						else if(isset($data['lefttopbarsocial']) && $data['lefttopbarsocial'] == 'yes')
						{ 
					?>
					<?php
									 $sociallefttype = '';
										if(isset($data['lefttopbar_social_icon_style']) && $data['lefttopbar_social_icon_style']=='square')
										{
											 $sociallefttype="squaresocial"; 	
										}
									?>
					<ul class="leftsocialic <?php echo $sociallefttype; ?>">
						<?php
						if(isset($data['lefttopbar_social_icon_style']) && $data['lefttopbar_social_icon_style']=='square')
						{
							 $type="-square"; 
							 $facebook = "fa fa-facebook-square";
							 $twitter = "fa fa-twitter-square";
							 $googleplus = "fa fa-google-plus-square";
							 $linkedin = "fa fa-linkedin-square";
							 $instagram = "fa fa-instagram";
							 $pinterest = "fa fa-pinterest-square";

						}
						else
						{
							$type="";
							$facebook = "ion-social-facebook";
							$twitter = "ion-social-twitter";
							$googleplus ="ion-social-googleplus";
							$linkedin = "ion-social-linkedin";
							$instagram = "ion-social-instagram";
							$pinterest = "ion-social-pinterest";


						}
							if(get_option('udm_facebook_link')!=""){
						?>
							<li><a alt="Visit Us On FaceBook" href="<?php echo get_option('udm_facebook_link'); ?>"><i class="<?php echo esc_attr($facebook); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_twitter_link')!=""){
						?>
							<li><a alt="Visit Us On Twitter" href="<?php echo get_option('udm_twitter_link'); ?>"><i class="<?php echo esc_attr($twitter); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_instagram_link')!="")
							{
						?>
							<li><a alt="Visit Us On Instagram" href="<?php echo get_option('udm_instagram_link'); ?>"><i class="<?php echo esc_attr($instagram); ?>"> </i></a></li>
						<?php
							}	
							if(get_option('udm_googleplus_link')!=""){
						?>
							<li><a alt="Visit Us On Googleplus" href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="<?php echo esc_attr($googleplus); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_linkedin_link')!="")
							{
						?>
							<li><a alt="Visit Us On Linkedin" href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="<?php echo esc_attr($linkedin); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_pinterest_link')!=""){
						?>
							<li><a alt="Visit Us On Pinterest" href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="<?php echo esc_attr($pinterest); ?>"></i></a></li>
						<?php
							}
							?></ul>
							<?php
						}
						else if(isset($data['lefttopbarbutton']) &&  $data['lefttopbarbutton'] == 'yes')
						{
							$scheme = parse_url( isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '', PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
							}
							else
							{
								$url=isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
							}
						?>
							<li><span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><?php if(isset($data['lefttopbar_button_text']) &&   $data['lefttopbar_button_text']!=""){ echo esc_attr($data['lefttopbar_button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></li>
					<?php 
						} 
					}
					?>					
				</div> 
				<div class="col-md-6">
				<?php if(isset($data['right_top_bar_show']) && $data['right_top_bar_show'] == 'yes')
						{  ?>
					<?php
					 $socialrighttype = '';
						if(isset($data['righttopbar_social_icon_style']) && $data['righttopbar_social_icon_style']=='square')
						{
							 $socialrighttype="squaresocial"; 	
						}
					?>
					<ul class="top_heade_right <?php echo $socialrighttype; ?>">
					<?php 
					
						if(isset($data['righttopbartext']) && $data['righttopbartext'] == 'yes')
						{
					?>
						<li><p><?php echo esc_attr($data['righttopbar_text']); ?></p></li>
					<?php 
						}
						else if(isset($data['righttopbarphone']) &&  $data['righttopbarphone'] == 'yes')
						{
					?>
						<li class="righttextt_phoneno"><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['righttopbar_phone_left_text']) ? $data['righttopbar_phone_left_text'] : ''; ?></a></li>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
					<?php 
						}
						else if(isset($data['righttopbarsocial']) && $data['righttopbarsocial'] == 'yes')
						{ 
					?>
					
						<?php
						if(isset($data['righttopbar_social_icon_style']) &&  $data['righttopbar_social_icon_style']=='square')
						{
							 $type="-square"; 
							 $facebook = "fa fa-facebook-square";
							 $twitter = "fa fa-twitter-square";
							 $googleplus = "fa fa-google-plus-square";
							 $linkedin = "fa fa-linkedin-square";
							  $instagram = "fa fa-instagram";
							  $pinterest = "fa fa-pinterest-square";
						}
						else
						{
						$type="";
							$facebook = "ion-social-facebook";
							$twitter = "ion-social-twitter";
							$googleplus ="ion-social-googleplus";
							$linkedin = "ion-social-linkedin";
							$instagram = "ion-social-instagram";
							$pinterest = "ion-social-pinterest";


						}
							if(get_option('udm_facebook_link')!=""){
						?>
							<li class="socialics"><a alt="Visit Us On FaceBook" href="<?php echo get_option('udm_facebook_link'); ?>"><i class="<?php echo esc_attr($facebook); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_twitter_link')!=""){
						?>
							<li class="socialics"><a alt="Visit Us On Twitter" href="<?php echo get_option('udm_twitter_link'); ?>"><i class="<?php echo esc_attr($twitter); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_instagram_link')!="")
							{
						?>
							<li class="socialics"><a alt="Visit Us On Instagram" href="<?php echo get_option('udm_instagram_link'); ?>"><i class="<?php echo esc_attr($instagram); ?>"> </i></a></li>
						<?php
							}	
							if(get_option('udm_googleplus_link')!=""){
						?>
							<li class="socialics"><a alt="Visit Us On Googleplus" href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="<?php echo esc_attr($googleplus); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_linkedin_link')!="")
							{
						?>
							<li class="socialics"><a alt="Visit Us On Linkedin" href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="<?php echo esc_attr($linkedin); ?>"></i></a></li>
						<?php
							}							
							if(get_option('udm_pinterest_link')!=""){
						?>
							<li class="socialics"><a alt="Visit Us On Pinterest" href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="<?php echo esc_attr($pinterest); ?>"></i></a></li>
						<?php
							}
						}
						else if(isset($data['righttopbarbutton']) && $data['righttopbarbutton'] == 'yes')
						{
							$scheme = parse_url( $data['righttopbar_button_link'], PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".$data['righttopbar_button_link'];
							}
							else
							{
								$url=$data['righttopbar_button_link'];
							}
						?>
							<li><span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><?php if($data['righttopbar_button_text']!=""){ echo esc_attr($data['righttopbar_button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></li>
					<?php 
						}
					?>
					</ul>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
	<!--basic-header-default-->    <!--bg-light-->
	<section class="basic_header_default">
		<div class="container">
			<div class="row">
			<nav class="navbar navbar-expand-md navbar-light wd100">
				<div class="col-lg-auto padd_0">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ; ?>"><img alt="Back To Home Page" src="<?php  if(get_option('udm_company_logo') != ''){ echo get_option('udm_company_logo'); }else{ echo get_template_directory_uri().'/images/login_logo.png'; } ?>"></a>
				</div>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				  </button> 
				  <div class="collapse navbar-collapse padr0l_15" id="collapsibleNavbar"> 
					<?php
					echo '<div class="basic_header_nav">';
						$menu=isset($data['navigation']) ? $data['navigation'] : '';
						if($menu!="")
						{
							wp_nav_menu(array('menu' => $menu, 'menu_class' => 'navbar-nav'));
						}
						else
						{
							wp_nav_menu(array('menu_class' => 'navbar-nav'));
						}
					echo '</div>';
						if(isset($data['header_button_link']) && $data['header_button_link'] != ''){
							$scheme = parse_url( $data['header_button_link'], PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".$data['header_button_link'];
							}
							else
							{
								$url=isset($data['header_button_link']) ? $data['header_button_link'] : '';
							}
						}
					 if(isset($data['header_button']) && $data['header_button']=="yes"){ ?>
						<span class="right_side_bt"><a <?php if(isset($data['header_button_link']) && $data['header_button_link']!=""){ ?> target="_blank" <?php } ?> href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><?php if(isset($data['header_button_text']) && $data['header_button_text']!=""){ echo esc_attr($data['header_button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span>
					<?php }
						 
						if(isset($data['right_header']) && $data['right_header']=="yes"){
							?>
							<div class="col-lg-auto">
								<div class="right_side_header common_phonecall">
									<small class="right_side_text textt_phoneno"><?php if(isset($data['right_header_text']) && $data['right_header_text'] != ''){ echo esc_attr($data['right_header_text']); }else{ echo 'Call For An Estimate'; } ?></small>  
									<span class="right_side_phone"><?php if(isset($data['right_header_phone']) && $data['right_header_phone'] != ''){ echo esc_attr($data['right_header_phone']); }else{ echo get_option('udm_phone_number'); } ?></span>
								</div>
							</div>
							<?php 
						}
					?>
				  </div>  
				</nav>
			</div>				
		 </div>				
	</section>
</header>
<!--end-->