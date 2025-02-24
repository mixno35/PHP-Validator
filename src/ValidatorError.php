<?php

namespace Mixno35\Validator;

use Mixno35\Validator\Interfaces\ValidatorErrorInterface;
use Mixno35\Validator\Interfaces\ValidatorRuleInterface;

class ValidatorError implements ValidatorErrorInterface
{

    protected ValidatorRuleInterface $rule;

    public function __construct(ValidatorRuleInterface $rule)
    {
        $this->rule = $rule;
    }

    public function rule(): ValidatorRuleInterface
    {
        return $this->rule;
    }
}