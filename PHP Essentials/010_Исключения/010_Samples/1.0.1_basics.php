<?php

// создаём собственное исключение

class InvalidValue extends Exception
{

}

class RandomPositiveValue
{
    public int $from;
    public int $to;

    public function __construct(int $from, int $to)
    {
        $this->from = $from;
        $this->to = $to;
        $this->validateValues();
    }

    private function validateValues()
    {
        if (
            $this->from < 0
            || $this->to < 0
        ) {
            throw new InvalidValue('Значение не может быть меньше 0');
        } elseif ($this->to <= $this->from) {
            throw new InvalidValue('$to не может быть меньше $from');
        }
    }
}

$value = new RandomPositiveValue(-1,1);
$value2 = new RandomPositiveValue(1,1);
$value3 = new RandomPositiveValue(1,5);



