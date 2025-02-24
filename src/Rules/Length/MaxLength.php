<?php

namespace Mixno35\Validator\Rules\Length;

use Mixno35\Validator\Interfaces\RuleInterface;

class MaxLength implements RuleInterface
{

    protected int $maxLength;

    public function __construct(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }

    public function process($var): bool
    {
        return !(mb_strlen((string)$var) > $this->getMaxLength());
    }

    private function getMaxLength(): int
    {
        return $this->maxLength;
    }
}