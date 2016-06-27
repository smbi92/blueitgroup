<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */
get_header(); 
/*Template Name: Product Page */
?>
 <?php
if (has_post_thumbnail()) {
    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
    $thumbnail_url = $thumbnail_data[0];
}
?>
<?php $image = get_field('banner_background_image');
if( !empty($image) ):  ?>
<div class="page-banner" style="background:url('<?php echo $image['url']; ?>') center center no-repeat">
<h1 class="banner-heading"><?php the_field('banner_heading');?></h1>
<div class="container"><h2 class="banner-tagline"><?php the_field('banner_tagline');?></h2>
	</div>	
	</div>
<?php endif; ?>
<?php 
if( have_posts() ):	
while( have_posts() ): the_post(); ?>



<!-- Banner 2 -->
<?php
$image_object_2 = get_field('product_section_background_2');
?>
<div class="content-container solutions-container"  style=" background: url('<?php echo $image_object_2['url']; ?>') center center no-repeat">
<div class="container"><?php the_field('product_content_section_2')?></div>
 </div>
 <!-- Banner 2 -->



<!-- Banner 3 -->
<?php
$image_object_3 = get_field('product_section_background_3');
?>
<div class="content-container solutions-container"  style=" background: url('<?php echo $image_object_3['url']; ?>') center center no-repeat">
<div class="container"><?php the_field('product_content_section_3')?></div>
 </div>
 <!-- Banner 2 -->


 <!--Testimonial-->
    <div class="testimonial-slider container">
<?php quotescollection_quote( array( 'auto_refresh' => 5) ); ?> 
</div>
 <!--Testimonial-->

 <?php endwhile;	
 	endif;?>
 <?php get_footer(); ?> 