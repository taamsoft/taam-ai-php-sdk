<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class Data10 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $subName;

    /**
     * @var string
     */
    private $chatCode;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $prompt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $deletedAt;

    /**
     * @param int $id
     * @param string $name
     * @param string $subName
     * @param string $chatCode
     * @param string $logo
     * @param int $status
     * @param string $prompt
     * @param string $description
     * @param string $category
     * @param string $type
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(
        int $id,
        string $name,
        string $subName,
        string $chatCode,
        string $logo,
        int $status,
        string $prompt,
        string $description,
        string $category,
        string $type,
        string $createdAt,
        string $updatedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->subName = $subName;
        $this->chatCode = $chatCode;
        $this->logo = $logo;
        $this->status = $status;
        $this->prompt = $prompt;
        $this->description = $description;
        $this->category = $category;
        $this->type = $type;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Sub Name.
     */
    public function getSubName(): string
    {
        return $this->subName;
    }

    /**
     * Sets Sub Name.
     *
     * @required
     * @maps sub_name
     */
    public function setSubName(string $subName): void
    {
        $this->subName = $subName;
    }

    /**
     * Returns Chat Code.
     */
    public function getChatCode(): string
    {
        return $this->chatCode;
    }

    /**
     * Sets Chat Code.
     *
     * @required
     * @maps chat_code
     */
    public function setChatCode(string $chatCode): void
    {
        $this->chatCode = $chatCode;
    }

    /**
     * Returns Logo.
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * Sets Logo.
     *
     * @required
     * @maps logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Prompt.
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * Sets Prompt.
     *
     * @required
     * @maps prompt
     */
    public function setPrompt(string $prompt): void
    {
        $this->prompt = $prompt;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Category.
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     *
     * @required
     * @maps category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @required
     * @maps updated_at
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     */
    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']          = $this->id;
        $json['name']        = $this->name;
        $json['sub_name']    = $this->subName;
        $json['chat_code']   = $this->chatCode;
        $json['logo']        = $this->logo;
        $json['status']      = $this->status;
        $json['prompt']      = $this->prompt;
        $json['description'] = $this->description;
        $json['category']    = $this->category;
        $json['type']        = $this->type;
        $json['created_at']  = $this->createdAt;
        $json['updated_at']  = $this->updatedAt;
        $json['deleted_at']  = $this->deletedAt;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
