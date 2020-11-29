<?php

// Theme functions
//include( get_template_directory() . '/inc/theme_functions.php' );

// Theme css & js
include( get_template_directory() . '/inc/scripts.php' );

// Theme thumbnails
include( get_template_directory() . '/inc/thumbnails.php' );

@ini_set( 'upload_max_size' , '100M' );


$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;//10
$template_file = get_post_meta($post_id,'_wp_page_template',TRUE); //pages/template-home.php
if ($template_file === 'pages/template-home.php') {
    add_action( 'init', 'wpse4936_init', 100 /* Something high, to make sure all post types are registered */ );
    function wpse4936_init()
    {
        remove_post_type_support( 'page', 'thumbnail' );
    }
}

add_action("wpcf7_before_send_mail", "wpcf7_do_something_else");

function wpcf7_do_something_else(&$wpcf7_data) {
$mails_to_send=array(
    'リッチランド豊南郷'=>'richland@smile.ocn.ne.jp',
    'エクセルシオール千葉'=>'info@excelsior-chiba.com',
    'エクセルシオール佐原'=>'info@excelsior-sawara.com',
    'エクセルシオール秦野'=>'info@excelsior-hadano.com',
    'エクセルシオール湘南台'=>'info@excelsior-shonandai.com',

    'いきいきの家 鴨川'=>'supervisor@ikiiki-kamogawa.com',
    'いきいきの家 今泉'=>'info@ikiiki-imaizumi.com',
    'いきいきの家 泉'=>'supervisor@ikiiki-izumi.com',
    'いきいきの家 二子玉川'=>'info@ikiiki-futakotamagawa.com',
);
    // Here is the variable where the data are stored!
    //var_dump($mails_to_send[$_REQUEST['radio-188']]);
    //var_dump($wpcf7_data);
    //var_dump($wpcf7_data->prop( 'mail' ));
    wp_mail($mails_to_send[$_REQUEST['radio-188']], 'aaaaaaaaaaa',$wpcf7_data->prop( 'mail' )['body']);
}

function true_misha_func(  ){
    return date('お問い合わせ日時：　Y年 m月　d日');;
}
add_shortcode( 'data_to_mail', 'true_misha_func' );

add_filter('wpcf7_mail_components', 'do_shortcode_mail', 10, 3);
function do_shortcode_mail( $components, $contactForm, $mailComponent ){
    if( isset($components['body']) ){
        $components['body'] = do_shortcode($components['body']);
    }

    return $components;
}