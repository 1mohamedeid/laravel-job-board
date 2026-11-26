<?php

namespace App\Models;


class Job 
{
    public static function all(){
        return[
            ['title' => 'SoftWare Engineer', 'salary' => '$3000'],
            ['title' => 'IT Engineer', 'salary' => '$2000'],
            ['title' => 'Software Testing', 'salary' => '$1000']
        ];
    }
}
