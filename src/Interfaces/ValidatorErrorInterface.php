<?php

namespace Mixno35\Validator\Interfaces;

interface ValidatorErrorInterface
{

    public function __construct(ValidatorRuleInterface $rule);

    public function rule(): ValidatorRuleInterface;
}