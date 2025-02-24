<?php

namespace Mixno35\Validator\Rules\Email;

use Mixno35\Validator\Interfaces\RuleInterface;

class Email implements RuleInterface
{

    public function process($var): bool
    {
        if (!function_exists('filter_var')) {
            return false;
        }

        $email = (string)$var;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}