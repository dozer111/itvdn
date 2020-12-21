<?php

// ловим несколько исключений

class Ex1 extends Exception
{
}

class Ex2 extends Exception
{
}

class Ex3 extends Exception
{
}


class RandomPositiveValue
{
    private const INFINITY = 1_000_000_000;
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
        if ($this->from < 0) {
            throw new Ex1();
        } elseif ($this->to <= $this->from) {
            throw new Ex2();
        } elseif ($this->to > self::INFINITY) {
            throw new Ex3();
        }
    }
}

try {
    $value = new RandomPositiveValue(-1, 1);
    $value2 = new RandomPositiveValue(1, 1);
    $value3 = new RandomPositiveValue(1, 5);
} catch (Ex1 $exception) {
    // сделать что-то для случая 1
} catch (Ex2 $exception) {
    // сделать что-то для случая 2
} catch (Ex3 $exception) {
    // сделать что-то для случая 3
}catch (Throwable $exception)
{
    // сделать что-то для случая, когда ошибка не та, которую мы ожидали
} finally {
    // сделать что-то в конце, независимо от того,
    // была ли выброшена ошибка, или нет
}




