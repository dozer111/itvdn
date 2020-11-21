<?php

// учимся ловить исключение

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

            throw new Exception('Значение не может быть меньше 0');
        } elseif ($this->to <= $this->from) {
            throw new Exception('$to не может быть меньше $from');
        }
    }
}


// новое ключевое слово "try"
try {
    $value = new RandomPositiveValue(-1,1);
    $value2 = new RandomPositiveValue(1,1);
    $value3 = new RandomPositiveValue(1,5);

}catch (Throwable $e){
    // сделать что-то если поймаем ошибку
} finally {
    // сделать что-то после того как поймали/НЕпоймали ошибку
}




