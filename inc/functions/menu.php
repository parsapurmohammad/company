<?php
function register_my_menus(){
    register_nav_menus(
        array(
            'main-menu' => ('منوی اصلی'),
        )
    );
}
add_action('init','register_my_menus');