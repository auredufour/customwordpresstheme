<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="wrapper">
<!-- After finding the thumbnail id = used the id to target the image -->
 <?php 
// $thumb_id = 55;
// $url = wp_get_attachment_thumb_url( $thumb_id );
 $page_for_posts = get_option( 'page_for_posts' );
 $postImage = (object) array(
 	'ID' => $page_for_posts
 );
 $url = hackeryou_get_thumbnail_url($postImage);

?>
<!-- Put the url in the image BUT keep the image really small -->


<!-- Get the thumbnail from the PAGE and not the POST -->
<?php
// $args = array(
//     'post_type' => 'page',
//     'post_status' => 'publish'
//     // target the page and not the post
// ); 
// $pages = get_pages($args); 
// 	// loop to get the image from the page
// foreach($pages as $page) {
// // $thumb_id = get_post_thumbnail_id($page);
// $thumb_id = get_the_post_thumbnail( $page->ID);
//     // echo get_the_post_thumbnail( $page->ID, 'large' );
// // $thumb_url_array = wp_get_attachment_image_src($thumb_id);
// $imageURL = wp_get_attachment_url( $thumb_id );
// // echo $imageURL;
// // Give back the thumbnail fron ALL the pages... Not what we want
// echo $imageURL;
// }
?>

<?php //if( class_exists('Dynamic_Featured_Image') ) { ?>
    <?php //global $dynamic_featured_image; ?>
    <?php //$featured_images_url = $dynamic_featured_image->get_image_url(55, "thumbnail", 'large' ); ?>
<!-- Featured_images as value give back the url of the images -->
        <!-- <img class="featuredImage" src="<?= $featured_images_url ?>" > -->
      <?php  //} ?>


 <div class="hero-container clearfix" style="background-image: url( <?php echo $url ?>)">

      <h1>
          <?php bloginfo( 'name' ); ?>
      </h1>
  </div> 

<div class="main">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
</div>

<?php get_footer(); ?>