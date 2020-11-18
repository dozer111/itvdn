<?php

// наглядный пример композиции
// Композиция: объект A управляет временем жизни объекта B
// берём тот же случай, что и в агрегации


class Interval
{
    private $from;
    private $to;

    public function __construct($from,$to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }
}

class ShopFilters{
    private $priceFilters;
    private $quantity;

    public function __construct($quantity)
    {
        // Композиция - создаём обьект внутри другого обьекта,
        $this->priceFilters = new Interval(1,123);
        $this->quantity = $quantity;
    }

    public function getFilters()
    {
        return [
            'priceFrom' => $this->priceFilters->getFrom(),
            'priceTo' => $this->priceFilters->getTo(),
            'quantity' => $this->quantity
        ];
    }

}

$filtersMenu = new ShopFilters(2);

// выводим где-то .....
// ....
// ....
// ....

/// ВЫВОД: при такой передаче данных у нас:
/// 1. Каждый класс делает что-то своё
/// 2. Класс создаётся внутри, и там же "умирает"(меньше вероятность,
///  что кто-то его изменит по ходу работы программы)
/// 3. Отсутствие гибкости в выполнении (но, это суперкруто, если ИМЕННО этот класс должен решить
///  поставленную задачу)


