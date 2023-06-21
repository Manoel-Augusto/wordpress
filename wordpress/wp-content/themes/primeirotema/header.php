<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php wp_head(); ?>
    <title></title>

</head>

<body<?php body_class(); ?>>
    <header>
        <h1>Meu Primeiro Tema</h1>
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                // 'container_class'=>'class1, class2'
                'fallback_cb' => false,
                'container_class'
                => 'main_menu'
            ));
        }
        ?>
    </header>