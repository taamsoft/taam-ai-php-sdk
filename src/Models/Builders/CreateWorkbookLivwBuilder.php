<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\CreateWorkbookLivw;
use TaamAiUserLib\Models\Data;

/**
 * Builder for model CreateWorkbookLivw
 *
 * @see CreateWorkbookLivw
 */
class CreateWorkbookLivwBuilder
{
    /**
     * @var CreateWorkbookLivw
     */
    private $instance;

    private function __construct(CreateWorkbookLivw $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create workbook livw Builder object.
     */
    public static function init(string $status, string $message, Data $data): self
    {
        return new self(new CreateWorkbookLivw($status, $message, $data));
    }

    /**
     * Initializes a new create workbook livw object.
     */
    public function build(): CreateWorkbookLivw
    {
        return CoreHelper::clone($this->instance);
    }
}
