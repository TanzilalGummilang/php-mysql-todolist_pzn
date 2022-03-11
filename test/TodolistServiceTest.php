<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../entity/Todolist.php';
require_once __DIR__ . '/../repository/TodolistRepository.php';
require_once __DIR__ . '/../service/TodolistService.php';

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;


function testShowTodolist(): void
{
  $connection = Config\Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);
  // $todolistService->addTodolist("satu");
  // $todolistService->addTodolist("dua");
  // $todolistService->addTodolist("tiga");

  $todolistService->showTodolist();
}

function testAddTodolist(): void
{

  $connection = Config\Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("satu");
  $todolistService->addTodolist("dua");
  $todolistService->addTodolist("tiga");

  // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
  $connection = Config\Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);
  
  // echo $todolistService->removeTodolist(1);
  // echo $todolistService->removeTodolist(3);
  // echo $todolistService->removeTodolist(4);
  // echo $todolistService->removeTodolist(5);
  // echo $todolistService->removeTodolist(6);
  // echo $todolistService->removeTodolist(7);
  // echo $todolistService->removeTodolist(8);
  echo $todolistService->removeTodolist(0);
}

testShowTodolist();