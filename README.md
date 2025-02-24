# PHP-Validator
PHP-Validator is a lightweight library for validating data in PHP without additional dependencies. It supports user-friendly interfaces for creating your own validation rules.

## 🛠 Install
> `composer require mixno35/validator` or `php composer.phar require mixno35/validator`

## 🚀 Usage
A simple example of validation:
```php
<?php

use Mixno35\Validator\Rules\Email\Email;
use Mixno35\Validator\Rules\Email\EmailDNS;
use Mixno35\Validator\Rules\Email\EmailTemp;

use Mixno35\Validator\Validator;
use Mixno35\Validator\ValidatorRule;

require_once __DIR__ . '/vendor/autoload.php';

$validator = Validator::validate('mixno35@yandex.com',
    new ValidatorRule(new Email(), 'Example message error.'),
    new ValidatorRule(new EmailTemp(), 'Example message error.'),
    new ValidatorRule(new EmailDNS(), 'Example message error.')
);

// If the Validator returns null, then there are no errors.
echo $validator !== null ? $validator->rule()->getMessageError() : ''; // 'Example message error.'
```

## ✅ Available validation rules:  
> `new Email()` - Checks whether this value is an email address.  
> `new EmailTemp()` - Checks whether the email is temporary.  
> `new EmailDNS()` - Checks whether the domain has MX-record for receiving emails.  
> `new MaxLength(maxLength: 16)` - Checks whether the value does not exceed the maximum allowed length.  
> `new MinLength(minLength: 3)` - Checks whether the value reaches the minimum length.  

## 🎨 Creating your own validation rules
A simple example new class Rule:
```php
<?php

namespace Your\App\Rules;

use Mixno35\Validator\Interfaces\RuleInterface;

class MaxLength implements RuleInterface
{

    protected int $maxLength;

    public function __construct(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }

    // true - validate OK, false - validate ERROR
    public function process($var): bool
    {
        return !(mb_strlen((string)$var) > $this->getMaxLength());
    }

    protected function getMaxLength(): int
    {
        return $this->maxLength;
    }
}
```

A simple example use your class Rule:
```php
<?php

use Your\App\Rules\MaxLength;

use Mixno35\Validator\Validator;
use Mixno35\Validator\ValidatorRule;

require_once __DIR__ . '/vendor/autoload.php';

$validator = Validator::validate('mixno35@yandex.com',
    new ValidatorRule(new MaxLength(25), 'Example message error.')
);
```
