<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class AllWorkbooksLive implements \JsonSerializable
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $mesaage;

    /**
     * @var Datum1[]
     */
    private $data;

    /**
     * @param int $code
     * @param string $status
     * @param string $mesaage
     * @param Datum1[] $data
     */
    public function __construct(int $code, string $status, string $mesaage, array $data)
    {
        $this->code = $code;
        $this->status = $status;
        $this->mesaage = $mesaage;
        $this->data = $data;
    }

    /**
     * Returns Code.
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @required
     * @maps code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
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
     * Returns Mesaage.
     */
    public function getMesaage(): string
    {
        return $this->mesaage;
    }

    /**
     * Sets Mesaage.
     *
     * @required
     * @maps mesaage
     */
    public function setMesaage(string $mesaage): void
    {
        $this->mesaage = $mesaage;
    }

    /**
     * Returns Data.
     *
     * @return Datum1[]
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
     * @param Datum1[] $data
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
        $json['code']    = $this->code;
        $json['status']  = $this->status;
        $json['mesaage'] = $this->mesaage;
        $json['data']    = $this->data;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
