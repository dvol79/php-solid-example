<?php

namespace App\interfaces;

/**
 * Implements the open closed principle
 * 
 * @package App\interfaces
 */
interface Sender
{
    /**
     * Send message
     * 
     * @param string $message 
     * @return void 
     */
    public function send(string $message): void;
}