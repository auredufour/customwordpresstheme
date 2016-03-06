
<?php 
 // $page_for_posts = get_option( 'page_for_posts' );
 // $postImage = (object) array(
  // 'ID' => $page_for_posts
 // );
 // $url = hackeryou_get_thumbnail_url($postImage);
?>

<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="wrapper">
	<div class="hero-container clearfix" id="hero-container" style="background-image: url( <?php echo hackeryou_get_thumbnail_url( $post ) ?>)">
 		<h1 class="contact">
    	  <?php echo the_title(); ?>
  		</h1>
	</div>
 	<div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
	</div>
    <?php endwhile; // end the loop?>
</div> <!-- /.wrapper -->

<?php get_footer(); ?>