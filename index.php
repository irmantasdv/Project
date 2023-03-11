<?php

use CreationProject\Vendor\AutoLoader;
use CreationProject\Domain\Model\User;

require_once('Vendor/AutoLoader.php');

AutoLoader::register();

$user = new User('Jonas',67,'Vyras');
Echo $user->getAge();
Echo "Hi";