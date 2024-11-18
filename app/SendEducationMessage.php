<?php

namespace App;

use App\interfaces\Education;
use App\interfaces\Sender;

/**
 * Send Education type message Class
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
class SendEducationMessage
{
    private const MESSAGE_PEFIX = 'Education type';

    public function __construct(
        private Sender $mailer,
        private Education $educatedUser
    ) {}

    public function send(): void 
    {
        $education = $this->educatedUser->getEducation();
        $message = self::MESSAGE_PEFIX . ': ' . $education;

        $this->mailer->send($message);
    }
}