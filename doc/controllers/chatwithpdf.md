# Chatwithpdf

```php
$chatwithpdfController = $client->getChatwithpdfController();
```

## Class Name

`ChatwithpdfController`

## Methods

* [Upload File for Chat Pdf](../../doc/controllers/chatwithpdf.md#upload-file-for-chat-pdf)
* [Send and Get Msg to Chat Pdf](../../doc/controllers/chatwithpdf.md#send-and-get-msg-to-chat-pdf)
* [Pdf to Text](../../doc/controllers/chatwithpdf.md#pdf-to-text)
* [File Upload](../../doc/controllers/chatwithpdf.md#file-upload)
* [Answer the Question](../../doc/controllers/chatwithpdf.md#answer-the-question)
* [New Request](../../doc/controllers/chatwithpdf.md#new-request)


# Upload File for Chat Pdf

```php
function uploadFileForChatPdf(FileWrapper $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$chatWithPdfController->uploadFileForChatPdf($file);
```


# Send and Get Msg to Chat Pdf

```php
function sendAndGetMsgToChatPdf(string $question): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `question` | `string` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$question = 'what is the education';

$chatWithPdfController->sendAndGetMsgToChatPdf($question);
```


# Pdf to Text

```php
function pdfToText(FileWrapper $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$chatWithPdfController->pdfToText($file);
```


# File Upload

```php
function fileUpload(FileWrapper $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$chatWithPdfController->fileUpload($file);
```


# Answer the Question

```php
function answerTheQuestion(): void
```

## Response Type

`void`

## Example Usage

```php
$chatWithPdfController->answerTheQuestion();
```


# New Request

```php
function newRequest(string $question, string $path): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `question` | `string` | Query, Required | - |
| `path` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$question = 'what data this file contains';

$path = 'assets/pdf/64ef458eabc4e_Soban-Shahid (Laravel).pdf';

$chatWithPdfController->newRequest(
    $question,
    $path
);
```

