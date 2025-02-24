<?php

namespace Mixno35\Validator\Interfaces;

interface RuleInterface
{

    public function process($var): bool;
}