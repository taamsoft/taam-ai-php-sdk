<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Data2;

/**
 * Builder for model Data2
 *
 * @see Data2
 */
class Data2Builder
{
    /**
     * @var Data2
     */
    private $instance;

    private function __construct(Data2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 2 Builder object.
     */
    public static function init(
        int $id,
        int $userId,
        string $name,
        int $default,
        string $createdAt,
        string $updatedAt,
        string $deletedAt
    ): self {
        return new self(new Data2($id, $userId, $name, $default, $createdAt, $updatedAt, $deletedAt));
    }

    /**
     * Initializes a new data 2 object.
     */
    public function build(): Data2
    {
        return CoreHelper::clone($this->instance);
    }
}
