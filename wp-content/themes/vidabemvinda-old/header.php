<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    <meta charset="utf-8">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/modernizr-custom.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lib/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lib/slick.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/component.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.custom.js"></script>
<style type="text/css">
  
  html {
    margin-top: 0 !important;
}

</style>

    <!--[if IE 8]>
        <body class="ie ie8"></body><![endif]--><!--[if IE 9]>
        <body class="ie ie9"></body><![endif]-->

  </head>
  <body>
    <!-- HEADER-->
    <div class="box-branco-mobile" style="display: none;"></div>



    <div class="modal-especialista-completo">
        <div class="modal-especialista"></div>
        <div class="box-especialista">
            <h2>mais informações
            <span>do tratamento?</span></h2>
            <p>Quer saber o preço e outras informações sobre este tratamento? Nós queremos ser parte dessa solução e tornar <span>SEU SONHO</span> uma realidade.</p>
            <i class="fa fa-times fechar-especialista" aria-hidden="true"></i>
             <?php echo do_shortcode('[contact-form-7 id="94" title="Fale com os Especialistas"]' ); ?>
            <!--<form>
                
                <input type="text" name="" placeholder="Nome Completo*">
                <input type="text" name="" placeholder="Telefone/Celular com DDD*">
                <input type="text" placeholder="Seu E-mail*">
                <textarea placeholder="Gostaria de acrescentar alguma informação ou dúvida?"></textarea>
                <input type="submit" name="" value="ENVIAR" class="bt-enviar">
            </form>-->
        </div>
    </div>


    <div class="modal-ebook-completo">
        <div class="modal-ebook"></div>
        <div class="box-ebook">
            <h2>PREENCHA O FORMULÁRIO
            <span>PARA BAIXAR NOSSO E-BOOK</span></h2>
            <p>adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>  <i class="fa fa-times fechar-ebook" aria-hidden="true"></i>
 <?php echo do_shortcode('[contact-form-7 id="97" title="Baixe o Ebook"]' ); ?>
           <!-- <form>
              
                <input type="text" name="" placeholder="Nome Completo*">
                <input type="text" name="" placeholder="Telefone/Celular com DDD*">
                <input type="text" placeholder="Seu E-mail*">
                <input type="text" placeholder="11+4 = ?">
                <input type="submit" name="" value="ENVIAR" class="bt-enviar">
            </form> -->
        </div>
    </div>

    <div class="modal-mais-completo">
        <div class="modal-mais"></div>
        <div class="box-mais">
            <h2>mais informações
            <span>do tratamento?</span></h2>
            <p>Quer saber o preço e outras informações sobre este tratamento? Nós queremos ser parte dessa solução e tornar <span>SEU SONHO</span> uma realidade</p>
             <i class="fa fa-times fechar-mais" aria-hidden="true"></i>
             <?php echo do_shortcode('[contact-form-7 id="98" title="Fale Conosco - Mais Informações"]' ); ?>

         <!--   <form>
               
                <input type="text" name="" placeholder="Nome Completo*">
                <input type="text" name="" placeholder="Telefone/Celular com DDD*">
                <input type="text" placeholder="Seu E-mail*">
                <input type="text" placeholder="11+4 = ?">
                <input type="submit" name="" value="ENVIAR" class="bt-enviar">
            </form> -->
        </div>
    </div>

    
    <div class="menu-fixo">
    <div id="headerMain">
      <div class="gridD">
        <div class="top-info">
          <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="Logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo Vida Bem vinda"></a></div>
          <div class="adress-top">
            <div class="topic-adress">
              <div class="icon-adress"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title Telefones-->
                 <p>Telefone:</p>
                <p>11 2114.6610</p>
              </div>
            </div>
            <div class="topic-adress">
              <div class="icon-adress"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title Telefones-->
                <p>Whatsapp:</p>
                <p>11 99021.8803</p>
              </div>
            </div>
            <div class="topic-adress">
              <div class="icon-adress">
              <i class="fa fa-envelope" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title E-mail-->
                <p>E-mail:</p>
                <p>contato@vidabemvinda.com.br</p>
              </div>
            </div>
            <div class="topic-adress bloco-face-menu">
              <div class="icon-adress"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            </div>
            <div class="topic-adress">
              <div class="icon-adress"><i class="fa fa-youtube" aria-hidden="true"></i></div>
            </div>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-usp-topo.jpg" class="usp-topo">
          </div>


          <!--<div class="social-header">


            <div class="icon-header"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
            <div class="icon-header"><a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
            <div class="icon-header"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></div>
          </div> -->
          <div class="btn-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
      <div id="navMain">
        <div class="gridD">

          <nav>
            <ul>
                <li><a title="Doenças" alt="Doenças" href="">Doenças</a>
                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
              <ul class="sub-nav">
                  <?php 
                    $args = array( 'post_type' => 'doencas', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <li class="sub-nav-mobile">
              <a title="Cirurgias" alt="Cirurgias" href="cirurgias.php">Cirurgias</a>

                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <ul class="sub-nav">
                  <?php 
                    $args = array( 'post_type' => 'cirurgias', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                   <?php endwhile; ?>
                </ul>
              </li>
            
              <li class="sub-nav-mobile"><a title="Cirurgias" alt="Cirurgias" href="equipe.php">Equipe</a>
              
                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <ul class="sub-nav">
                  <li><a href="espaco">Nosso Espaço</a></li>
                  <?php 
                    $args = array( 'post_type' => 'equipe', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <li><a href="blog" title="Blog" alt="Blog">Blog</a></li>

              <li class="last"><a title="Agende" alt="Agende" class="abrir-mais"><i class="fa fa-envelope" aria-hidden="true"></i> Fale Conosco</a></li>
            </ul>
            <div class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></div>
          </nav>
        </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
      <div class="overlay-body"></div>

          <div id="dl-menu" class="dl-menuwrapper">
            <button id="nav-icon1" class="dl-trigger">
              <span></span>
              <span></span>
              <span></span>
            </button>

            <ul class="dl-menu">
              <li>
                <a href="#">Doenças</a>
                <ul class="dl-submenu">
                                   <?php 
                    $args = array( 'post_type' => 'doencas', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <li>
                <a href="#">Cirurgias</a>
                <ul class="dl-submenu">
                  <?php 
                    $args = array( 'post_type' => 'cirurgias', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                   <?php endwhile; ?>
                </ul>
              </li>
              <li>
                <a href="#">Equipe</a>
                <ul class="dl-submenu">
                    <li><a href="espaco">Nosso Espaço</a></li>
                  <?php 
                    $args = array( 'post_type' => 'equipe', 'posts_per_page' => 100 );
                    $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <li>
                <a href="#">Blog</a>
              
              </li>
                    <li class="last fale-conosco"><a title="Agende" alt="Agende" class="abrir-mais "><i class="fa fa-envelope" aria-hidden="true"></i> Fale Conosco</a></li>
            </ul>
          </div>
    </div>










