<?php

use Mixno35\Validator\Rules\Email\Email;
use Mixno35\Validator\Rules\Email\EmailDNS;
use Mixno35\Validator\Rules\Email\EmailTemp;
use Mixno35\Validator\Validator;
use Mixno35\Validator\ValidatorRule;

require_once __DIR__ . '/vendor/autoload.php';

dd(Validator::validate('mixno35@yandasex.com',
    new ValidatorRule(new Email(), 'Здесь может быть сообщение об ошибке.'),
    new ValidatorRule(new EmailTemp(), 'Здесь может быть сообщение об ошибке.'),
    new ValidatorRule(new EmailDNS(), 'Здесь может быть сообщение об ошибке.'),
));