<?php

declare(strict_types=1);

namespace data;

final class Test1 implements GetDataInterface
{

    public function getData()
    {
        return self::class;
    }
}