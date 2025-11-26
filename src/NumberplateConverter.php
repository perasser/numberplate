<?php

namespace Perasser\Numberplate;

class NumberplateConverter
{
    private $lookupTable = [
        'HA' => 'Hallein',
        'JO' => 'St. Johann im Pongau',
        'S' => 'Salzburg - Stadt',
        'SL' => 'Salzburg/Land',
        'TA' => 'Tamsweg',
        'ZE' => 'Zell am See'
    ];


    public function convert(string $numberplate): string
    {
        if (mb_strlen($numberplate) > 2) {
            $abr = substr($numberplate, 0, 2);

            return $this->lookupTable[$abr];
        }
        else {
            return '';
        }

    }
}