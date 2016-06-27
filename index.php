<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();
$upload_dir = wp_upload_dir(); 
/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
			<!--Main Slider-->
    <div class="main-slider">
    <?php echo do_shortcode('[image-carousel category="homepage" showcontrols="false"]'); ?>
    </div>

				<!--Main Slider-->


				<!--About-->
    <div class="about-panel">
        <h1 class="about-heading">Delivering </h1>
        <center>
        <ul class="list-inline">
        	<li><h2 class="about-subheading">Top Talent |</h2></li> <li><h2 class="about-subheading">Top Advice |</h2></li>  <li><h2 class="about-subheading">Top Expertise</h2></li> </center>
        </ul>
        <CENTER>
       <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) ); ?>"><button class="about-btn">LETS TALK</button></a>
        </CENTER>
    </div>
    <!--About-->
    <!--Expertise-->
    <div class="expertise-parallax" data-parallax="scroll" data-image-src="">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 expertise-block" style="background: url('<?php echo $upload_dir['url']; ?>/block-talent.jpg') center center no-repeat;">
                <h2 class="expertise-block-heading"> Access Top Talent </h2>
                <CENTER>
<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Find Talent' ) ) ); ?>"><button class="block-btn">Get Talent</button></a>

                </CENTER>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 expertise-block" style="background: url('<?php echo $upload_dir['url']; ?>/block-solutions.jpg') center center no-repeat;">
                <h2 class="expertise-block-heading">Get Tailored Solutions</h2>
                <CENTER>
   <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Find Solutions' ) ) ); ?>"><button class="block-btn">LEARN MORE</button> </a>
                </CENTER>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 expertise-block" style="background: url('<?php echo $upload_dir['url']; ?>/block-expertise.jpg') center center no-repeat;">
                <h2 class="expertise-block-heading"> Recieve Focused Advice </h2>
                <CENTER>
              <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Find Experts' ) ) ); ?>"><button class="block-btn">GET CONNECTED</button> </a>
                </CENTER>
            </div>
        </div>
    </div>
    <!--Expertise-->
 <!--Testimonial-->
    <div class="testimonial-slider container">
<?php quotescollection_quote( array( 'auto_refresh' => 5) ); ?> 
</div>
 <!--Testimonial-->
    <!--Career-->
    <div class="col-md-6 col-sm-12 col-xs-12 career-panel" style="background: url('<?php echo $upload_dir['url']; ?>/career-background.jpg') center center no-repeat;">
        <h1 class="career-heading">Accelerate Your Career</h1>
        <CENTER>
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Find Work' ) ) ); ?>"><button class="block-btn">View Opportunities</button></a>
        </CENTER>
    </div>
    <!--Career-->
    <!--Talent-->

    <div class="col-md-6 col-sm-12 col-xs-12 career-panel" style="background: url('<?php echo $upload_dir['url']; ?>/talent-background.jpg') center center no-repeat;">
        <h1 class="talent-heading">Access Top Tech Talent</h1>
        <CENTER>
   <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Find Talent' ) ) ); ?>"><button class="block-btn">Get Connected</button></a>
        </CENTER>
    </div>
    <!--Talent-->
      <div class="row">
    <!--SAP-->
    <div class="col-md-6 col-sm-12 col-xs-12 sap-panel" style="background: url('<?php echo $upload_dir['url']; ?>/sap-background.jpg') center center no-repeat;">
        <center> <img  src='<?php echo $upload_dir['url']; ?>/sap-logo.png'> </center>
        <h1 class="ibm-heading">Run Simple</h1>
        <CENTER>
         <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'SAP Solutions' ) ) ); ?>"><button class="sap-btn">Explore Solutions</button></a>
        </CENTER>
    </div>
    <!--SAP-->
    <!--IBM-->
    <div class="col-md-6 col-sm-12 col-xs-12 ibm-panel" style="background: url('<?php echo $upload_dir['url']; ?>/ibm-background.jpg') center center no-repeat;">
          <center> <img  src='<?php echo $upload_dir['url']; ?>/ibm-logo.png'> </center>
        <h1 class="ibm-heading">Solutions For A Small Planet</h1>
        <CENTER>
       <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'IBM Solutions' ) ) ); ?>"><button class="ibm-btn">Learn More</button></a>
        </CENTER>
    </div>
	</div>
    <!--IBM-->
<?php get_footer(); ?> 