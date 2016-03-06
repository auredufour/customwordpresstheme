<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="wrapper">
<!-- Trageting the image from the page and not the post -->

 <?php 
 $page_for_posts = get_option( 'page_for_posts' );
 $postImage = (object) array(
 	'ID' => $page_for_posts
 );
 $url = hackeryou_get_thumbnail_url($postImage);

?>


<?php //if( class_exists('Dynamic_Featured_Image') ) { ?>
    <?php //global $dynamic_featured_image; ?>
    <?php //$featured_images_url = $dynamic_featured_image->get_image_url(55, "thumbnail", 'large' ); ?>
<!-- Featured_images as value give back the url of the images -->
        <!-- <img class="featuredImage" src="<?= $featured_images_url ?>" > -->
      <?php  //} ?>


 <div class="hero-container clearfix" id="hero-container"style="background-image: url( <?php echo $url ?>)">
  <div class="background-hero"></div> 
      <h1 class="blog">
          <?php echo get_the_title($page_for_posts); ?>
      </h1>
  </div> 

<div class="main">
  <div class="container">
        <?php get_template_part( 'loop', 'index' ); ?>
  </div> <!-- /.container -->
</div>
      <?php get_sidebar(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>