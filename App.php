<?php

require_once __DIR__ . '/config/Database.php';
require_once __DIR__ . '/entity/Todolist.php';
require_once __DIR__ . '/helper/InputHelper.php';
require_once __DIR__ . '/repository/TodolistRepository.php';
require_once __DIR__ . '/service/TodolistService.php';
require_once __DIR__ . '/views/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;


$connection = Config\Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodolist();