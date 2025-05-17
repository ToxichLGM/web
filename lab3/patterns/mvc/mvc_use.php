<?php

// mvc_use.php (Main File - MVC Execution)
require_once 'User.php';
require_once 'UserController.php';
require_once 'MarkdownView.php';

// 1. Model (Data)
$users = [
    new User('Александр', 'Admin', 'Ansergey77@gmail.com'),
    new User('Ольга', 'Meneger', 'olga@gmail.com'),
    new User('Олег', 'Visiter', 'oleg@gmail.com'),
];

// 2. Controller (Logic)
$userController = new UserController($users);
$usersFromController = $userController->getUsers();

// 3. View (Presentation)
$markdownView = new MarkdownView();
$markdownOutput = $markdownView->render($usersFromController);

// Output the Markdown
echo $markdownOutput;
