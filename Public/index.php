<?php

use CreationProject\Vendor\AutoLoader;
use CreationProject\Domain\Model\User;

require_once('../Vendor/AutoLoader.php');

$autoloader = new AutoLoader();
$autoloader->register();
$user = new User('Jonas',67,'Vyras');
Echo $user->getAge();
Echo "Hi";