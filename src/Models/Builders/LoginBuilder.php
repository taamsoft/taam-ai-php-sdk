<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Login;
use TaamAiUserLib\Models\User;

/**
 * Builder for model Login
 *
 * @see Login
 */
class LoginBuilder
{
    /**
     * @var Login
     */
    private $instance;

    private function __construct(Login $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new login Builder object.
     */
    public static function init(
        bool $status,
        string $message,
        string $accessToken,
        string $tokenType,
        User $user
    ): self {
        return new self(new Login($status, $message, $accessToken, $tokenType, $user));
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Initializes a new login object.
     */
    public function build(): Login
    {
        return CoreHelper::clone($this->instance);
    }
}
