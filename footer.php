<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
$upload_dir = wp_upload_dir(); 
?>
        <!--Newsletter Signup-->
    <div class="newsletter">
    <h2 class="newsletter-heading"> Signup for the Blue IT newsletter to get industry insights </h2>
<?php echo do_shortcode('[contact-form-7 id="1123" title="Newslettser"]'); ?>


</div>

<!--End mc_embed_signup-->
    </div>
    <!--Newsletter Signup-->
    <!--footer-->
    <footer>
        <!--Addresses-->
        <div class="address-container">
            <ul class="list-inline">
                <li class="address-entry">
                    <h3 class="address-title">New York </h3>
                    <hr>
                    <p class="address-detail">1325 Avenue of the Americas
                        <br>28 floor New York, NY 10019.
                        <p class="telephone">
                            (917) 979-2874
                        </p>
                    </p>
                </li>
                <li class="address-entry">
                    <h3 class="address-title">Toronto</h3>
                    <hr>
                    <p class="address-detail"> 439 University Avenue, 5th Floor,<br>Toronto, Ontario, M5G 2N8.</p>
                    <p class="telephone">
                   (888) 408-6410
                    </p>
                    <li class="address-entry">
                        <h3 class="address-title">Houston</h3>
                        <hr>
                        <p class="address-detail"> 9595 Six Pines Dr Suite 8210,
                            <br> The Woodlands, TX 77380.</p>
                        <p class="telephone">
                               (888) 408-6410
                        </p>
                        <li class="address-entry">
                            <h3 class="address-title">San Francisco</h3>
                            <hr>
                            <p class="address-detail"> 795 Folsom Street, 1st Floor,
                                <br>San Francisco, CA 94107.</p>
                            <p class="telephone">
                                (415) 966-2925
                            </p>
                            <li class="address-entry">
                                <h3 class="address-title">Vancouver</h3>
                                <hr>
                                <p class="address-detail">4720 Kingsway Suite 2600
                                    <br>Burnaby, BC V5H 4N2.</p>
                                <p class="telephone">
                                    (604) 227-3096
                                </p>
                            </li>
            </ul>
        </div>
        <!--Addresses-->
 <!--Footer Content-->
        <div class=" row footer-content">
            <div class=" col-md-2 col-sm-6 col-xs-12  service-column">
                		<?php 
	wp_nav_menu(array(
		'theme_location' => 'staffing-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-12  service-column">
               		<?php 
	wp_nav_menu(array(
		'theme_location' => 'consulting-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-12 service-column">
                             		<?php 
	wp_nav_menu(array(
		'theme_location' => 'advisory-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-12  service-column">
                                          		<?php 
	wp_nav_menu(array(
		'theme_location' => 'sap-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-12  service-column">
                                            		<?php 
	wp_nav_menu(array(
		'theme_location' => 'ibm-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-12  service-column">
                                             		<?php 
	wp_nav_menu(array(
		'theme_location' => 'company-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
                'menu_class'        => 'service-list',
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
?>
                 <center> <img  src='<?php echo $upload_dir['url']; ?>/sappartner-logo.png'> </center>
            </div>
        </div>
        <!--Footer Content-->
    </footer>
    <!--footer-->
    <!-- Jquery & Javascript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
       <script src="js/custom.js"></script>
    <!-- Jquery & Javascript Files -->
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>