<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models\Builders;

use Core\Utils\CoreHelper;
use TaamAiUserLib\Models\Data4;

/**
 * Builder for model Data4
 *
 * @see Data4
 */
class Data4Builder
{
    /**
     * @var Data4
     */
    private $instance;

    private function __construct(Data4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 4 Builder object.
     */
    public static function init(
        int $id,
        int $userId,
        string $language,
        string $templateName,
        int $workbookId,
        int $workbookFolderId,
        string $icon,
        string $group,
        int $draft,
        string $languageName,
        string $languageFlag,
        int $tokens,
        string $planType,
        string $createdAt,
        string $updatedAt
    ): self {
        return new self(new Data4(
            $id,
            $userId,
            $language,
            $templateName,
            $workbookId,
            $workbookFolderId,
            $icon,
            $group,
            $draft,
            $languageName,
            $languageFlag,
            $tokens,
            $planType,
            $createdAt,
            $updatedAt
        ));
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets input text field.
     */
    public function inputText(?string $value): self
    {
        $this->instance->setInputText($value);
        return $this;
    }

    /**
     * Sets result text field.
     */
    public function resultText(?string $value): self
    {
        $this->instance->setResultText($value);
        return $this;
    }

    /**
     * Sets model field.
     */
    public function model(?string $value): self
    {
        $this->instance->setModel($value);
        return $this;
    }

    /**
     * Sets template code field.
     */
    public function templateCode(?string $value): self
    {
        $this->instance->setTemplateCode($value);
        return $this;
    }

    /**
     * Sets workbook field.
     */
    public function workbook(?string $value): self
    {
        $this->instance->setWorkbook($value);
        return $this;
    }

    /**
     * Sets tags field.
     */
    public function tags(?string $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets words field.
     */
    public function words($value): self
    {
        $this->instance->setWords($value);
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
     * Initializes a new data 4 object.
     */
    public function build(): Data4
    {
        return CoreHelper::clone($this->instance);
    }
}