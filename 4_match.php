<?php

$type = 'success';
$color = null;

switch($type){
    case 'success':
        $type = 'green';
    break;
    case 'danger':
        $type = 'red';
    break;
    case 'warning':
        $type = 'yellow';
    break;
    default:
        $type = 'white';
}

$color = match($type){
    'success' => 'green',
    'error','danger' => 'red',
    'warning' => 'yellow',
    default => 'white'
};
echo $color;