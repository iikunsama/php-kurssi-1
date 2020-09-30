<?php

$users = [
    ['id' => 99, 'name' => 'Mikko'],
    ['id' => 63, 'name' => 'Saara'],
    ['id' => 30, 'name' => 'Tiina'],
    ['id' => 63, 'name' => 'Matti'],
    ['id' => 2, 'name' => 'Alma'],
    ['id' => 187, 'name' => 'Sami'],
    ['id' => 56, 'name' => 'Tuula'],
];

function custom_sort($a, $b) {
    if($a['id'] === $b['id']) {
        return 0;
    }
    if($a['id'] < $b['id']) {
        return -1;
    }

    return 1;
}

usort($users, "custom_sort");