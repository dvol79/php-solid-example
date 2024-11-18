<?php

declare(strict_types=1);

use App\SendEducationMessage;
use App\sender\SmtpSender;
use App\sender\TelegramSender;
use App\SendWelcomeMessage;
use App\user\Bachelor;
use App\user\Programmer;
use App\user\Tester;

require __DIR__ . '/vendor/autoload.php';

/** @var array<int, array> */
$welcomeSendersData = [
    [
        'mailer' => new SmtpSender(),
        'user' => new Programmer('Dima'),
    ],
    [
        'mailer' => new TelegramSender(),
        'user' => new Tester('Ilon'),
    ],
];

foreach ($welcomeSendersData as $item) {
    $welcomeSender = new SendWelcomeMessage(
        $item['mailer'],
        $item['user']
    );
    $welcomeSender->sendWelcome();
}

$educateSender = new SendEducationMessage(
    new SmtpSender(),
    new Bachelor('Petr')
);
$educateSender->send();