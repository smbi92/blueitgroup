<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */
get_header(); 
/*Template Name: Open Customization */
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


<?php
$image_object = get_field('content_background');
?>

<div class="content-container" style=" background: url('<?php echo $image_object['url']; ?>') center center no-repeat">
  <?php the_content()?>
 </div>

 <?php endwhile;	
 	endif;?>
 <?php get_footer(); ?> 