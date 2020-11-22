<?php

require_once 'helpers/ns_loader.php';

use data\DB;

$db = DB::getInstance();
$db->getConnection()->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);



