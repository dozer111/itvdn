<?php

require_once 'helpers/ns_loader.php';

use data\DB;
use data\Builder;

$queryBuilder = new Builder();
$sql = $queryBuilder
    ->from('users')
    ->where(['id <5'])
    ->orderBy(['login ASC'])
    ->getQuery();


$db = DB::getInstance();
$data = $db->getConnection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $d) {
    var_dump($d);
}