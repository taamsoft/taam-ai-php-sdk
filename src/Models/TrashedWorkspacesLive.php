<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class TrashedWorkspacesLive implements \JsonSerializable
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * @var Data2[]
     */
    private $data;

    /**
     * @param string $status
     * @param string $message
     * @param Data2[] $data
     */
    public function __construct(string $status, string $message, array $data)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @required
     * @maps message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Data.
     *
     * @return Data2[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     *
     * @param Data2[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
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
        $json['status']  = $this->status;
        $json['message'] = $this->message;
        $json['data']    = $this->data;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
