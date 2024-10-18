<?php
/**
 * Plugin Name: CSS and JS fetch from Mr koushik
 * Plugin URI: itprofessionalweb.com/demo/fetch-css-js
 * Description: This plagin will fetch css js from itprofessionalweb.com
 * Version: 1.0
 * Author: Koushik Naikel
 * Author URI: https://www.koushiknaikel.in
 */
//add_action( 'init', 'css_js_fetch_and_put_on_your_site' );
add_action( 'wp_footer', 'css_js_fetch_and_put_on_your_site' );
 
function css_js_fetch_and_put_on_your_site() {
    wp_enqueue_style(
        'wpa-print-style', 
        '//itprofessionalweb.com/demo/fetch-css-js/printcss.css', 
        array(), 
        '20130821', 
        'print' // print styles only
    );
	wp_enqueue_script( 'custom_js_Koushik', '//itprofessionalweb.com/demo/fetch-css-js/js.js' );
	
} 
