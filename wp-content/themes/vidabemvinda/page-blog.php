<?php 

/*
Template Name: Blog
*/

get_header(); 

?>		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="breadcrumbs">
      <div class="gridD">
      <a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="#"><?php the_title(); ?></a></div>
      <div class="clearfix"></div>
    </div>
  <div class="gridD blog">
    <div class="left">



    <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
      <div class="previa-post">
       <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('imagem-page-blog'); ?></a>
       <a href="<?php the_permalink(); ?>"> <h2><span></span><?php the_title(); ?></h2></a>
        <div class="data">
          <p><?php echo get_the_date(); ?></p>
          <div class="linha"></div>
        </div><div class="clearfix"></div>
        <p><?php the_excerpt(); ?>
        <a class="leia-mais" href="<?php the_permalink(); ?>">Ler Mais</a></p>
      </div>  <div class="clearfix"></div>
      <?php endwhile; ?>





      
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
		