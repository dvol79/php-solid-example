<?php

namespace App\sender;

use App\interfaces\Sender;

/**
 * Telegram sender Class
 * 
 * @package App\sender
 * 
 * @method void send()
 */
class TelegramSender implements Sender
{
    public function send(string $message): void
    {
        echo "Sent '{$message}' message via Telegram"  . PHP_EOL; 
    }
}