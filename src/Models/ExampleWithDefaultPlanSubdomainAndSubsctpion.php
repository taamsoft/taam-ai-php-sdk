<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class ExampleWithDefaultPlanSubdomainAndSubsctpion implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $result;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var User2
     */
    private $user;

    /**
     * @param bool $result
     * @param string $message
     * @param string $accessToken
     * @param User2 $user
     */
    public function __construct(bool $result, string $message, string $accessToken, User2 $user)
    {
        $this->result = $result;
        $this->message = $message;
        $this->accessToken = $accessToken;
        $this->user = $user;
    }

    /**
     * Returns Result.
     */
    public function getResult(): bool
    {
        return $this->result;
    }

    /**
     * Sets Result.
     *
     * @required
     * @maps result
     */
    public function setResult(bool $result): void
    {
        $this->result = $result;
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
     * Returns Access Token.
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Sets Access Token.
     *
     * @required
     * @maps access_token
     */
    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Returns User.
     */
    public function getUser(): User2
    {
        return $this->user;
    }

    /**
     * Sets User.
     *
     * @required
     * @maps user
     */
    public function setUser(User2 $user): void
    {
        $this->user = $user;
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
        $json['result']       = $this->result;
        $json['message']      = $this->message;
        $json['access_token'] = $this->accessToken;
        $json['user']         = $this->user;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
