		<?php get_header(); ?>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
      <div class="gridD">
      <a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="#">Doenças <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <a href="#"> <?php the_title(); ?></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <section>
      <div class="tratamento">
        <div class="gridD">
          <div class="title-page">
            <h2><span></span> <?php the_title(); ?></h2>
            <div class="line-gray"></div>
          </div>
          <div class="left">
          <div class="player"><iframe src="https://player.vimeo.com/video/202791609" width="550" height="309"  frameborder="0"></iframe></div>
            <p><?php the_content(); ?></p>
            <div class="clearfix"></div>
            <div class="cta"><a class="abrir-especialista">pergunte aos especialistas</a></div>
           <div class="more-informations"></div>
          </div>
          <div class="right">
            <div class="formulario-lateral">
            <div class="more-informations">
             
                <legend><span>mais informações</span> <br> do tratamento?</legend>
                <p class="text-form">Quer saber o preço e outras informações sobre este tratamento? Nós queremos ser parte dessa solução e tornar SEU SONHO uma realidade.</p>
                 <?php echo do_shortcode('[contact-form-7 id="94" title="Fale com os Especialistas"]' ); ?>
               <!-- <form>
                <input type="text" placeholder="Nome Completo*">
                <input type="text" placeholder="Telefone/Celular com DDD*">
                <input type="text" placeholder="Seu E-mail*">
                <textarea placeholder="Gostaria de acrescentar alguma informação ou dúvida?"></textarea>
                <button type="submit">enviar</button>
              </form> -->
            </div>
            </div>
            <div class="clearfix"></div>
            
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <section>
      <div class="accordion-sec">
        <div class="gridD">
          <h2>PRINCIPAIS DÚVIDAS <span>SOBRE <?php the_title(); ?></span></h2>
          <div class="border"></div>
          <div class="left">
            <div class="accord">
              <div class="accordion">
                <div class="accordion-section"><a class="accordion-section-title" href="#accordion-1"><?php echo rwmb_meta('duvida1-titulo');?><span class="icon"></span></a>
                  <div id="accordion-1" class="accordion-section-content">
                    <p><?php echo rwmb_meta('duvida1-conteudo');?></p>
                  </div>
                </div>
                <div class="accordion-section"><a class="accordion-section-title" href="#accordion-2"><?php echo rwmb_meta('duvida2-titulo');?><span class="icon"></span></a>
                  <div id="accordion-2" class="accordion-section-content">
                    <p><?php echo rwmb_meta('duvida2-conteudo');?></p>
                  </div>
                </div>
                <div class="accordion-section"><a class="accordion-section-title" href="#accordion-3"><?php echo rwmb_meta('duvida3-titulo');?><span class="icon"></span></a>
                  <div id="accordion-3" class="accordion-section-content">
                    <p><?php echo rwmb_meta('duvida3-conteudo');?></p>
                  </div>
                </div>
                <div class="accordion-section">
                <a class="accordion-section-title active" href="#accordion-4"><?php echo rwmb_meta('duvida4-titulo');?><span class="icon"></span></a>
                  <div id="accordion-4" class="accordion-section-content open" style="display: block;">
                    <p><?php echo rwmb_meta('duvida4-conteudo');?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo-cirurgia.jpg" alt=""></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <section class="box-tratamentos">
      <div class="gridD">
      <div class="carrosel-tratamentos">
		<?php 
		$args = array( 'post_type' => 'doencas', 'posts_per_page' => 100 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?>
        <div class="previa-tratamento">
          <h2>TRATAMENTOS<span> de <?php the_title(); ?></span></h2>
          <p><?php the_content(); ?></p>

        </div>
        <?php endwhile; ?>
       
        </div>
        <div class="tratamento">
                  <div class="right">
                    <div class="formulario-lateral">
            <div class="more-informations">
       
                <legend><span>mais informações</span> <br> do tratamento?</legend>
                <p class="text-form">Quer saber o preço e outras informações sobre este tratamento? Nós queremos ser parte dessa solução e tornar SEU SONHO uma realidade.</p>
                 <?php echo do_shortcode('[contact-form-7 id="94" title="Fale com os Especialistas"]' ); ?>
                 <!-- <form>
                <input type="text" placeholder="Nome Completo*">
                <input type="text" placeholder="Telefone/Celular com DDD*">
                <input type="text" placeholder="Seu E-mail*">
                <textarea placeholder="Gostaria de acrescentar alguma informação ou dúvida?"></textarea>
                <button type="submit">enviar</button>
              </form> -->
            </div>
            </div>
      </div>  
      </div>
    </section>
           <div class="clearfix"></div>
           	 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
  <?php include('includes/ebook.php') ?>
<?php get_footer(); ?>