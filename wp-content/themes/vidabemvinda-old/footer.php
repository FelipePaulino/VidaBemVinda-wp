
    <section class="bg-form-home">
      <div class="gridD">
        <div class="topic-six">
          <div class="left-topic">
            <h3>agendamento de consulta</h3>
            <h2>queremos ser parte da sua felicidade</h2>
            <p>A disponibilidade da consulta na data e hora solicitada, deverá ser confirmada por nossos atendentes de acordo com as disponibilidades. Amet, consectetur, adipisci velit, sed quia non numquam eius m.mpora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            <a href="#" style="display: none;" class="agendar-consulta">Agendar</a>

    <?php echo do_shortcode('[contact-form-7 id="92" title="Formulário de contato 1"]' ); ?>
           
         <!--  <form>
              <div class="input6-12">
                <label>*Seu Nome Completo</label>
                <input type="text">
              </div>
              <div class="input6-12">
                <label>Telefone/Celular com DDD*</label>
                <input type="text">
              </div>
              
              <div class="input6-12">
                <label>*Seu E-mail</label>
                <input type="text">
              </div>
              
              <div class="input12-12">
              <label>Gostaria de acrescentar alguma informação ou dúvida?...</label>
                <textarea></textarea>
              </div>
              <input type="submit">Enviar dados</input>
            </form> -->
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
    <!-- FOOTER-->
    <section>
      <div class="gridD">

        <div class="topic-seven">
          <div class="title-newsletter">  <i class="fa fa-envelope" aria-hidden="true"></i>
            <h2>Nossa  Newsletter</h2>
          </div>
          <div class="form-newsletter">
         <?php echo do_shortcode(' [contact-form-7 id="93" title="Newsletter"]'); ?>
           <!-- <form>

              <input type="text" placeholder="Acrescente seu e-mail">
              <input type="submit" value="Cadastrar">
            </form>-->
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </section>
    <section>
      <div class="gridD">
        <div class="topic-eight">


          <div class="adress-top">
            <div class="topic-adress">
              <div class="icon-adress">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
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
            <div class="topic-adress" style="width: 25%;">
              <div class="icon-adress">
              <i class="fa fa-envelope" aria-hidden="true"></i></div>
              <div class="desc-adress">
                <!--p.title E-mail-->
                <p>E-mail:</p>
                <p>contato@vidabemvinda.com.br</p>
              </div>
            </div>
                        <div class="topic-adress" style="width: 32%; margin-right: 0;"  >
              <div class="icon-adress">
             <i class="fa fa-location-arrow" aria-hidden="true"></i></div>
              <div class="desc-adress" style="width: 80%">
                <!--p.title E-mail-->
                <p>Endereço:</p>
                <p>
Rua Turiassu, 127, Conjunto 13<br>
Perdizes | Cep: 03182040 | São Paulo / SP</p>
              </div>
            </div>
          




        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </section>
    <footer>
      <div class="gridD">
        <div class="topic-footer">
          <div class="logo-footer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vida-bem-vinda-rodape.jpg" alt=""></div>
          <div class="desc-footer">
            <p>The graphic below provides best of framework for capturing the key, high-level elements of the Biomed+ strategic plan: mission, vision, and values. </p>
          </div>
          <div class="social-footer">
              <div class="topic-adress bloco-face-menu">
                <div class="icon-adress">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
              </div>
            <div class="topic-adress">
              <div class="icon-adress">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </div>
            </div>

          </div>


          </div>
        </div>

        <div class="nav-footer-four">
          <h2>Doenças</h2>
          <ul>
            <!--<li class="first"><a href="#">Medicamentosos</a></li> -->
            <?php 
              $args = array( 'post_type' => 'doencas', 'posts_per_page' => 100 );
              $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div class="nav-footer-four">
          <h2>Cirurgias</h2>
          <ul>
            <?php 
              $args = array( 'post_type' => 'cirurgias', 'posts_per_page' => 100 );
              $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div class="nav-footer-four">
          <h2>Equipe</h2>
          <ul>
          <li><a href="espaco">Nosso Espaço</a></li>
          <?php 
              $args = array( 'post_type' => 'equipe', 'posts_per_page' => 100 );
              $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div class="nav-footer-four box-atendimento-footer" style="width: 18%;">
          <h2>HORÁRIO DE ATENDIMENTO</h2>
          <p>Seg - Sex:  <span>08h - 20h</span></p>
          <p>Sab:  <span>09h - 13h</span></p>
          <p>Dom:  <span class="azul">Fechado</span></p>
          <a class="agende abrir-mais">AGENDE UMA CONSULTA</a>
          <div class="selos-footer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selo.jpg" class="selo">
              <span class="assinatura">
          <a href="https://www.3xceler.com.br/criacao-de-sites" title="Criação de Sites: Agência 3xceler" class="pull-left" target="_blank" style="color:#fff;">Criação de sites</a> 
          : <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-3xceler.jpg"  alt="Logo Agência 3xceler" title="Logo Agência 3xceler"></span>

          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="copyright">
        <div class="gridD">
          <div class="rod-baixo">
            <p>©2017 Clínica VidaBemVinda. Todos os direitos reservados. O conteúdo deste site foi elaborado pela Clínica VidaBemVinda e as informações aqui contidas tem caráter meramente informativo e educacional. Não deve ser utilizado para realizar autodiagnóstico ou automedicação. Em caso de dúvidas, consulte seu médico, já que somente ele está habilitado a praticar o ato médico, conforme recomendação do Conselho Federal de Medicina. Todas imagens contidas no site são meramente ilustrativas e foram compradas em banco de fotos, não envolvendo imagens de pacientes. Diretor Técnico: Dr. Lucas Yamakami CRM-SP 112.079</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </footer>
    <div class="footer-fixo-mobile" style="display: none;">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <i class="fa fa-calendar abrir-especialista" aria-hidden="true"></i>
    </div>
    <div class="telefone-mobile-completo" style="display: none;">
      <div class="telefone-mobile"> </div>
        <i class="fa fa-times" aria-hidden="true"></i>
        <i class="fa fa-phone" aria-hidden="true"></i>
        <p>11 2729.8581</p>
        <p>11 2729.8583</p>
      </div>
    </div>
    <div class="news-mobile-completo" style="display: none;">
      <div class="news-mobile"> </div>
        <i class="fa fa-times" aria-hidden="true"></i>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <p>Cadastre-se em
Nossa Newsletter</p>
    <form>
      <input type="text" name="" placeholder="*Seu E-mail">
      <input type="submit" name="" class="enviar" value="">
    </form>
      </div>
    </div>
    <!-- INCLUDE JS-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>


        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.dlmenu.js"></script>
    <script>
      $(function() {
        $( '#dl-menu' ).dlmenu({
          animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
        });
      });
    </script>
<script>
    local = "<?php echo get_template_directory_uri(); ?>";
</script>


  </body>
</html>