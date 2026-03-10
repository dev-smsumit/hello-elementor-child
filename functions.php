<?php
add_action('wp_enqueue_scripts', function() {
    // Parent এর style
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    
    // Child এর style
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['parent-style']
    );
});

// Custom section - Deploy Done
add_action('wp_footer', function() {
    ?>
    <div class="deploy-section">
        <p>Deploy Done</p>
    </div>
    <?php
});