<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use TaamAiUserLib\Controllers\AddonFeaturesController;
use TaamAiUserLib\Exceptions;

class AddonFeaturesControllerTest extends BaseTestController
{
    /**
     * @var AddonFeaturesController AddonFeaturesController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getAddonFeaturesController();
    }

    public function testGenerateCode()
    {
        // Parameters for the API call
        $language = 'php';
        $instructions = 'generate a code to store image';
        $document = 'new checking';
        $userId = 1;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->generateCode($language, $instructions, $document, $userId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Host'] = ['127.0.0.1:8000', false];
        $headers['Date'] = ['Thu, 28 Sep 2023 10:30:52 GMT', false];
        $headers['Connection'] = ['close', false];
        $headers['X-Powered-By'] = ['PHP/8.1.6', false];
        $headers['Cache-Control'] = ['no-cache, private', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['59', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"text\": \"Sure, Here's a basic PHP script to upload an image to a ser" .
                "ver. This code assumes that you have a form in HTML that allows users to choose" .
                " the image they want to upload.\\n\\n```php\\n<?php\\n   if(isset(\$_POST['subm" .
                "it'])){\\n      \$errors= array();\\n      \$file_name = \$_FILES['image']['nam" .
                "e'];\\n      \$file_size = \$_FILES['image']['size'];\\n      \$file_tmp = \$_F" .
                "ILES['image']['tmp_name'];\\n      \$file_type = \$_FILES['image']['type'];\\n " .
                "     \$file_ext = strtolower(pathinfo(\$file_name, PATHINFO_EXTENSION));\\n\\n " .
                "     \$extensions= array(\\\"jpeg\\\",\\\"jpg\\\",\\\"png\\\");\\n\\n      if(i" .
                "n_array(\$file_ext,\$extensions) === false){\\n         \$errors[]=\\\"extensio" .
                "n not allowed, please choose a JPEG or PNG file.\\\";\\n      }\\n\\n      if(" .
                "\$file_size > 2097152){\\n         \$errors[]='File size must be less than 2 MB" .
                "';\\n      }\\n\\n      if(empty(\$errors) == true){\\n         move_uploaded_f" .
                "ile(\$file_tmp,\\\"images/\\\".\$file_name);\\n         echo \\\"Image Successf" .
                "ully Uploaded!\\\";\\n      } else {\\n         print_r(\$errors);\\n      }\\n" .
                "   }\\n?>\\n```\\n\\nThis code checks if the image has the correct filetype and" .
                " file size less than 2MB. If all conditions are correct, it uploads the image f" .
                "ile to the \\\"images\\\" directory. Else, it prints out the corresponding erro" .
                "rs.\\n\\nYou will also need a HTML form as below:\\n\\n```html\\n<form action =" .
                " \\\"\\\" method = \\\"POST\\\" enctype = \\\"multipart/form-data\\\">\\n     <" .
                "input type = \\\"file\\\" name = \\\"image\\\" />\\n     <input type = \\\"subm" .
                "it\\\" name = \\\"submit\\\"/>\\n</form>\\n```\\nThis form should be placed in " .
                "the same PHP file above. \\n\\nPlease remember to create the directory where th" .
                "e image file will be saved if it doesn't exist yet. Make sure that its permissi" .
                "ons allow the web server to write files.\",\r\n  \"status\": \"success\",\r\n  " .
                "\"id\": 31,\r\n  \"old\": \"10000000\",\r\n  \"current\": 9999572\r\n}"
            )))
            ->assert();
    }

    public function testSaveCodeInWorkspace()
    {
        // Parameters for the API call
        $workbookId = 1;
        $userId = 1;
        $folderId = 1;
        $codeId = 32;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->saveCodeInWorkspace($workbookId, $userId, $folderId, $codeId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Host'] = ['127.0.0.1:8000', false];
        $headers['Date'] = ['Thu, 28 Sep 2023 10:48:53 GMT', false];
        $headers['Connection'] = ['close', false];
        $headers['X-Powered-By'] = ['PHP/8.1.6', false];
        $headers['Cache-Control'] = ['no-cache, private', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['57', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object(
                    "{\r\n  \"status\": \"success\",\r\n  \"message\": \"Code Saved Successfully\"\r\n}"
                )
            ))
            ->assert();
    }

    public function testGenerateImageFromAI()
    {
        // Parameters for the API call
        $userId = 1;
        $name = 'sample checking';
        $title = 'need a eagle image';
        $workbookId = 1;
        $workbookFolderId =
            1;
        $maxResults = 1;
        $resolution = '256x256';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->generateImageFromAI(
                $userId,
                $name,
                $title,
                $workbookId,
                $workbookFolderId,
                $maxResults,
                $resolution
            );
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Host'] = ['127.0.0.1:8000', false];
        $headers['Date'] = ['Thu, 28 Sep 2023 12:18:03 GMT', false];
        $headers['Connection'] = ['close', false];
        $headers['X-Powered-By'] = ['PHP/8.1.6', false];
        $headers['Cache-Control'] = ['no-cache, private', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['59', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"status\": \"success\",\r\n  \"old\": \"10000000\",\r\n  \"current\": " .
                "9999999,\r\n  \"data\": {\r\n    \"user_id\": 1,\r\n    \"name\": \"sample chec" .
                "king\",\r\n    \"description\": \"need a eagle image\",\r\n    \"resolution\": " .
                "\"256x256\",\r\n    \"image\": \"assets/images/65156efb84c6c_3\",\r\n    \"plan" .
                "_type\": \"paid\",\r\n    \"storage\": \"local\",\r\n    \"expires_at\": \"2073" .
                "-09-15T12:18:03.545504Z\",\r\n    \"image_name\": \"images/ix3Y9KswvE.png\",\r" .
                "\n    \"workbook_id\": \"1\",\r\n    \"workbook_folder_id\": \"1\",\r\n    \"up" .
                "dated_at\": \"2023-09-28T12:18:03.000000Z\",\r\n    \"created_at\": \"2023-09-2" .
                "8T12:18:03.000000Z\",\r\n    \"id\": 92,\r\n    \"image_url\": \"http://127.0.0" .
                ".1:8000/assets/images/65156efb84c6c_3\"\r\n  }\r\n}"
            )))
            ->assert();
    }

    public function testSaveTranscript()
    {
        // Parameters for the API call
        $userId = 1;
        $title = 'New task';
        $transcriptId = 43;
        $text = "Marhaban, ana al-mutahaddithi al-iftiradi min imza'i al-jawda. Da'ani ulqi al-tahiyyata ala jumhourik wa u'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut'a.\",\n    \"status\": \"success";
        $workbookId = 1;
        $workbookFolderId =
            1;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->saveTranscript(
                $userId,
                $title,
                $transcriptId,
                $text,
                $workbookId,
                $workbookFolderId
            );
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Host'] = ['127.0.0.1:8000', false];
        $headers['Date'] = ['Sat, 30 Sep 2023 07:10:58 GMT', false];
        $headers['Connection'] = ['close', false];
        $headers['X-Powered-By'] = ['PHP/8.1.6', false];
        $headers['Cache-Control'] = ['no-cache, private', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['58', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"status\": \"success\",\r\n  \"message\": \"Transcript saved successfully\"\r\n}"
            )))
            ->assert();
    }
}
