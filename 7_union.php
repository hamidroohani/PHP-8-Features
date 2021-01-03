<?php
declare(strict_types = 1);

function get_name(string|int $name, string|bool $family, mixed $age=20){
    return $name . " " . $family;
}

get_name(123,'cary');