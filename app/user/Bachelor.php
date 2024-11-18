<?php

namespace App\user;

use App\interfaces\Education;

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
 * @method string getEducation()
 */
class Bachelor extends User implements Education
{
    private const EDUCATION_TYPE = 'bachelor';

    public function getEducation(): string
    {
        return self::EDUCATION_TYPE;
    }
}