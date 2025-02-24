<?php

namespace Mixno35\Validator;

use Mixno35\Validator\Interfaces\ValidatorErrorInterface;
use Mixno35\Validator\Interfaces\ValidatorInterface;
use Mixno35\Validator\Interfaces\ValidatorRuleInterface;

class Validator implements ValidatorInterface
{

    public static function validate($var, ValidatorRuleInterface ...$rules): ?ValidatorErrorInterface
    {
        foreach ($rules as $rule) {
            if (!$rule->getRule()->process($var)) {
                $error = new ValidatorError($rule);
                break;
            }
        }

        if (isset($error)) {
            return $error;
        }

        return null;
    }
}