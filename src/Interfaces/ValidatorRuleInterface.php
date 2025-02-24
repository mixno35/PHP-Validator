<?php

namespace Mixno35\Validator\Interfaces;

interface ValidatorRuleInterface
{

    public function __construct(RuleInterface $rule, ?string $messageError = null);

    public function getRule(): RuleInterface;

    public function getMessageError(): ?string;
}