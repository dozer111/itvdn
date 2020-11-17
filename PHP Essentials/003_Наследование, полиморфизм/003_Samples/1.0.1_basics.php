<?php


class CarCompany
{
    public $name = 'defaultName';
    public $createdDate = '21.11.2004';
}

// новое ключевое словов "extends"
class Opel extends CarCompany
{
    public $name = 'Opel';
}

// допустим, у них есть своя отдельная ралийная команда
class OpelSupersport extends Opel
{
    public $name = 'Opel SuperSport';
}

$company1 = new Opel();
$company2 = new CarCompany();
$company3 = new OpelSupersport();

var_dump([
    $company1->name,
    $company2->name,
    $company3->name,
]);