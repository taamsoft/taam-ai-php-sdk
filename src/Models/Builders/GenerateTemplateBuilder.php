<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\GenerateTemplate;

/**
 * Builder for model GenerateTemplate
 *
 * @see GenerateTemplate
 */
class GenerateTemplateBuilder
{
    /**
     * @var GenerateTemplate
     */
    private $instance;

    private function __construct(GenerateTemplate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new generate template Builder object.
     */
    public static function init(string $status, string $maxResults, string $temperature, int $maxWords, int $id): self
    {
        return new self(new GenerateTemplate($status, $maxResults, $temperature, $maxWords, $id));
    }

    /**
     * Initializes a new generate template object.
     */
    public function build(): GenerateTemplate
    {
        return CoreHelper::clone($this->instance);
    }
}
