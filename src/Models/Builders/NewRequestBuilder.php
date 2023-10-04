<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\NewRequest;

/**
 * Builder for model NewRequest
 *
 * @see NewRequest
 */
class NewRequestBuilder
{
    /**
     * @var NewRequest
     */
    private $instance;

    private function __construct(NewRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new request Builder object.
     */
    public static function init(string $status, string $message, int $count, array $data): self
    {
        return new self(new NewRequest($status, $message, $count, $data));
    }

    /**
     * Initializes a new new request object.
     */
    public function build(): NewRequest
    {
        return CoreHelper::clone($this->instance);
    }
}