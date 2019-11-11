		<?php get_header(); ?>

		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="breadcrumbs">
      <div class="gridD"><a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a><a href="#">Cirurgiões <i class="fa fa-chevron-right" aria-hidden="true"></i></a><a href="#">Dr. Renato Tomioka</a></div>
      <div class="clearfix"></div>
    </div>
    <section>
      <div class="doctor-desc">
        <div class="gridD">
          <div class="left">
          <?php the_post_thumbnail('foto-doutor'); ?>
            <div class="bar-divisor"></div>
          </div>
          <div class="right">
            <h2><span></span><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <h2><span>especialidades </span><br>atuantes</h2>
            <p><?php echo rwmb_meta('introducao-especialidades');?></p>
             <ul>
              
              <?php  
                    $values = rwmb_meta( 'especialidade' );
                    foreach ( $values as $value ) {

                    echo  ' <li> <a href='. $value[1].'>'; 
                    echo  $value[0]. '</a></li>'; 
                  }
                ?>
              <!--<li><a href="#">Vitaminas e Fertilidade</a></li>
              <li><a href="#">Drogas e Infertilidade</a></li>
              <li><a href="#">Obesidade e Infertilidade</a></li>
              <li><a href="#">Cigarro e Fertilidade</a></li>
              <li><a href="#">Varicocele</a></li>
              <li><a href="#">Azoospermia</a></li>
              <li><a href="#">Técnicas de Captação de Espermatozóides</a></li>
              <li><a href="#">Biópsia Testicular</a></li>
              <li><a href="#">Highlights</a></li> 
            </ul>
            <ul>
              <li><a href="#">Infertilidade Masculina</a></li>
              <li><a href="#">Vitaminas e Fertilidade</a></li>
              <li><a href="#">Drogas e Infertilidade</a></li>
              <li><a href="#">Obesidade e Infertilidade</a></li>
              <li><a href="#">Cigarro e Fertilidade</a></li>
              <li><a href="#">Varicocele</a></li>
              <li><a href="#">Azoospermia</a></li>
              <li><a href="#">Técnicas de Captação de Espermatozóides</a></li>
              <li><a href="#">Biópsia Testicular</a></li>
              <li><a href="#">Highlights</a></li>-->
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>

    <section>
      <div class="formacao">
        <div class="gridD">
          <div class="left">
            <h2><span>CURRÍCULUM E </span><br>Formação</h2>
            <p><?php echo rwmb_meta('introducao-curriculo');?></p>
               <?php  
                    $values = rwmb_meta( 'formacao' );
                    foreach ( $values as $value ) {
                    echo '<p>'. $value[0]. '</p>'; 
                  }
                ?>
          </div>
          <div class="right" style="padding-top: 0;">
            
            <h2><span>Diplomas e</span><br> Certificados</h2>
              <div class="certificado">
              <?php  
                rwmb_the_value( 'foto-certificado', array( 
                  'size' => 'thumb-certificado',
                   'title' => 'Logo' ) );
              ?>
              <div class="textos-certificado">
              <?php  
                    $values = rwmb_meta( 'descricao-certificado' );
                    foreach ( $values as $value ) {

                    echo  '<div class="texto-individual-cert">
                    <h4>'. $value[0].'</h4>'; 
                    echo  '<p>'. $value[1]. '</p></div>'; 
                  }
                ?>
              </div>




         <!--         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>-->
              </div>
             <!--  <div class="certificado">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>
              </div>
              <div class="certificado">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>
              </div>
              <div class="certificado">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>
              </div>
              <div class="certificado">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>
              </div>
              <div class="certificado">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificado.jpg">
                  <h4>Lorem ipsum dolor sit amet,</h4>
                  <p>consectetur adipisicing.</p>
              </div>-->
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

     
      <?php include('includes/locais-atuacao.php') ?>


           	 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
  <?php include('includes/ebook.php') ?>
<?php get_footer(); ?>