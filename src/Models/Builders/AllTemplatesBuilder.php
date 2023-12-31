<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\AllTemplates;

/**
 * Builder for model AllTemplates
 *
 * @see AllTemplates
 */
class AllTemplatesBuilder
{
    /**
     * @var AllTemplates
     */
    private $instance;

    private function __construct(AllTemplates $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new all templates Builder object.
     */
    public static function init(string $code, string $status, string $message, array $data): self
    {
        return new self(new AllTemplates($code, $status, $message, $data));
    }

    /**
     * Initializes a new all templates object.
     */
    public function build(): AllTemplates
    {
        return CoreHelper::clone($this->instance);
    }
}
