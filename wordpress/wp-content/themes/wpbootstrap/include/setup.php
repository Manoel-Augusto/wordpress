<?php

function as_theme_styles()
{
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("fontwesome", get_template_directory_uri() . "vendor/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style("googlelora", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
    wp_enqueue_style("googleopensans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    wp_enqueue_style("cleanblog", get_template_directory_uri() . "/css/clean-blog.min.css");

    wp_enqueue_script("jquery", get_template_directory_uri() . "/vendor/jquery/jquery.min.js");
    wp_enqueue_script("bootstrap_js", get_template_directory_uri() . "/vendor/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_script("cleanblog_js", get_template_directory_uri() . "/js/clean-blog.min.js");
}

function as_after_setup()
{
    add_theme_support('title-tag');
}
