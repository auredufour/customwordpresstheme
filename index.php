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