<?php

// типичный пример работы invoke
// __invoke => вызывается, когда мы пытаемся вызвать обьект как функцию


// допустим, у нас есть задание, и есть его статус
// после проделанной работы статус меняется, и мы хотим узнать, какой именно статус сейчас
class Work
{
    const STATUS_NEXT_TO_WORK = 'next to work';
    const STATUS_JOB_STARTED = 'work started';
    const STATUS_JOB_ACTIVE = 'in active stage';
    const STATUS_JOB_ALMOST_DONE = 'almost done';
    const STATUS_JOB_DONE = 'done';

    public $status;

    public function __construct()
    {
        $this->status = self::STATUS_NEXT_TO_WORK;
    }

    public function startWork()
    {
        $this->status = self::STATUS_JOB_STARTED;
    }

    public function continueWork()
    {
        $this->status = self::STATUS_JOB_ACTIVE;
    }

    public function continueWork2()
    {
        $this->status = self::STATUS_JOB_ALMOST_DONE;
    }

    public function finishWork()
    {
        $this->status = self::STATUS_JOB_DONE;
    }

    public function __invoke()
    {
        return $this->status;
    }
}

$work = new Work();
$work->startWork();
$work->continueWork();

var_dump(
    $work()
);


