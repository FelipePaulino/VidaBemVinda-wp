<?php

//UNIDADES//
function create_posttype() {
  register_post_type( 'doencas',
    array(
      'labels' => array(
        'name' => __( 'Doenças' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'doencas'),
      'supports' => array('title','editor','thumbnail','comments', 'excerpt',),

    )
  );

  register_post_type( 'cirurgias',
    array(
      'labels' => array(
        'name' => __( 'Cirurgias' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'cirurgias'),
      'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );

    register_post_type( 'equipe',
    array(
      'labels' => array(
        'name' => __( 'Equipe' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'equipe'),
      'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
}


add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 50, 50, true ); // miniaturas normais para a homepage


add_image_size( 'foto-doutor', 518, 549, true ); 

add_image_size( 'thumb-certificado', 269, 170, true );

add_image_size( 'imagem-page-blog', 880, 350, true );

add_image_size( 'imagem-post-sidebar', 120, 80, true );



//UNIDADES//
add_action( 'init', 'create_posttype' );




// Verifica se não existe nenhuma função com o nome tutsup_session_start
if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}
 
 // Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () { 
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );

}

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
	//PAGINA DOENÇAS//



    $meta_boxes[] = array(
        'title'      => __( 'Preencha os Campos', 'textdomain' ),
        'post_types' => 'doencas',
        'fields'     => array(
            array(
                'id'   => 'duvida1-titulo',
                'name' => __( 'Duvida 1 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida1-conteudo',
                'name' => __( 'Duvida 1 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'duvida2-titulo',
                'name' => __( 'Duvida 2 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida2-conteudo',
                'name' => __( 'Duvida 2 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'duvida3-titulo',
                'name' => __( 'Duvida 3 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida3-conteudo',
                'name' => __( 'Duvida 3 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            
            
            array(
                'id'   => 'duvida4-titulo',
                'name' => __( 'Duvida 4 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida4-conteudo',
                'name' => __( 'Duvida 4 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
        ),
    );
    //PAGINA CIRURGIAS///
    $meta_boxes[] = array(
        'title'      => __( 'Preencha os Campos', 'textdomain' ),
        'post_types' => 'cirurgias',
        'fields'     => array(
            array(
                'id'   => 'duvida1-titulo',
                'name' => __( 'Duvida 1 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida1-conteudo',
                'name' => __( 'Duvida 1 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'duvida2-titulo',
                'name' => __( 'Duvida 2 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida2-conteudo',
                'name' => __( 'Duvida 2 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'duvida3-titulo',
                'name' => __( 'Duvida 3 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida3-conteudo',
                'name' => __( 'Duvida 3 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
            
            
            array(
                'id'   => 'duvida4-titulo',
                'name' => __( 'Duvida 4 - Título', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'duvida4-conteudo',
                'name' => __( 'Duvida 4 - Conteúdo', 'textdomain' ),
                'type' => 'textarea',
            ),
             array(
                'id'   => 'introducao-tratamentos',
                'name' => __( 'Introdução Tratamentos ', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
    			'id'      => 'tratamento-relacionado',
    			'name'    => 'Tratamentos Relacionados',
    			'type'    => 'text_list',
    			'clone'   => true,
			    // Options: array of Placeholder => Label for text boxes
			    // Number of options are not limited
			    'options' => array(
			        'Titulo'    => '',
			        'Conteudo'  => '',
			        'Link de Direcionamento'  => '',
			    ),
			),
        ),
    );
        $meta_boxes[] = array(
        'title'      => __( 'Preencha os Campos', 'textdomain' ),
        'post_types' => 'equipe',
        'fields'     => array(
        	array(
                'id'   => 'introducao-especialidades',
                'name' => __( 'Introdução Especialidades ', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
    			'id'      => 'especialidade',
    			'name'    => 'Especialidade',
    			'type'    => 'text_list',
    			'clone'   => true,
			    // Options: array of Placeholder => Label for text boxes
			    // Number of options are not limited
			    'options' => array(
			        'Especialidade'    => '',
			        'Link de Direcionamento'  => '',
			    ),
			),
			array(
                'id'   => 'introducao-curriculo',
                'name' => __( 'Introdução Curriculo ', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
    			'id'      => 'formacao',
    			'name'    => 'Formação',
    			'type'    => 'text_list',
    			'clone'   => true,
			    // Options: array of Placeholder => Label for text boxes
			    // Number of options are not limited
			    'options' => array(
			        'Formação'  => '',
			    ),
			),
			array(
			    'id'               => 'foto-certificado',
			    'name'             => 'Image upload',
			    'type'             => 'image_upload',
			    'force_delete'     => false,
			    'max_file_uploads' => 15,
			    'max_status'       => 'true',
			    'image_size'       => 'thumb-certificado',
			),
			array(
    			'id'      => 'descricao-certificado',
    			'name'    => 'Descrição do certificado',
    			'type'    => 'text_list',
    			'clone'   => true,
			    // Options: array of Placeholder => Label for text boxes
			    // Number of options are not limited
			    'options' => array(
			        'Titulo'    => '',
			        'Texto'  => '',
			    ),
			),
        ),
    );

    return $meta_boxes;
}





//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


 $args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'reply_text'        => 'Reply',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
);






?>