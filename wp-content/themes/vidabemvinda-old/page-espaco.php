<?php 

/*
Template Name: Espaço
*/

get_header(); 

?>  

<div class="breadcrumbs">
      <div class="gridD"><a href="#">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a><a href="#">Cirurgiões <i class="fa fa-chevron-right" aria-hidden="true"></i></a><a href="#">Nosso Espaço</a></div>
      <div class="clearfix"></div>
    </div>
    <div class="espaco">
       <div class="gridD">
         <h2><span>Espaço</span> vida bem vinda</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

        <div class="slider slider-for">
          <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01grande.jpg"></div>
           <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/02grande.jpg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01grande.jpg"></div>
           <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/02grande.jpg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/01grande.jpg"></div>
        </div>
        <div class="slider slider-nav">
          <div>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.jpg"></div>
          <div>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.jpg"></div>
          <div>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.jpg"></div>
          <div>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.jpg"></div>
          <div>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.jpg"></div>
          </div>

        <hr />
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
       </div>
     </div>
<div class="clearfix"></div>
<?php include('includes/especialistas.php') ?>
<?php get_footer(); ?>