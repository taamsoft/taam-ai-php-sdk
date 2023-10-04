<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Controllers;

use Core\Request\Parameters\QueryParam;
use CoreInterfaces\Core\Request\RequestMethod;
use TaamAiUserLib\Exceptions\ApiException;
use TaamAiUserLib\Models\AllTemplates;
use TaamAiUserLib\Models\GenerateTemplate;
use TaamAiUserLib\Models\ProcessTemplate;

class TemplatesController extends BaseController
{
    /**
     * @param int $userId
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function favTemplates(int $userId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/templates/favorite')
            ->auth('global')
            ->parameters(QueryParam::init('user_id', $userId));

        $this->execute($_reqBuilder);
    }

    /**
     * @param int $userId
     *
     * @return AllTemplates Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function allTemplates(int $userId): AllTemplates
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/templates/all')
            ->auth('global')
            ->parameters(QueryParam::init('user_id', $userId));

        $_resHandler = $this->responseHandler()->type(AllTemplates::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $userId
     * @param int $templateId
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function templateDetail(int $userId, int $templateId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/templates/detail')
            ->auth('global')
            ->parameters(QueryParam::init('user_id', $userId), QueryParam::init('template_id', $templateId));

        $this->execute($_reqBuilder);
    }

    /**
     * @param int $contentId
     * @param int $maxResults
     * @param int $maxWords
     * @param float $temperature
     * @param int $userId
     *
     * @return ProcessTemplate Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function processTemplate(
        int $contentId,
        int $maxResults,
        int $maxWords,
        float $temperature,
        int $userId
    ): ProcessTemplate {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/templates/process')
            ->auth('global')
            ->parameters(
                QueryParam::init('content_id', $contentId),
                QueryParam::init('max_results', $maxResults),
                QueryParam::init('max_words', $maxWords),
                QueryParam::init('temperature', $temperature),
                QueryParam::init('user_id', $userId)
            );

        $_resHandler = $this->responseHandler()->type(ProcessTemplate::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $userId
     * @param string $templateCode
     * @param string $language
     * @param int $workbookId
     * @param int $folderId
     * @param int $maxResults
     * @param int $words
     * @param string $title
     * @param string $description
     * @param float $creativity
     *
     * @return GenerateTemplate Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generateTemplate(
        int $userId,
        string $templateCode,
        string $language,
        int $workbookId,
        int $folderId,
        int $maxResults,
        int $words,
        string $title,
        string $description,
        float $creativity
    ): GenerateTemplate {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/template/generate')
            ->auth('global')
            ->parameters(
                QueryParam::init('user_id', $userId),
                QueryParam::init('template_code', $templateCode),
                QueryParam::init('language', $language),
                QueryParam::init('workbook_id', $workbookId),
                QueryParam::init('folder_id', $folderId),
                QueryParam::init('max_results', $maxResults),
                QueryParam::init('words', $words),
                QueryParam::init('title', $title),
                QueryParam::init('description', $description),
                QueryParam::init('creativity', $creativity)
            );

        $_resHandler = $this->responseHandler()->type(GenerateTemplate::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function templateGroups(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/templates/groups')->auth('global');

        $this->execute($_reqBuilder);
    }
}
