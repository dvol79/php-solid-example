<?php

namespace App\interfaces;

/**
 * Implements the interface segregation principle
 * 
 * @package App\interfaces
 */
interface Profession
{
    /**
     * Return name of profession
     * 
     * @return string 
     */
    public function getProfession(): string;
}