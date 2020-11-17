<?php
// прим.1 используем константы, чтобы заполнить определенную информацию в классе
class Product
{
    const TYPE_PHONE = 'phone';
    const TYPE_BOOK = 'book';

    public $name;
    public $price;
    public $type;

    public function create($name,$price)
    {
        if(strpos($name,'samsu') !== false)
        {
            $this->type = self::TYPE_PHONE;
        }else{
            $this->type = self::TYPE_BOOK;
        }

        $this->price = $price;
        $this->name = $name;
    }
}

$product1 = new Product();
$product1->create('Samsung X1234',1234);