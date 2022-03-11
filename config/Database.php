<?php

namespace Config;
use PDO;

class Database
{
  static function getConnection(): PDO
  {
    // $host = "127.0.0.1";
    $host = "localhost";
    $port = 3306;
    $database = "db_pzn_php_todolist";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
  }
}