<?php

namespace Mixno35\Validator\Interfaces;

interface ValidatorInterface
{

    public static function validate($var, ValidatorRuleInterface ...$rules): ?ValidatorErrorInterface;
}