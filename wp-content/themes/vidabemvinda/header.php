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

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lib/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lib/slick.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/component.css" />

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
            <span>dos tratamentos?</span></h2>
            <p>Deseja saber o preço e outras informações sobre este tratamento? Podemos ajuda-la! </p>
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
            <span>BAIXE NOSSO E-BOOK</span></h2>
            <p>Quer saber mais sobre as principais causas e opções de tratamento para a infertilidade? É só baixar nosso e-book para que você adquira conhecimento e mantenha-se informado.</p>  <i class="fa fa-times fechar-ebook" aria-hidden="true"></i>
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
          <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para Home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo Vida Bem vinda" title="Ir para Home"></a></div>
          <div class="adress-top">
            <div class="topic-adress">
              <div class="icon-adress"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title Telefones-->
                 <!-- <p>Telefone:</p> -->
                <p><a href="tel:1131499455" title="Ligar para Vida Bem Vinda">   (11) 3149.9455</a></p>
              </div>
            </div>
            <div class="topic-adress">
              <div class="icon-adress"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title Telefones-->
                <!-- <p>Whatsapp:</p> -->
                <p><a href="https://api.whatsapp.com/send?phone=5511990218803" title="Ir para WhatsApp"> (11) 99021.8803</a></p>
              </div>
            </div>
            <div class="topic-adress">
              <div class="icon-adress">
              <i class="fa fa-envelope" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title E-mail-->
                <!-- <p>E-mail:</p> -->
                <p><a href="mailto:contato@vidabemvinda.com.br" title="Enviar E-mail" style="font-size: 14px;"> contato@vidabemvinda.com.br</a></p>
              </div>
            </div>
            <a href="http://www.facebook.com/VidaBemVinda" title="Ir para Facebook">
              <div class="topic-adress bloco-face-menu">
                <div class="icon-adress"><i class="fa fa-facebook" aria-hidden="true"></i></div>
              </div>
            </a>
            <a href="http://www.youtube.com/vidabemvinda" title="Ir para YouTube">
              <div class="topic-adress bloco-youtube-menu">
                <div class="icon-adress"><i class="fa fa-youtube" aria-hidden="true"></i></div>
              </div>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-usp-topo.jpg" class="usp-topo" alt="Universidade de São Paulo" title="Universidade de São Paulo">
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
                <li><a title="Doenças" title="Doenças">Doenças</a>
                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <div class="sub-nav-tudo">
              <ul class="sub-nav first">
                  
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>endometriose/" title="Ir para Endometriose ">Endometriose</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>incontinencia-urinaria-de-esforco/" title="Ir para Incontinência Urinária ">Incontinência Urinária</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>miomas-uterinos/" title="Ir para Miomas Uterinos ">Miomas Uterinos</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>prolapso-genital/" title="Ir para Prolapso Genital ">Prolapso Genital</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>adenomiose/" title="Ir para Adenomiose ">Adenomiose</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>rotura-perineal/" title="Ir para Rotura Perineal ">Rotura Perineal</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>polipos-uterinos/" title="Ir para Pólipos Uterinos">Pólipos Uterinos</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>hipertrofia-de-pequenos-labios/" title="Ir para Hipertrofia de pequenos lábios ">Hipertrofia de pequenos lábios</a></li>
                  
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sinequias-uterinas/" title="Ir para Sinéquias Uterinas">Sinéquias Uterinas</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>malformacoes-uterinas/" title="Ir para Malformações Uterinas ">Malformações Uterinas</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cistos-de-ovario/" title="Ir para Cistos de ovário ">Cistos de Ovário</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cisto-bartholhin/" title="Ir para Cisto de Bartholhin  ">Cisto de Bartholhin </a></li> 
   
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>hidrossalpinge/" title="Ir para Hidrossalpinge ">Hidrossalpinge</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>aderencias-pelvicas/" title="Ir para Aderências pélvicas ">Aderências pélvicas</a></li> 
                         

                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gestacao-ectopica/" title="Ir para Gestação ectópica ">Gestação Ectópica</a></li>

                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alteracoes-do-colo-do-utero-nic-ou-lesao-intraepitelial-de-baixo-e-alto-grau/" title="Ir para NIC ou Lesão Intraepitelial ">NIC ou Lesão Intraepitelial</a></li>
                  


                
             
                       
                  
                    
               
                   
                 
                  
                 
                  
               <!--   </ul>
              <ul class="sub-nav second"> -->
                  
                  
             
             
                
                 
                  
              
                  <li></li>

                </ul>
                </div>
              </li>
              <li class="sub-nav-mobile">
              <a title="Cirurgias" alt="Cirurgias">Cirurgias</a>

                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <ul class="sub-nav">
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>laparoscopia/" title="Ir para Laparoscopia ">Laparoscopia</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>histeroscopia/" title="Ir para Histeroscopia ">Histeroscopia</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>robotica/" title="Ir para Robótica">Robótica</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>laqueadura-tubaria/" title="Ir para Laqueadura Tubária ">Laqueadura Tubária</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cirurgias-vaginais/" title="Ir para Cirurgias vaginais ">Cirurgias vaginais</a></li>
                   
                    
                    
                    
                </ul>
              </li>
            
              <li class="sub-nav-mobile"><a title="Cirurgias" alt="Cirurgias">Equipe</a>
              
                <div class="icon-nav"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <ul class="sub-nav">
                    
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>angelica/" title="Ir para Dra. Angélica Danielle">Dra. Angélica Danielle</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>beatriz/" title="Ir para Dra. Beatriz Madid">Dra. Beatriz Madid</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fernanda/" title="Ir para Dra. Fernanda Imperial">Dra. Fernanda Imperial </a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dra-lais-yamakami/" title="Ir para Dra. Lais Yamakami">Dra. Lais Yamakami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>larissa/" title="Ir para Dra. Larissa Matsumoto">Dra. Larissa Matsumoto</a></li>
                    
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dr-lucas-yamakami/" title="Ir para Dr. Lucas Yamakami">Dr. Lucas Yamakami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>oscar/" title="Ir para Dr. Oscar Barbosa">Dr. Oscar Barbosa </a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dr-renato-tomioka/" title="Ir para Dr. Renato Tomioka">Dr. Renato Tomioka</a></li>
                </ul>
              </li>

              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>espaco" title="Ir para Nosso Espaço">Nosso Espaço</a></li>

              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" title="Blog" alt="Blog">Blog</a></li>

               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>videos" title="Videos" alt="Videos">Videos</a></li>

              <li class="last"><a title="Agende" alt="Agende" class="abrir-especialista"><i class="fa fa-envelope" aria-hidden="true"></i> Fale Conosco</a></li>
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
                <ul class="dl-submenu" style="overflow: scroll;">
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>adenomiose/" title="Ir para Adenomiose ">Adenomiose</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>aderencias-pelvicas/" title="Ir para Aderências pélvicas ">Aderências pélvicas</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alteracoes-do-colo-do-utero-nic-ou-lesao-intraepitelial-de-baixo-e-alto-grau/" title="Ir para NIC ou Lesão Intraepitelial ">NIC ou Lesão Intraepitelial</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cistos-de-ovario/" title="Ir para Cistos de ovário ">Cistos de Ovário</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>endometriose/" title="Ir para Endometriose ">Endometriose</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gestacao-ectopica/" title="Ir para Gestação ectópica ">Gestação Ectópica</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>hidrossalpinge/" title="Ir para Hidrossalpinge ">Hidrossalpinge</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>hipertrofia-de-pequenos-labios/" title="Ir para Hipertrofia de pequenos lábios ">Hipertrofia de pequenos lábios</a></li>
               <!--   </ul>
              <ul class="sub-nav second"> -->
                  
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>incontinencia-urinaria-de-esforco/" title="Ir para Incontinência Urinária ">Incontinência Urinária</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>malformacoes-uterinas/" title="Ir para Malformações Uterinas ">Malformações Uterinas</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>miomas-uterinos/" title="Ir para Miomas Uterinos ">Miomas Uterinos</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>polipos-uterinos/" title="Ir para Pólipos Uterinos">Pólipos Uterinos</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>prolapso-genital/" title="Ir para Prolapso Genital ">Prolapso Genital</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>rotura-perineal/" title="Ir para Rotura Perineal ">Rotura Perineal</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sinequias-uterinas/" title="Ir para Sinéquias Uterinas">Sinéquias Uterinas</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Cirurgias</a>
                <ul class="dl-submenu">
                   <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cirurgias-vaginais/" title="Ir para Cirurgias vaginais ">Cirurgias vaginais</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>histeroscopia/" title="Ir para Histeroscopia ">Histeroscopia</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>laparoscopia/" title="Ir para Laparoscopia ">Laparoscopia</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>laqueadura-tubaria/" title="Ir para Laqueadura Tubária ">Laqueadura Tubária</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>robotica/" title="Ir para Robótica">Robótica</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Equipe</a>
                <ul class="dl-submenu">
                   <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>espaco" title="Ir para Nosso Espaço">Nosso Espaço</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dr-lucas-yamakami/" title="Ir para Dr. Lucas Yamakami">Dr. Lucas Yamakami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dra-lais-yamakami/" title="Ir para Dra. Lais Yamakami">Dra. Lais Yamakami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dr-renato-tomioka/" title="Ir para Dr. Renato Tomioka">Dr. Renato Tomioka</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a>
              
              </li>
                    <li class="last fale-conosco"><a title="Agende" alt="Agende" class="abrir-mais "><i class="fa fa-envelope" aria-hidden="true"></i> Fale Conosco</a></li>
            </ul>
          </div>
    </div>










