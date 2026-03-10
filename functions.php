<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['parent-style']
    );
});

add_filter('the_content', function($content) {
    $section = '
    <div class="deploy-section">
        <p>Deploy Done</p>
    </div>';
    
    return $content . $section;  // content এর পরে বসবে
});