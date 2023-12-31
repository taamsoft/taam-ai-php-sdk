<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Data15;

/**
 * Builder for model Data15
 *
 * @see Data15
 */
class Data15Builder
{
    /**
     * @var Data15
     */
    private $instance;

    private function __construct(Data15 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 15 Builder object.
     */
    public static function init(
        int $id,
        int $userId,
        string $name,
        string $icon,
        string $description,
        string $templateCode,
        string $lang,
        int $status,
        int $professional,
        int $new,
        int $public,
        int $edit,
        string $group,
        string $slug,
        string $type,
        int $tone,
        array $fields,
        string $package,
        string $createdAt,
        string $updatedAt
    ): self {
        return new self(new Data15(
            $id,
            $userId,
            $name,
            $icon,
            $description,
            $templateCode,
            $lang,
            $status,
            $professional,
            $new,
            $public,
            $edit,
            $group,
            $slug,
            $type,
            $tone,
            $fields,
            $package,
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
     * Sets prompt field.
     */
    public function prompt(?string $value): self
    {
        $this->instance->setPrompt($value);
        return $this;
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
     * Initializes a new data 15 object.
     */
    public function build(): Data15
    {
        return CoreHelper::clone($this->instance);
    }
}
