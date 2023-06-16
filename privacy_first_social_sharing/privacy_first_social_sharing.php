<?php
/**
 * Plugin Name: Privacy First Social Sharing
 * Description: A privacy-first, zero metadata, securely coded WordPress plugin that adds social sharing buttons to blog posts with options to customize the appearance and placement of the buttons.
 * Version: 1.0
 * Author: geeknik
 * License: GNU General Public License v3.0
 * License URI: https://raw.githubusercontent.com/geeknik/wordpress/main/LICENSE
 * Text Domain: privacy-first-social-sharing
 */

defined('ABSPATH') or die('Direct script access disallowed.');

// Enqueue the CSS file
function pfss_enqueue_styles() {
    wp_enqueue_style('pfss-styles', plugin_dir_url(__FILE__) . 'styles.css');
}
add_action('wp_enqueue_scripts', 'pfss_enqueue_styles');

// Add the social sharing buttons
function pfss_social_sharing_buttons($content) {
    if(is_single()) {
        $url = urlencode(get_permalink());
        $title = urlencode(get_the_title());
        $twitter_url = 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title;
        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title;

        $buttons = '<div class="pfss-social-sharing">';
        $buttons .= '<a href="' . $twitter_url . '" target="_blank" rel="noopener noreferrer" class="pfss-twitter">Twitter</a>';
        $buttons .= '<a href="' . $facebook_url . '" target="_blank" rel="noopener noreferrer" class="pfss-facebook">Facebook</a>';
        $buttons .= '<a href="' . $linkedin_url . '" target="_blank" rel="noopener noreferrer" class="pfss-linkedin">LinkedIn</a>';
        $buttons .= '</div>';

        return $content . $buttons;
    }

    return $content;
}
add_filter('the_content', 'pfss_social_sharing_buttons');
