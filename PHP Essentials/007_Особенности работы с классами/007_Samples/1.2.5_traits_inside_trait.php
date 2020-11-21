<?php

// вложенность трейтов:
// трейт внутри трейта внутри трейта внутри трейта .....

trait A{
    public function getA(){}
}
trait A1{
    public function getA1(){}
}
trait A2{
    public function getA2(){}
}
trait A3{
    public function getA3(){}
}

trait B
{
    use A,A1,A2,A3,A;
    public function dodo(){}
}

trait C
{
    use B;
    public function ozzy(){}
}


class CustomClass
{
    use C;
}

$example = new CustomClass();
$example->getA();
$example->getA1();
$example->getA2();
$example->getA3();
$example->dodo();
$example->ozzy();