<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class Datum implements \JsonSerializable
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
    private $icon;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var int
     */
    private $popular;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $templateCode;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $professional;

    /**
     * @var int
     */
    private $new;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $group;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $fields;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @param int $id
     * @param string $name
     * @param string $icon
     * @param int $popular
     * @param string $description
     * @param string $templateCode
     * @param int $status
     * @param int $professional
     * @param int $new
     * @param string $type
     * @param string $group
     * @param string $slug
     * @param string $package
     * @param string $fields
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(
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
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->popular = $popular;
        $this->description = $description;
        $this->templateCode = $templateCode;
        $this->status = $status;
        $this->professional = $professional;
        $this->new = $new;
        $this->type = $type;
        $this->group = $group;
        $this->slug = $slug;
        $this->package = $package;
        $this->fields = $fields;
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
     * Returns Icon.
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * Sets Icon.
     *
     * @required
     * @maps icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * Returns Image.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Sets Image.
     *
     * @maps image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * Returns Popular.
     */
    public function getPopular(): int
    {
        return $this->popular;
    }

    /**
     * Sets Popular.
     *
     * @required
     * @maps popular
     */
    public function setPopular(int $popular): void
    {
        $this->popular = $popular;
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
     * Returns Template Code.
     */
    public function getTemplateCode(): string
    {
        return $this->templateCode;
    }

    /**
     * Sets Template Code.
     *
     * @required
     * @maps template_code
     */
    public function setTemplateCode(string $templateCode): void
    {
        $this->templateCode = $templateCode;
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
     * Returns Professional.
     */
    public function getProfessional(): int
    {
        return $this->professional;
    }

    /**
     * Sets Professional.
     *
     * @required
     * @maps professional
     */
    public function setProfessional(int $professional): void
    {
        $this->professional = $professional;
    }

    /**
     * Returns New.
     */
    public function getNew(): int
    {
        return $this->new;
    }

    /**
     * Sets New.
     *
     * @required
     * @maps new
     */
    public function setNew(int $new): void
    {
        $this->new = $new;
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
     * Returns Group.
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * Sets Group.
     *
     * @required
     * @maps group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * Returns Slug.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Sets Slug.
     *
     * @required
     * @maps slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * Returns Package.
     */
    public function getPackage(): string
    {
        return $this->package;
    }

    /**
     * Sets Package.
     *
     * @required
     * @maps package
     */
    public function setPackage(string $package): void
    {
        $this->package = $package;
    }

    /**
     * Returns Fields.
     */
    public function getFields(): string
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     *
     * @required
     * @maps fields
     */
    public function setFields(string $fields): void
    {
        $this->fields = $fields;
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
        $json['id']            = $this->id;
        $json['name']          = $this->name;
        $json['icon']          = $this->icon;
        $json['image']         = $this->image;
        $json['popular']       = $this->popular;
        $json['description']   = $this->description;
        $json['template_code'] = $this->templateCode;
        $json['status']        = $this->status;
        $json['professional']  = $this->professional;
        $json['new']           = $this->new;
        $json['type']          = $this->type;
        $json['group']         = $this->group;
        $json['slug']          = $this->slug;
        $json['package']       = $this->package;
        $json['fields']        = $this->fields;
        $json['created_at']    = $this->createdAt;
        $json['updated_at']    = $this->updatedAt;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
