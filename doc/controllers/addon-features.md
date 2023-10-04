# Addon Features

```php
$addonFeaturesController = $client->getAddonFeaturesController();
```

## Class Name

`AddonFeaturesController`

## Methods

* [Generate Code](../../doc/controllers/addon-features.md#generate-code)
* [Save Code in Workspace](../../doc/controllers/addon-features.md#save-code-in-workspace)
* [Generate Image From AI](../../doc/controllers/addon-features.md#generate-image-from-ai)
* [Generate Speech to Text](../../doc/controllers/addon-features.md#generate-speech-to-text)
* [Save Transcript](../../doc/controllers/addon-features.md#save-transcript)


# Generate Code

```php
function generateCode(string $language, string $instructions, string $document, int $userId): GenerateCode
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `language` | `string` | Query, Required | - |
| `instructions` | `string` | Query, Required | - |
| `document` | `string` | Query, Required | - |
| `userId` | `int` | Query, Required | - |

## Response Type

[`GenerateCode`](../../doc/models/generate-code.md)

## Example Usage

```php
$language = 'php';

$instructions = 'generate a code to store image';

$document = 'new checking';

$userId = 1;

$result = $addonFeaturesController->generateCode(
    $language,
    $instructions,
    $document,
    $userId
);
```

## Example Response *(as JSON)*

```json
{
  "text": "Sure, Here's a basic PHP script to upload an image to a server. This code assumes that you have a form in HTML that allows users to choose the image they want to upload.\n\n```php\n<?php\n   if(isset($_POST['submit'])){\n      $errors= array();\n      $file_name = $_FILES['image']['name'];\n      $file_size = $_FILES['image']['size'];\n      $file_tmp = $_FILES['image']['tmp_name'];\n      $file_type = $_FILES['image']['type'];\n      $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));\n\n      $extensions= array(\"jpeg\",\"jpg\",\"png\");\n\n      if(in_array($file_ext,$extensions) === false){\n         $errors[]=\"extension not allowed, please choose a JPEG or PNG file.\";\n      }\n\n      if($file_size > 2097152){\n         $errors[]='File size must be less than 2 MB';\n      }\n\n      if(empty($errors) == true){\n         move_uploaded_file($file_tmp,\"images/\".$file_name);\n         echo \"Image Successfully Uploaded!\";\n      } else {\n         print_r($errors);\n      }\n   }\n?>\n```\n\nThis code checks if the image has the correct filetype and file size less than 2MB. If all conditions are correct, it uploads the image file to the \"images\" directory. Else, it prints out the corresponding errors.\n\nYou will also need a HTML form as below:\n\n```html\n<form action = \"\" method = \"POST\" enctype = \"multipart/form-data\">\n     <input type = \"file\" name = \"image\" />\n     <input type = \"submit\" name = \"submit\"/>\n</form>\n```\nThis form should be placed in the same PHP file above. \n\nPlease remember to create the directory where the image file will be saved if it doesn't exist yet. Make sure that its permissions allow the web server to write files.",
  "status": "success",
  "id": 31,
  "old": "10000000",
  "current": 9999572
}
```


# Save Code in Workspace

```php
function saveCodeInWorkspace(int $workbookId, int $userId, int $folderId, int $codeId): SaveCodeInWorkspace
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `workbookId` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |
| `codeId` | `int` | Query, Required | - |

## Response Type

[`SaveCodeInWorkspace`](../../doc/models/save-code-in-workspace.md)

## Example Usage

```php
$workbookId = 1;

$userId = 1;

$folderId = 1;

$codeId = 32;

$result = $addonFeaturesController->saveCodeInWorkspace(
    $workbookId,
    $userId,
    $folderId,
    $codeId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Code Saved Successfully"
}
```


# Generate Image From AI

```php
function generateImageFromAI(
    int $userId,
    string $name,
    string $title,
    int $workbookId,
    int $workbookFolderId,
    int $maxResults,
    string $resolution
): GenerateImageFromAI
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `name` | `string` | Query, Required | - |
| `title` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `workbookFolderId` | `int` | Query, Required | - |
| `maxResults` | `int` | Query, Required | - |
| `resolution` | `string` | Query, Required | - |

## Response Type

[`GenerateImageFromAI`](../../doc/models/generate-image-from-ai.md)

## Example Usage

```php
$userId = 1;

$name = 'sample checking';

$title = 'need a eagle image';

$workbookId = 1;

$workbookFolderId = 1;

$maxResults = 1;

$resolution = '256x256';

$result = $addonFeaturesController->generateImageFromAI(
    $userId,
    $name,
    $title,
    $workbookId,
    $workbookFolderId,
    $maxResults,
    $resolution
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "old": "10000000",
  "current": 9999999,
  "data": {
    "user_id": 1,
    "name": "sample checking",
    "description": "need a eagle image",
    "resolution": "256x256",
    "image": "assets/images/65156efb84c6c_3",
    "plan_type": "paid",
    "storage": "local",
    "expires_at": "2073-09-15T12:18:03.545504Z",
    "image_name": "images/ix3Y9KswvE.png",
    "workbook_id": "1",
    "workbook_folder_id": "1",
    "updated_at": "2023-09-28T12:18:03.000000Z",
    "created_at": "2023-09-28T12:18:03.000000Z",
    "id": 92,
    "image_url": "http://127.0.0.1:8000/assets/images/65156efb84c6c_3"
  }
}
```


# Generate Speech to Text

```php
function generateSpeechToText(
    int $userId,
    string $document,
    int $workbookId,
    int $workbookFolderId,
    string $language,
    string $task,
    FileWrapper $audioFile
): GenerateSpeechToText
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Form, Required | - |
| `document` | `string` | Form, Required | - |
| `workbookId` | `int` | Form, Required | - |
| `workbookFolderId` | `int` | Form, Required | - |
| `language` | `string` | Form, Required | - |
| `task` | `string` | Form, Required | - |
| `audioFile` | `FileWrapper` | Form, Required | - |

## Response Type

[`GenerateSpeechToText`](../../doc/models/generate-speech-to-text.md)

## Example Usage

```php
$userId = 1;

$document = 'new';

$workbookId = 1;

$workbookFolderId = 1;

$language = 'en';

$task = 'transcribe';

$audioFile = FileWrapper::createFromPath('dummy_file');

$result = $addonFeaturesController->generateSpeechToText(
    $userId,
    $document,
    $workbookId,
    $workbookFolderId,
    $language,
    $task,
    $audioFile
);
```

## Example Response *(as JSON)*

```json
{
  "text": "Marhaban, ana al-mutahaddithi al-iftiradi min imza'i al-jawda. Da'ani ulqi al-tahiyyata ala jumhourik wa u'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut'a.",
  "status": "success",
  "url": "http://127.0.0.1:8000/transcribe/0p8DmYbj2WkiONOe1xsSf6nVIZERRJgE8RJELnvG.mp3",
  "id": 43,
  "old": "10000000",
  "current": 10000000
}
```


# Save Transcript

```php
function saveTranscript(
    int $userId,
    string $title,
    int $transcriptId,
    string $text,
    int $workbookId,
    int $workbookFolderId
): SaveTranscript
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `title` | `string` | Query, Required | - |
| `transcriptId` | `int` | Query, Required | - |
| `text` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `workbookFolderId` | `int` | Query, Required | - |

## Response Type

[`SaveTranscript`](../../doc/models/save-transcript.md)

## Example Usage

```php
$userId = 1;

$title = 'New task';

$transcriptId = 43;

$text = 'Marhaban, ana al-mutahaddithi al-iftiradi min imza\'i al-jawda. Da\'ani ulqi al-tahiyyata ala jumhourik wa u\'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut\'a.",
    "status": "success';

$workbookId = 1;

$workbookFolderId = 1;

$result = $addonFeaturesController->saveTranscript(
    $userId,
    $title,
    $transcriptId,
    $text,
    $workbookId,
    $workbookFolderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Transcript saved successfully"
}
```

