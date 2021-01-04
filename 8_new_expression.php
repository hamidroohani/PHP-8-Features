<?php
class User{

}

// you can use exception as a value
$user = new User() ?? throw new Exception('User is null');