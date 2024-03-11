<?php

namespace App\Enums;

use LaracraftTech\LaravelUsefulAdditions\Traits\UsefulEnums;

enum UserType:int
{

    use UsefulEnums;

    case ADMIN = 1;
    case WRITER = 2;
    case READER = 3;

    public static function toArray():array
    {
        return [
            [
                'value'=> static::ADMIN->value,
                'title'=> 'Admin'
            ],
            [
                'value'=> static::READER->value,
                'title'=> 'Reader'
            ],
            [
                'value'=> static::WRITER->value,
                'title'=> 'Author'
            ]
        ];
    }
}