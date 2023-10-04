<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Datum;

/**
 * Builder for model Datum
 *
 * @see Datum
 */
class DatumBuilder
{
    /**
     * @var Datum
     */
    private $instance;

    private function __construct(Datum $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new datum Builder object.
     */
    public static function init(
        int $id,
        string $name,
        string $icon,
        int $popular,
        string $description,
        string $templateCode,
        int $status,
        int $professional,
        int $new,
        string $type,
        string $group,
        string $slug,
        string $package,
        string $fields,
        string $createdAt,
        string $updatedAt
    ): self {
        return new self(new Datum(
            $id,
            $name,
            $icon,
            $popular,
            $description,
            $templateCode,
            $status,
            $professional,
            $new,
            $type,
            $group,
            $slug,
            $package,
            $fields,
            $createdAt,
            $updatedAt
        ));
    }

    /**
     * Sets image field.
     */
    public function image(?string $value): self
    {
        $this->instance->setImage($value);
        return $this;
    }

    /**
     * Initializes a new datum object.
     */
    public function build(): Datum
    {
        return CoreHelper::clone($this->instance);
    }
}