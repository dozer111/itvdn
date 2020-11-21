<?php

// анонимные классы

class Events
{
    private $logger;

    public function setLog($logger)
    {
        $this->logger = $logger;
    }

    public function log()
    {
        $this->logger->log();
    }

}

$event = new Events();
$event->setLog(new class {
    public function log()
    {
        echo "Log was done at".date('Y-m-d H:I:s')."<br/>";
    }

});

$event->log();
sleep(2);
$event->log();



