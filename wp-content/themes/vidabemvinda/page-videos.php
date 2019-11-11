<?php 

/*
Template Name: Videos
*/

get_header(); 

?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
 <div class="breadcrumbs">
      <div class="gridD"><a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a><a href="#">Videos</a></div>
      <div class="clearfix"></div>
    </div>
    <section class="videos">
      <?php $args = array( 'post_type' => 'videos', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
      <div class="box-video">
        <iframe width="391" height="220" src="https://www.youtube.com/embed/Ry_SvlOiJjA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <h2>lorem impsum sit: dolor amet</h2>
        <p class="data">15 de setembro de 2017</p>
        <p class="descricao">Não carregue muito peso. Parece que todos hoje em dia estão passando por algum momento delicado e, na maioria das vezes, esse tipo de situação é prejudicial.</p>
      </div>
      <?php endwhile; ?>
    </section>
  <?php endwhile; else: ?>
<?php get_footer(); ?>