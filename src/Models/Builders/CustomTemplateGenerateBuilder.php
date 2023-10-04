<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\CustomTemplateGenerate;

/**
 * Builder for model CustomTemplateGenerate
 *
 * @see CustomTemplateGenerate
 */
class CustomTemplateGenerateBuilder
{
    /**
     * @var CustomTemplateGenerate
     */
    private $instance;

    private function __construct(CustomTemplateGenerate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new custom template generate Builder object.
     */
    public static function init(string $status, string $maxResults, string $temperature, int $maxWords, int $id): self
    {
        return new self(new CustomTemplateGenerate($status, $maxResults, $temperature, $maxWords, $id));
    }

    /**
     * Initializes a new custom template generate object.
     */
    public function build(): CustomTemplateGenerate
    {
        return CoreHelper::clone($this->instance);
    }
}
