<?php

/*
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
*/  
 
add_action('wp_enqueue_scripts', 'my_scripts_method');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 140, 150 );
add_image_size( 'slide', 700, 300, true );

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

// Protegido
function change_protected_title_prefix() {
    return 'Post Protegido: %s';
}
add_filter('protected_title_format', 'change_protected_title_prefix');

// Privado
function change_private_title_prefix() {
    return 'Post Privado: %s';
}
add_filter('private_title_format', 'change_private_title_prefix');


// Bem-Vindo
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$profile_url = get_edit_profile_url( $user_id );

if ( 0 != $user_id ) {
/* Add the "My Account" menu */
$avatar = get_avatar( $user_id, 28 );
$howdy = sprintf( __('Oi, %1$s'), $current_user->display_name );
$class = empty( $avatar ) ? '' : 'with-avatar';

$wp_admin_bar->add_menu( array(
'id' => 'my-account',
'parent' => 'top-secondary',
'title' => $howdy . $avatar,
'href' => $profile_url,
'meta' => array(
'class' => $class,
),
) );

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

// Author Profile Page
add_filter('user_contactmethods','hide_profile_fields',10,1);
function hide_profile_fields( $contactmethods ) {
unset($contactmethods['aim']);
unset($contactmethods['jabber']);
unset($contactmethods['yim']);
return $contactmethods;
}
function my_new_contactmethods( $contactmethods ) {
$contactmethods['twitter'] = 'Twitter (digite apenas o usuário)';
$contactmethods['facebook'] = 'Facebook (digite apenas o usuário)';
return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

?>