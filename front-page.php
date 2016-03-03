<?php get_header();  ?>

  <div class="wrapper contenant">
  <div class="hero-container clearfix" style="background-image: url( <?php echo hackeryou_get_thumbnail_url( $post )?>)">
      <div class="logo">
<!-- SVG LOGO -->

        <svg viewBox="0 0 96 72" xmlns="http://www.w3.org/2000/svg"><title>Group</title><g fill-rule="evenodd"><path d="M21.012 4.57a7.58 7.58 0 0 1 .783-1.69c.03-.05.065-.096.103-.14.094-.113 2.358-2.73 7.52-1.67C36.47 2.514 45.4 9.89 55.908 22.936c2.142 2.36 8.42 8.738 11.684 9.89a1.225 1.225 0 0 1 .53 1.943l-1.087 1.293 2.266 1.902 2.596-3.09a1.226 1.226 0 0 1 1.725-.152L95.273 52.89a1.224 1.224 0 0 1 .152 1.726l-3.04 3.62v.002l-.002.003-4.258 5.078c-1.057 1.26-2.678 1.742-4.565 1.355a8.44 8.44 0 0 1-2.355-.876 1.22 1.22 0 0 1-.17-.12l-2.36-1.98c-1.29 2.067-4.334 6.302-7.994 6.95a5.164 5.164 0 0 1-1.96-.018A5.405 5.405 0 0 1 67.12 68c-.85 1.06-1.81 1.985-2.855 2.676-.547.362-1.292.79-2.187.88-.413.04-.77.02-1.08-.044a2.457 2.457 0 0 1-1.47-.89c-1.232-1.56-.436-4.276.407-6.702l.134-.383c.268-.965.26-1.45.204-1.687a1.22 1.22 0 0 0-.07-.23c-.26.002-.85.205-1.216.33l-.22.076c-2.4.812-3.568-.277-3.96-.782-.88-1.134-.783-2.88.243-4.447 1.165-1.78 3.282-3.43 5.525-4.31 1.85-.725 3.06-.285 3.747.212.887.64 1.355 1.664 1.583 2.78l1.735-1.106a1.222 1.222 0 0 1 1.53.174c.03.03.048.066.076.097l.475-.474-2.46-2.063c-4.866-3.84-3.08-7.885-3-8.055.045-.1.104-.19.173-.274l.746-.89-2.267-1.9a466.3 466.3 0 0 1-1.37 1.622 1 1 0 0 1-.06.08l-.006-.003a1.41 1.41 0 0 1-.12.132 1.226 1.226 0 0 1-2.015-.68c-.83-1.13-5.47-5.268-6.346-5.956-2.072-1.636-4.307-2.877-6.674-4.192l-.954-.53c-3.214-1.798-6.524-3.93-10.117-6.52l-.494-.354c-5.72-4.11-16.365-11.76-13.743-20.02zm51.974 32.82l-1.465 1.747 19.78 16.59 1.465-1.746L72.99 37.39zM62.88 54.685c-.35-.254-.963-.095-1.417.083-1.767.693-3.483 2.018-4.37 3.374-.5.764-.51 1.41-.357 1.607.118.145.578.18 1.238-.04l.213-.075c.81-.28 1.71-.587 2.568-.41.222.044.44.122.655.242.44.24.776.617 1.01 1.12 1.02-1.45 1.194-2.478 1.197-2.477.095-1.69-.194-3.033-.738-3.427zm3.178 3.6c0 .01 0 .02-.002.032-.03.272-.378 2.737-3.286 5.62-.102.1-.216.178-.338.236a2.51 2.51 0 0 1-.02.077l-.164.477c-1.22 3.507-.92 4.237-.81 4.37 0 .002.1.052.392.02.364-.035.77-.277 1.084-.485 2.56-1.69 4.63-5.174 5.154-8.67.136-.914.14-2.018-.157-2.857l-1.85 1.178zm4.345-1.335c.308 1.333.192 2.672.087 3.374-.296 1.977-1.003 3.913-1.985 5.635.56.28 1.138.38 1.75.27 2.6-.46 5.31-4.13 6.525-6.13l-5.183-4.348-1.194 1.195zM68.8 50.21l13.715 11.51a6.2 6.2 0 0 0 1.537.553c1.496.307 2.023-.322 2.196-.528l3.47-4.14-19.772-16.59-2.11 2.515-1.403 1.673c-.165.52-.606 2.668 2.364 5.01zm-2.052-9.195l.982-1.17-2.266-1.9-.982 1.17 2.266 1.9zM36.184 22.603l.497.358c3.52 2.538 6.75 4.62 9.88 6.37l.95.53c2.35 1.302 4.776 2.65 7.005 4.406.054.043 4.063 3.34 6.102 5.65l3.76-4.48v-.002l.858-1.022c-4.554-2.603-10.847-9.502-11.186-9.88C41.357 8.78 33.38 4.384 28.927 3.47c-3.34-.683-4.846.552-5.11.803a5.1 5.1 0 0 0-.47 1.043c-2.086 6.565 7.993 13.81 12.836 17.29z"/><path d="M74.988 4.57a7.58 7.58 0 0 0-.783-1.69 1.136 1.136 0 0 0-.103-.14c-.094-.113-2.358-2.73-7.52-1.67C59.53 2.514 50.6 9.89 40.092 22.936c-2.142 2.36-8.42 8.738-11.684 9.89a1.225 1.225 0 0 0-.53 1.943l1.087 1.293-2.266 1.902-2.596-3.09a1.226 1.226 0 0 0-1.725-.152L.727 52.89a1.224 1.224 0 0 0-.152 1.726l3.04 3.62v.002l.002.003 4.258 5.078c1.057 1.26 2.678 1.742 4.565 1.355a8.44 8.44 0 0 0 2.355-.876 1.22 1.22 0 0 0 .17-.12l2.36-1.98c1.29 2.067 4.334 6.302 7.994 6.95.665.12 1.322.112 1.96-.018A5.405 5.405 0 0 0 28.88 68c.85 1.06 1.81 1.985 2.855 2.676.547.362 1.292.79 2.187.88.413.04.77.02 1.08-.044a2.457 2.457 0 0 0 1.47-.89c1.232-1.56.436-4.276-.407-6.702l-.134-.383c-.268-.965-.26-1.45-.204-1.687a1.22 1.22 0 0 1 .07-.23c.26.002.85.205 1.216.33l.22.076c2.4.812 3.568-.277 3.96-.782.88-1.134.783-2.88-.243-4.447-1.165-1.78-3.282-3.43-5.525-4.31-1.85-.725-3.06-.285-3.747.212-.887.64-1.355 1.664-1.583 2.78l-1.735-1.106a1.222 1.222 0 0 0-1.53.174c-.03.03-.048.066-.076.097l-.475-.474 2.46-2.063c4.866-3.84 3.08-7.885 3-8.055a1.213 1.213 0 0 0-.173-.274l-.746-.89 2.267-1.9a466.3 466.3 0 0 0 1.37 1.622 1 1 0 0 0 .06.08l.006-.003c.092.106.104.12.12.132a1.226 1.226 0 0 0 2.015-.68c.83-1.13 5.47-5.268 6.346-5.956 2.072-1.636 4.307-2.877 6.674-4.192l.954-.53c3.214-1.798 6.524-3.93 10.117-6.52l.494-.354c5.72-4.11 16.365-11.76 13.743-20.02zM23.014 37.39l1.465 1.747L4.7 55.727 3.24 53.98l19.774-16.59zM33.12 54.685c.35-.254.963-.095 1.417.083 1.767.693 3.483 2.018 4.37 3.374.5.764.51 1.41.357 1.607-.118.145-.578.18-1.238-.04l-.213-.075c-.81-.28-1.71-.587-2.568-.41-.222.044-.44.122-.655.242-.44.24-.776.617-1.01 1.12-1.02-1.45-1.194-2.478-1.197-2.477-.095-1.69.194-3.033.738-3.427zm-3.178 3.6c0 .01 0 .02.002.032.03.272.378 2.737 3.286 5.62.102.1.216.178.338.236l.02.077.164.477c1.22 3.507.92 4.237.81 4.37 0 .002-.1.052-.392.02-.364-.035-.77-.277-1.084-.485-2.56-1.69-4.63-5.174-5.154-8.67-.136-.914-.14-2.018.157-2.857l1.85 1.178zm-4.345-1.335c-.308 1.333-.192 2.672-.087 3.374.296 1.977 1.003 3.913 1.985 5.635-.56.28-1.138.38-1.75.27-2.6-.46-5.31-4.13-6.525-6.13l5.183-4.348 1.194 1.195zm1.604-6.74L13.488 61.72a6.2 6.2 0 0 1-1.537.553c-1.497.307-2.024-.322-2.197-.528l-3.47-4.14 19.772-16.59 2.11 2.515 1.403 1.673c.165.52.606 2.668-2.364 5.01zm2.055-9.195l-.982-1.17 2.267-1.9.98 1.17-2.266 1.9zM59.82 22.603l-.498.358c-3.515 2.538-6.75 4.62-9.88 6.37l-.947.53c-2.348 1.302-4.775 2.65-7.004 4.406-.054.043-4.063 3.34-6.102 5.65l-3.76-4.48v-.002l-.858-1.022c4.553-2.603 10.846-9.502 11.185-9.88C54.645 8.78 62.618 4.384 67.075 3.47c3.337-.683 4.843.552 5.11.803.2.34.357.69.47 1.043 2.083 6.565-7.996 13.81-12.84 17.29z"/></g></svg>
      </div>
      <h1>
          <?php bloginfo( 'name' ); ?>
      </h1>
      <h2>
          <?php bloginfo('description'); ?>
      </h2>    
</div> <!-- /.hero-container -->
<div class="content-main">
  
<!-- Start of the loop for the content of the main page -->
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="content-text">
        <?php the_content(); ?>
      </div>
      <div class="content-image">
<!-- Couldn't use the main feature image in the dashboard = thumbnail != feature image -->
<!-- Adding different features images on the page - link to the plugin Dynamic Featured Image -->
<!-- Start of the Loop for the images -->
      <?php if( class_exists('Dynamic_Featured_Image') ) { ?>
       <?php global $dynamic_featured_image; ?>
       <?php $featured_images = $dynamic_featured_image->get_featured_images( ); ?>
       <?php foreach ($featured_images as $value) { ?>
<!-- Featured_images as value give back the url of the images -->
        <div class="featureImagecontainer">
        <img class="featuredImage" src="<?= $value['full'] ?>" >
         <div class="overlay">
          <p>Blog</p>
         </div>
        </div>
      <?php } } ?>
    <?php endwhile; // end the loop?>
     </div>
     </div><!-- /.wrapper -->
</div>
<?php get_footer(); ?>