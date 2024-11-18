<?php

namespace App\user;

use App\interfaces\Profession;

/**
 * Programmer user class
 * 
 * Implements:
 * + single responsibility principle
 * + liskov substitution principle
 * + interface segregation principle
 * 
 * @package App\user
 * 
 * @method string getName()
 * @method string getProfession()
 */
class Programmer extends User implements Profession
{
    private const PROFESSION_NAME = 'programmer';

    public function getProfession(): string
    {
        return self::PROFESSION_NAME;
    }
}