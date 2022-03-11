<?php

require_once __DIR__ . "/Database.php";

Config\Database::getConnection();
echo "koneksi database sukses";