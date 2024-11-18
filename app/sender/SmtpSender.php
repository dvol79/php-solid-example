<?php

namespace App\sender;

use App\interfaces\Sender;

/**
 * SMTP sender Class
 * Implements the open closed principle
 * 
 * @package App\sender
 * 
 * @method void send()
 */
class SmtpSender implements Sender
{
    public function send(string $message): void
    {
        echo "Sent '{$message}' message via SMPT" . PHP_EOL; 
    }
}