<?php

namespace App\user;

/**
 * Abstract class User
 * 
 * Implements:
 * + the single responsibility principle
 * + 
 * 
 * @package App\user
 */
abstract class User
{
    public function __construct(private string $name)
    {}

    public function getName(): string
    {
        return $this->name;
    }
}