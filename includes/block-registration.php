<?php
function tpcab_block_register() {
    wp_register_script(
        'custom-action-block-editor',
        plugins_url('build/index.js', dirname(__FILE__)),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__DIR__) . 'build/index.js'),
        false // Load the script in the head instead of the footer
    );

    register_block_type('custom-action-block/action', array(
        'editor_script' => 'custom-action-block-editor',
        'render_callback' => 'tpcab_block_render',
        'attributes' => array(
            'actionName' => array(
                'type' => 'string',
            ),
        ),
    ));
}
add_action('init', 'tpcab_block_register');

function tpcab_block_render($attributes) {
    if (!empty($attributes['actionName'])) {
        ob_start();
        do_action($attributes['actionName']);
        return ob_get_clean();
    }
    return '';
}