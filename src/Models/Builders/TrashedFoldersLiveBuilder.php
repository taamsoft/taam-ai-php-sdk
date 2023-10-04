<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\TrashedFoldersLive;

/**
 * Builder for model TrashedFoldersLive
 *
 * @see TrashedFoldersLive
 */
class TrashedFoldersLiveBuilder
{
    /**
     * @var TrashedFoldersLive
     */
    private $instance;

    private function __construct(TrashedFoldersLive $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new trashed folders live Builder object.
     */
    public static function init(string $status, string $message, array $data): self
    {
        return new self(new TrashedFoldersLive($status, $message, $data));
    }

    /**
     * Initializes a new trashed folders live object.
     */
    public function build(): TrashedFoldersLive
    {
        return CoreHelper::clone($this->instance);
    }
}
