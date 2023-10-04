<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\CustomTemplateGenerateLive;

/**
 * Builder for model CustomTemplateGenerateLive
 *
 * @see CustomTemplateGenerateLive
 */
class CustomTemplateGenerateLiveBuilder
{
    /**
     * @var CustomTemplateGenerateLive
     */
    private $instance;

    private function __construct(CustomTemplateGenerateLive $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new custom template generate live Builder object.
     */
    public static function init(string $status, string $message): self
    {
        return new self(new CustomTemplateGenerateLive($status, $message));
    }

    /**
     * Initializes a new custom template generate live object.
     */
    public function build(): CustomTemplateGenerateLive
    {
        return CoreHelper::clone($this->instance);
    }
}