<?php

namespace Mixno35\Validator\Rules\Email;

use Mixno35\Validator\Interfaces\RuleInterface;

class EmailDNS implements RuleInterface
{

    public function process($var): bool
    {
        if (!function_exists('explode') ||
            !function_exists('checkdnsrr') ||
            !function_exists('getmxrr')
        ) {
            return false;
        }

        [$user, $domain] = explode('@', (string)$var);

        if (!checkdnsrr($domain)) {
            return false;
        }

        getmxrr($domain, $hosts);

        if (empty($hosts)) {
            return false;
        }

        unset($user, $domain, $hosts);

        return true;
    }
}