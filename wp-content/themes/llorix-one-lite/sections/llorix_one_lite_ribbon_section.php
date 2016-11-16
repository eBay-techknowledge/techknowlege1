<!-- =========================
 SECTION: RIBBON   
============================== -->
<?php
	global $wp_customize;
	$ribbon_background = get_theme_mod('llorix_one_lite_ribbon_background', llorix_one_lite_get_file('/images/background-images/parallax-img/parallax-img1.jpg'));
	$llorix_one_lite_ribbon_title = get_theme_mod('llorix_one_lite_ribbon_title',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one-lite'));
	$llorix_one_lite_button_text = get_theme_mod('llorix_one_lite_button_text',esc_html__('GET STARTED','llorix-one-lite'));
	$llorix_one_lite_button_link = get_theme_mod('llorix_one_lite_button_link','#');
	
	$llorix_one_lite_ribbon_show = get_theme_mod('llorix_one_lite_ribbon_show');
	
	/* If section is not disabled */
	if( isset($llorix_one_lite_ribbon_show) && $llorix_one_lite_ribbon_show != 1 ) {

		if( !empty($llorix_one_lite_ribbon_title) || !empty($llorix_one_lite_button_text) ) {
			
			if(!empty($ribbon_background)){
				echo '<section class="call-to-action ribbon-wrap" id="ribbon" style="background-image:url('.$ribbon_background.');" role="region" aria-label="'.esc_html__('Ribbon','llorix-one-lite').'">';
			} else {
				echo '<section class="call-to-action ribbon-wrap" id="ribbon" role="region" aria-label="'.esc_html__('Ribbon','llorix-one-lite').'">';
			}
		
	?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="row">
						<!--
						<div class="col-md-8 col-md-offset-2">

							<?php
								if( !empty($llorix_one_lite_ribbon_title) ){
									echo '<h2 class="white-text strong">'.esc_attr($llorix_one_lite_ribbon_title).'</h2>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="white-text strong llorix_one_lite_only_customizer"></h2>';
								}

								if( !empty($llorix_one_lite_button_text) ){
									if( empty($llorix_one_lite_button_link) ){
										echo '<button class="btn btn-primary standard-button llorix_one_lite_only_customizer" type="button" data-toggle="modal" data-target="#stamp-modal"><span class="screen-reader-text">'.esc_html__('Ribbon button label:','llorix-one-lite').$llorix_one_lite_button_text.'</span>'.$llorix_one_lite_button_text.'</button>';
									} else {
										echo '<button onclick="window.location=\''.esc_url($llorix_one_lite_button_link).'\'" class="btn btn-primary standard-button" type="button" data-toggle="modal" data-target="#stamp-modal"><span class="screen-reader-text">'.esc_html__('Ribbon button label:','llorix-one-lite').$llorix_one_lite_button_text.'</span>'.esc_attr($llorix_one_lite_button_text).'</button>';
									}
								} elseif ( isset( $wp_customize ) ) {
									echo '<button class="btn btn-primary standard-button llorix_one_lite_only_customizer" type="button" data-toggle="modal" data-target="#stamp-modal"></button>';
								}
							?>

						</div>
						-->
                                            

                                <!-- three part section that has the spotlight -->
				<div class="col-md-12" style="margin-bottom: 0px;">   <!-- width:32.33333333%;   -->

				<h1 style="text-align:center; color:#1395ba; font-weight:100 !important; margin-bottom:20px;">In the Spotlight</h1>

				<div class="col-md-4" style="border:1px solid #cccccc; min-height:500px; padding:0px !important; margin-right:10px;  background-color:#ffffff;">
					<div style="height:50px; background-color:#3b5998; color:#ffffff; text-align:center; font-size:25px;padding-top:10px;">Training News</div>
					   <div style="padding:20px;">
						<p style="font-size:20px;">Sign Up Now !!!
                                                             <h3 style='color:#31b0d5 !important;'>CPT Mentoring Program</h3>         
                                                             <a href='http://ebaymentoring' target="_blank"><img src="http://techknowledge1-6339.phx01.dev.ebayc3.com/techknowledge/wp-content/uploads/2016/08/mentor-words2.jpg"></a>
                                               </p>
					   </div>
				</div>

				<div class="col-md-4" style="border:1px solid #cccccc; min-height:500px; padding:0px !important; margin-right:10px;  background-color:#ffffff;">
					<div style="height:50px; background-color:#3b5998; color:#ffffff; text-align:center; font-size:25px;padding-top:10px;">CPT Newsletter</div>
					   <div style="padding:20px;">
						<p style='font-size:18px; font-weight:400; margin-bottom:20px;'>CPT ALL-HANDS: Watch the replay</p>
						<a href='https://hubtv.corp.ebay.com/video/67893.aspx' target="_blank"><img src="http://cxpnews.corp.ebay.com/wp-content/uploads/2016/07/CPT-Q3-All-Hands.jpg" width="220" height="109" alt="Watch the CPT Q3 All Hands"></a>
						<p style="text-align:left; margin:15px 0px 30px 25px; font-size:14px !important;">Last week, Core Product & Technology gathered both locally in Main Street and virtually by webcast for its Q3 all-hands meeting. CPT’s eight Luminary Award winners were in...<br> <a href='http://cxpnews.corp.ebay.com/missed-the-cpt-all-hands-watch-the-replay/ 'target="_blank">Read more ></a></p>
						<a href="http://cxpnews/" target="_blank">Visit Product & Technology News ></a>
					   </div>
				</div>

				<div class="col-md-4" style="width:30.33333333%; border:1px solid #cccccc; min-height:500px; padding:0px !important;  background-color:#ffffff;">
					<div style="height:50px; background-color:#3b5998; color:#ffffff; text-align:center; font-size:25px;padding-top:10px;">Tech Blog</div>
					   <div style="padding:20px;">
					   <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=ebaytechblog" data-widget-id="663817909689389056">Tweets about ebaytechblog</a>
				       <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>

			</div>




					</div>
				</div>
			</div>
		</section>
		
	<?php
		}
	/* If section is disabled, but we are in Customize, display section with class llorix_one_lite_only_customizer */
	} elseif( isset( $wp_customize ) ) {
		if(!empty($ribbon_background)){
			echo '<section class="call-to-action ribbon-wrap llorix_one_lite_only_customizer" id="ribbon" style="background-image:url('.$ribbon_background.');" role="region" aria-label="'.esc_html__('Ribbon','llorix-one-lite').'">';
		} else {
			echo '<section class="call-to-action ribbon-wrap llorix_one_lite_only_customizer" id="ribbon" role="region" aria-label="'.esc_html__('Ribbon','llorix-one-lite').'">';
		}
?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

							<?php
								if( !empty($llorix_one_lite_ribbon_title) ){
									echo '<h2 class="white-text strong">'.esc_attr($llorix_one_lite_ribbon_title).'</h2>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="white-text strong llorix_one_lite_only_customizer"></h2>';
								}

								if( !empty($llorix_one_lite_button_text) ){
									if( empty($llorix_one_lite_button_link) ){
										echo '<button class="btn btn-primary standard-button llorix_one_lite_only_customizer" type="button" data-toggle="modal" data-target="#stamp-modal"><span class="screen-reader-text">'.esc_html__('Ribbon button label:','llorix-one-lite').$llorix_one_lite_button_text.'</span>'.$llorix_one_lite_button_text.'</button>';
									} else {
										echo '<button onclick="window.location=\''.esc_url($llorix_one_lite_button_link).'\'" class="btn btn-primary standard-button" type="button" data-toggle="modal" data-target="#stamp-modal"><span class="screen-reader-text">'.esc_html__('Ribbon button label:','llorix-one-lite').$llorix_one_lite_button_text.'</span>'.esc_attr($llorix_one_lite_button_text).'</button>';
										}
								} elseif ( isset( $wp_customize ) ) {
									echo '<button class="btn btn-primary standard-button llorix_one_lite_only_customizer" type="button" data-toggle="modal" data-target="#stamp-modal"></button>';
								}
							?>

						</div>
						</div>
				</div>
			</div>
		</section>
	<?php
	}
?>
