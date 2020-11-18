<?php

// наглядный пример агрегации
// Агрегация: объект А получает ссылку на объект B

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

    public function __construct($priceFilters,$quantity)
    {
        // Аггрегация - передаём по ссылке,
        // обьект не особо интересует, откуда мы взяли этот интервал
        if(!$priceFilters instanceof Interval)
        {
            die('Неверно переданное значение');
        }
        $this->priceFilters = $priceFilters;
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
$priceInterval = new Interval(1,123);
$filtersMenu = new ShopFilters($priceInterval,2);

// выводим где-то .....
// ....
// ....
// ....

/// ВЫВОД: при такой передаче данных у нас:
/// 1. Каждый класс делает что-то своё
/// 2. Можно создавать нужные классы в нужных ИМЕННО нам местам, и потом их передавать
/// 3. Гибкость в выполнении (если я например расширю ряд классов interval(споминаем фишку "instanceof"))


