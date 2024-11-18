<?php

namespace App;

use App\interfaces\Sender;
use App\user\User;

/**
 * Send Welcome Message Class
 * 
 * Implements: 
 * + single responsibility principle
 * + liskov substitution principle
 * + dependency inversion principle
 * 
 * @package App
 * 
 * @method void sendWelcome()
 */
class SendWelcomeMessage
{
    private const MESSAGE_PEFIX = 'Welcome';

    public function __construct(
        private Sender $mailer,
        private User $user
    ) {}

    public function sendWelcome(): void 
    {
        $userName = $this->user->getName();
        $message = self::MESSAGE_PEFIX . ', ' . $userName;

        $this->mailer->send($message);
    }
}