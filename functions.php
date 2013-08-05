<?php

function awesome_title($not_awesome_title) {
    $title = "I Am Awesome";
    return $title;
}
add_filter('wp_title', 'awesome_title', 999);