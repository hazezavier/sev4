<?php


function register_my_menus()
{
    register_nav_menus(
        array(
            //Registreer plekje "header-menu" met engelse naam Header Menu
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

//initialisation registratie
add_action('init', 'register_my_menus');