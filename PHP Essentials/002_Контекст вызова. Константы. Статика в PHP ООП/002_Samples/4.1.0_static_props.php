<?php
// пример2. учимся работать со статическим свойством
// внутри класса
class Cat
{
    public $name;
    public static $defaultName ='Murzik';

    public function create($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        if(!empty($this->name))
        {
            return $this->name;
        }
        return self::$defaultName;
    }

}

$cat = new Cat();
$cat->create('');
$cat->getName(); // Murzik