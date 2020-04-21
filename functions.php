<?php
/**
 * Functions - Child theme custom functions
 */


/************************************************************************************************
***************** CAUTION: do not remove or edit anything within this section ******************/

/**
 * Makes the Divi Children Engine available for the child theme.
 * Do not remove this, your child theme will not work.
 */
require_once('divi-children-engine/divi_children_engine.php');

/***********************************************************************************************/


/*- You can include any custom code for your child theme below this line -*/

/* MODIFY FILE 'WP-LOIGN.PHP'
*/

// Logo

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            /* background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/cropped-Logo_170222_X_Thin_v3_512w.jpeg); */
            background-image: url('../wp-content/uploads/2020/02/Logo_170222_X_Thin_v3_512w.jpeg');
		        height:150px;
		        width:150px;
		        background-size: 150px 150px;
		        background-repeat: no-repeat;
       
        }
    </style>
<?php }

// To change the link values so the logo links

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'inde[x] Web Media';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


// END LOGO

// Attach CSS to wp-login.php

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login-index.css' );
    wp_enqueue_style( 'custom-fonts', get_stylesheet_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


// END CSS

// Attach html after Form to wp-login.php
add_action( 'login_footer', 'login_extra_note' );

function login_extra_note() {

//Adding the text

    ?>
<div id="bottom_html">
    <p class="txt"> </p>
</div>

    <?php
}

?>