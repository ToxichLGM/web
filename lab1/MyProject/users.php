<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User("Антон", "Bobrito_bondito", "321321");
$user2 = new User("Александр", "tralalelo_tralala", "3o4o24");
$user3 = new User("Аня", "Lavaka_saturno_saturnita", "321kljkl3");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser("Антон", "NIZAMOW202", "antonchik23", "admin");
$user->showInfo();
$user->getInfo();

echo "<p>Всего обычных пользователей: " . User::$userCount . "\n</p>";
echo "<p>Всего cупер-пользователей: " . SuperUser::$superUserCount . "\n</p>";
