<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Datum1;

/**
 * Builder for model Datum1
 *
 * @see Datum1
 */
class Datum1Builder
{
    /**
     * @var Datum1
     */
    private $instance;

    private function __construct(Datum1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new datum 1 Builder object.
     */
    public static function init(
        int $id,
        int $userId,
        string $name,
        int $default,
        string $createdAt,
        string $updatedAt,
        array $folders
    ): self {
        return new self(new Datum1($id, $userId, $name, $default, $createdAt, $updatedAt, $folders));
    }

    /**
     * Sets deleted at field.
     */
    public function deletedAt(?string $value): self
    {
        $this->instance->setDeletedAt($value);
        return $this;
    }

    /**
     * Initializes a new datum 1 object.
     */
    public function build(): Datum1
    {
        return CoreHelper::clone($this->instance);
    }
}
