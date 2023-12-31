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
use TaamAiUserLib\Models\GenerateCode;
use TaamAiUserLib\Models\GenerateImageFromAI;
use TaamAiUserLib\Models\GenerateSpeechToText;
use TaamAiUserLib\Models\SaveCodeInWorkspace;
use TaamAiUserLib\Models\SaveTranscript;
use TaamAiUserLib\Server;
use TaamAiUserLib\Utils\FileWrapper;

class AddonFeaturesController extends BaseController
{
    /**
     * @param string $language
     * @param string $instructions
     * @param string $document
     * @param int $userId
     *
     * @return GenerateCode Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generateCode(string $language, string $instructions, string $document, int $userId): GenerateCode
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/code/process')
            ->server(Server::SERVER_2)
            ->auth('global')
            ->parameters(
                QueryParam::init('language', $language),
                QueryParam::init('instructions', $instructions),
                QueryParam::init('document', $document),
                QueryParam::init('user_id', $userId)
            );

        $_resHandler = $this->responseHandler()->type(GenerateCode::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $workbookId
     * @param int $userId
     * @param int $folderId
     * @param int $codeId
     *
     * @return SaveCodeInWorkspace Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function saveCodeInWorkspace(int $workbookId, int $userId, int $folderId, int $codeId): SaveCodeInWorkspace
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/code/save')
            ->server(Server::SERVER_2)
            ->auth('global')
            ->parameters(
                QueryParam::init('workbook_id', $workbookId),
                QueryParam::init('user_id', $userId),
                QueryParam::init('folder_id', $folderId),
                QueryParam::init('code_id', $codeId)
            );

        $_resHandler = $this->responseHandler()->type(SaveCodeInWorkspace::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $userId
     * @param string $name
     * @param string $title
     * @param int $workbookId
     * @param int $workbookFolderId
     * @param int $maxResults
     * @param string $resolution
     *
     * @return GenerateImageFromAI Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generateImageFromAI(
        int $userId,
        string $name,
        string $title,
        int $workbookId,
        int $workbookFolderId,
        int $maxResults,
        string $resolution
    ): GenerateImageFromAI {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/image/process')
            ->server(Server::SERVER_2)
            ->auth('global')
            ->parameters(
                QueryParam::init('user_id', $userId),
                QueryParam::init('name', $name),
                QueryParam::init('title', $title),
                QueryParam::init('workbook_id', $workbookId),
                QueryParam::init('workbook_folder_id', $workbookFolderId),
                QueryParam::init('max_results', $maxResults),
                QueryParam::init('resolution', $resolution)
            );

        $_resHandler = $this->responseHandler()->type(GenerateImageFromAI::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $userId
     * @param string $document
     * @param int $workbookId
     * @param int $workbookFolderId
     * @param string $language
     * @param string $task
     * @param FileWrapper $audioFile
     *
     * @return GenerateSpeechToText Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generateSpeechToText(
        int $userId,
        string $document,
        int $workbookId,
        int $workbookFolderId,
        string $language,
        string $task,
        FileWrapper $audioFile
    ): GenerateSpeechToText {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transcribe/process')
            ->server(Server::SERVER_2)
            ->auth('global')
            ->parameters(
                FormParam::init('user_id', $userId),
                FormParam::init('document', $document),
                FormParam::init('workbook_id', $workbookId),
                FormParam::init('workbook_folder_id', $workbookFolderId),
                FormParam::init('language', $language),
                FormParam::init('task', $task),
                FormParam::init('audio_file', $audioFile)
            );

        $_resHandler = $this->responseHandler()->type(GenerateSpeechToText::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $userId
     * @param string $title
     * @param int $transcriptId
     * @param string $text
     * @param int $workbookId
     * @param int $workbookFolderId
     *
     * @return SaveTranscript Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function saveTranscript(
        int $userId,
        string $title,
        int $transcriptId,
        string $text,
        int $workbookId,
        int $workbookFolderId
    ): SaveTranscript {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transcribe/save')
            ->server(Server::SERVER_2)
            ->auth('global')
            ->parameters(
                QueryParam::init('user_id', $userId),
                QueryParam::init('title', $title),
                QueryParam::init('transcript_id', $transcriptId),
                QueryParam::init('text', $text),
                QueryParam::init('workbook_id', $workbookId),
                QueryParam::init('workbook_folder_id', $workbookFolderId)
            );

        $_resHandler = $this->responseHandler()->type(SaveTranscript::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
