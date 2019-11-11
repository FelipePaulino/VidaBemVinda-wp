<div class="right">
  <h3>Últimos Posts</h3>
  <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
  <a href="<?php the_permalink(); ?>" class="ultimos-posts">
    <h5><?php the_title(); ?></h5>
    <p><?php echo get_the_date(); ?></p>
  </a>
  <?php endwhile; ?>

  <h3 style="margin-top: 50px;">Categorias</h3>
  <ul>
            <?php
          $args=array(
            'orderby' => 'name',
            'order' => 'ASC'
            );
          $categories=get_categories($args);
            foreach($categories as $category) { 
              echo '<li> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name. '<span>'.'</span>  </a> </li> ';
              } 
          ?>
  </ul>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-post.jpg" class="banner-sidebar">
</div>