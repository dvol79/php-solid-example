<?php

namespace App\user;

use App\interfaces\Profession;

/**
 * Tester user class
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
class Tester extends User implements Profession
{
    private const PROFESSION_NAME = 'tester';

    /**
     * Return name of profession
     * 
     * @return string 
     */
    public function getProfession(): string
    {
        return self::PROFESSION_NAME;
    }
}