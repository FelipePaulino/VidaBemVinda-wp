<?php 



get_header(); 

?>		

<div class="breadcrumbs">
      <div class="gridD">
      <a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="#">Blog</a></div>
      <div class="clearfix"></div>
    </div>
  <div class="gridD blog">
    <div class="left">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="previa-post">
        <?php the_post_thumbnail('imagem-page-blog'); ?>
        <h2><span></span><?php the_title(); ?></h2>
        <div class="data">
          <p><?php echo get_the_date(); ?></p>
          <div class="linha"></div>
        </div><div class="clearfix"></div>
        <p><?php the_excerpt(); ?>
        <a class="leia-mais" href="<?php the_permalink(); ?>">Ler Mais</a></p>
      </div>  <div class="clearfix"></div>
             <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>





      
    </div>
      <?php get_sidebar(); ?>

  </div>
<div class="clearfix"></div>
<?php include('includes/especialistas.php') ?>
		


		<?php get_footer(); ?>
		