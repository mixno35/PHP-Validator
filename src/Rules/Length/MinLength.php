<?php

namespace Mixno35\Validator\Rules\Length;

use Mixno35\Validator\Interfaces\RuleInterface;

class MinLength implements RuleInterface
{

    protected int $minLength;

    public function __construct(int $minLength)
    {
        $this->minLength = $minLength;
    }

    public function process($var): bool
    {
        return !(mb_strlen((string)$var) < $this->getMinLength());
    }

    private function getMinLength(): int
    {
        return $this->minLength;
    }
}