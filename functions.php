<?php

register_post_type('slide', array(	'label' => 'Slide','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'supports' => array('title','thumbnail',),'labels' => array (
  'name' => 'Slide',
  'singular_name' => 'Slide',
  'menu_name' => 'Slide',
  'add_new' => 'Novo Slide',
  'add_new_item' => 'Novo Slide',
  'edit' => 'Editar',
  'edit_item' => 'Editar Slide',
  'new_item' => 'Novo Slide',
  'view' => 'Visualizar Slide',
  'view_item' => 'Visualizar Slide',
  'search_items' => 'Pesquisar Slide',
  'not_found' => 'Nenhum Slide Encontrado',
  'not_found_in_trash' => 'Nenhum Slide Encontrado na Lixeira',
  'parent' => 'Principal',
),) );

// Redireciona se a busca só achar um termo
add_action('template_redirect', 'one_match_redirect');
function one_match_redirect() {
    if (is_search()) {
        global $wp_query;
        if ($wp_query->post_count == 1) {
            wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
        }
    }
}


// Registra Barra Lateral
if ( function_exists('register_sidebar') )
register_sidebar(array(
	'before_widget' => '<div class="twelve columns widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

// Aceita Shortcodes na Sidebar
add_filter('widget_text', 'do_shortcode');

// Adiciona um Favicon
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'http://cdn.wpbeginner.com/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// Avatar Padrão
add_filter( 'avatar_defaults', 'newgravatar' );

function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/images/dicaswpuser.gif';
$avatar_defaults[$myavatar] = "DicasWP+";
return $avatar_defaults;
}

//Compartilhe no Twiiter
function twitt() {
  return '<div id="twitit"><a href="http://twitter.com/home?status=Eu estou lendo o artigo '.get_permalink($post->ID).'" title="Clique para enviar para o Twitter" target="_blank">Compartilhe no Twitter</a></div>';
}

add_shortcode('twitter', 'twitt');

// Tamanho do Excerpt
function new_excerpt_length($length) {
return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'slide' ) );
add_image_size( 'post', 140, 130 );
add_image_size( 'slide', 700, 300 );

?>