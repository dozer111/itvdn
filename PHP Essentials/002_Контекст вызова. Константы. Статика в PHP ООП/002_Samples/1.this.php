<?php

// $this - ссылка на обьект
// отображает данные, доступные в
// "контексте текущего обьекта"
class ConcertTickets{
    public $name = 'AC/DC';

    public function getName()
    {
        return $this->name;
    }

    public function get2Tickets($ticket)
    {
        var_dump(
            $this->getName(),
            $ticket->getName()
        );
    }
}

$tickets = new ConcertTickets();
$anotherTickets = new ConcertTickets();
$anotherTickets->name = 'DC/AC';

$tickets->get2Tickets($anotherTickets);
// И, как мы видим, у обьекта $tickets свой контекст
// и у $anotherTickets тоже свой контекст