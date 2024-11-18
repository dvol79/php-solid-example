<?php

namespace App\interfaces;

/**
 * Implements the interface segregation principle
 * 
 * @package App\interfaces
 */
interface Education
{
    /**
     * Return type of education
     * 
     * @return string 
     */
    public function getEducation(): string;
}