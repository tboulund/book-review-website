<?php
function libra_enqueue_styles() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css");
    wp_enqueue_style("libra-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "libra_enqueue_styles");

function libra_register_menu() {
    register_nav_menu("main-menu", "Main menu");
}
add_action("init", "libra_register_menu");
?>