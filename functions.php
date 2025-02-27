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
    font-face {
  font-family: futura-light;
  font-weight: 100;
  src: url("./Fonts/futura-light-bt.ttf?#iefix") format("truetype"), url("./Fonts/futura-light-bt.ttf") format("truetype");
}
@font-face {
  font-family: futura-medium;
  font-weight: normal;
  src: url("./Fonts/futura-medium.ttf?#iefix") format("truetype"), url("./Fonts/futura-medium.ttf") format("truetype");
}
        body::before {
            background-image: url('../wp-content/uploads/2020/04/index_bg-2441-2.jpg') !important;
        }
        #login h1 a, .login h1 a {
            background-image: url('../wp-content/uploads/2021/03/index-logo-blu-solo.svg');
		        height:150px;
		        width:auto;
		        background-size: 150px auto;
		        background-repeat: no-repeat;}

        #login h1:after {
            content: " ";
            /* font-family: Georgia, 'Times New Roman', Times, serif ;
            color: rgba(255, 255, 255, 0.7);
            text-shadow: none;
            font-size: 40px;
            line-height: 40px; */
       
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

function my_login_stylesheet() {
    // wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login-index.css' );
    wp_enqueue_style( 'custom-fonts', 'https://indexwebmedia.com/bostiq/commons/font-awesome-4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'custom-login-style', 'https://indexwebmedia.com/bostiq/commons/wp-login/login-index.min.css' );
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