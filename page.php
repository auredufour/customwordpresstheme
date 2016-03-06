<?php get_header();  ?>


<?php 
 $page_for_posts = get_option( 'page_for_posts' );
 $postImage = (object) array(
  'ID' => $page_for_posts
 );
 $url = hackeryou_get_thumbnail_url($postImage);
?>

<div class="page-hello">

<div class="main">
 <div class="hero-container clearfix" id="hero-container" style="background-image: url( <?php echo $url ?>)">
  <div class="background-hero"></div> 
      <h1 class="blog">
          <?php echo get_the_title($page_for_posts); ?>
      </h1>
  </div>
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>
</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>