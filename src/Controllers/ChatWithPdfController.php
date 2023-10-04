<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Controllers;

use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\QueryParam;
use CoreInterfaces\Core\Request\RequestMethod;
use TaamAiUserLib\Exceptions\ApiException;
use TaamAiUserLib\Utils\FileWrapper;

class ChatWithPdfController extends BaseController
{
    /**
     * @param FileWrapper $file
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function uploadFileForChatPdf(FileWrapper $file): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/add-url')
            ->auth('global')
            ->parameters(FormParam::init('file', $file));

        $this->execute($_reqBuilder);
    }

    /**
     * @param string $question
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendAndGetMsgToChatPdf(string $question): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/send-message')
            ->auth('global')
            ->parameters(FormParam::init('question', $question));

        $this->execute($_reqBuilder);
    }

    /**
     * @param FileWrapper $file
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function pdfToText(FileWrapper $file): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/pdf-text')
            ->auth('global')
            ->parameters(FormParam::init('file', $file));

        $this->execute($_reqBuilder);
    }

    /**
     * @param FileWrapper $file
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fileUpload(FileWrapper $file): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/pdf/upload')
            ->auth('global')
            ->parameters(FormParam::init('file', $file));

        $this->execute($_reqBuilder);
    }

    /**
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function answerTheQuestion(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/')->auth('global');

        $this->execute($_reqBuilder);
    }

    /**
     * @param string $question
     * @param string $path
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function newRequest(string $question, string $path): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/pdf/text')
            ->auth('global')
            ->parameters(QueryParam::init('question', $question), QueryParam::init('path', $path));

        $this->execute($_reqBuilder);
    }
}
