<?php
function tpcab_block_execute_actions() {
    global $post;
    if (is_singular() && has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);
        foreach ($blocks as $block) {
            if ($block['blockName'] === 'custom-action-block/action' && !empty($block['attrs']['actionName'])) {
                do_action($block['attrs']['actionName']);
            }
        }
    }
}
add_action('wp', 'tpcab_block_execute_actions');