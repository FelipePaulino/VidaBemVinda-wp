		<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="breadcrumbs">
      <div class="gridD">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="blog">Blog <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="#"><?php the_title(); ?></a></div>
      <div class="clearfix"></div>
    </div>
  <div class="gridD blog">
    <div class="left">
      <div class="post-inteiro">
        <?php the_post_thumbnail('imagem-page-blog'); ?>
        <h2><span></span><?php the_title(); ?></h2>
        <div class="data">
          <p><?php echo get_the_date(); ?></p>
          <div class="linha"></div>
        </div><div class="clearfix"></div>
        <p><?php the_content(); ?></p>
      </div>  <div class="clearfix"></div>

    </div>

   <?php get_sidebar(); ?>

  </div>
<div class="clearfix"></div>
<?php include('includes/especialistas.php') ?>

           	 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
	<?php get_footer(); ?>
