<?php

namespace Mixno35\Validator;

use Mixno35\Validator\Interfaces\RuleInterface;
use Mixno35\Validator\Interfaces\ValidatorRuleInterface;

class ValidatorRule implements ValidatorRuleInterface
{

    protected RuleInterface $rule;

    protected ?string $messageError;

    public function __construct(RuleInterface $rule, ?string $messageError = null)
    {
        $this->rule = $rule;
        $this->messageError = $messageError;
    }

    public function getRule(): RuleInterface
    {
        return $this->rule;
    }

    public function getMessageError(): ?string
    {
        return $this->messageError;
    }
}