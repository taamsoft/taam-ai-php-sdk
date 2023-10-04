# Prompttemplate

```php
$prompttemplateController = $client->getPrompttemplateController();
```

## Class Name

`PrompttemplateController`

## Methods

* [Prompt Templates](../../doc/controllers/prompttemplate.md#prompt-templates)
* [Add and Remove From Bookmark Prompt Template](../../doc/controllers/prompttemplate.md#add-and-remove-from-bookmark-prompt-template)
* [Prompt Template Like or Remove From Like](../../doc/controllers/prompttemplate.md#prompt-template-like-or-remove-from-like)
* [Create Prompt Template](../../doc/controllers/prompttemplate.md#create-prompt-template)
* [Trashed Prompt Templates](../../doc/controllers/prompttemplate.md#trashed-prompt-templates)
* [Delete Prmopt Template](../../doc/controllers/prompttemplate.md#delete-prmopt-template)
* [Restore Prompt Template](../../doc/controllers/prompttemplate.md#restore-prompt-template)
* [Parmanent Delete Prompt Template](../../doc/controllers/prompttemplate.md#parmanent-delete-prompt-template)
* [Generate Prompt Template](../../doc/controllers/prompttemplate.md#generate-prompt-template)


# Prompt Templates

```php
function promptTemplates(int $userId, string $cat, string $subCat): PromptTemplates
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `cat` | `string` | Query, Required | - |
| `subCat` | `string` | Query, Required | - |

## Response Type

[`PromptTemplates`](../../doc/models/prompt-templates.md)

## Example Usage

```php
$userId = 1;

$cat = 'publc';

$subCat = 'all';

$result = $promptTemplateController->promptTemplates(
    $userId,
    $cat,
    $subCat
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fateched Successfully",
  "data": [
    {
      "id": 3,
      "user_id": 1,
      "name": "Sobi Rajpoot",
      "icon": "<i class=\"fa-solid fa-search-minus blog-icon\"></i>",
      "image": null,
      "description": "tone of voice generator",
      "template_code": "DAQGY",
      "lang": "en-US",
      "status": 1,
      "professional": 0,
      "new": 0,
      "public": 0,
      "edit": 0,
      "group": "public",
      "slug": "custom-template",
      "type": "custom",
      "prompt": null,
      "tone": 0,
      "fields": [],
      "package": "all",
      "created_at": "2023-07-24T13:04:48.000000Z",
      "updated_at": "2023-07-24T13:04:48.000000Z",
      "deleted_at": null
    }
  ]
}
```


# Add and Remove From Bookmark Prompt Template

```php
function addAndRemoveFromBookmarkPromptTemplate(int $userId, int $templateId): NewRequest1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`NewRequest1`](../../doc/models/new-request-1.md)

## Example Usage

```php
$userId = 1;

$templateId = 1;

$result = $promptTemplateController->addAndRemoveFromBookmarkPromptTemplate(
    $userId,
    $templateId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Added to bookmark Successfully"
}
```


# Prompt Template Like or Remove From Like

```php
function promptTemplateLikeOrRemoveFromLike(int $userId, int $templateId): PromptTemplateLikeOrRemoveFromLike
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`PromptTemplateLikeOrRemoveFromLike`](../../doc/models/prompt-template-like-or-remove-from-like.md)

## Example Usage

```php
$userId = 1;

$templateId = 1;

$result = $promptTemplateController->promptTemplateLikeOrRemoveFromLike(
    $userId,
    $templateId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "added to Liked list",
  "count": 1
}
```


# Create Prompt Template

```php
function createPromptTemplate(
    int $userId,
    int $mPublic,
    int $edit,
    string $name,
    int $activate,
    int $tone,
    string $prompt,
    string $language,
    string $package,
    string $category,
    string $names0,
    string $placeholders0,
    string $code0,
    string $inputField0
): CreatePromptTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `mPublic` | `int` | Query, Required | - |
| `edit` | `int` | Query, Required | - |
| `name` | `string` | Query, Required | - |
| `activate` | `int` | Query, Required | - |
| `tone` | `int` | Query, Required | - |
| `prompt` | `string` | Query, Required | - |
| `language` | `string` | Query, Required | - |
| `package` | `string` | Query, Required | - |
| `category` | `string` | Query, Required | - |
| `names0` | `string` | Query, Required | - |
| `placeholders0` | `string` | Query, Required | - |
| `code0` | `string` | Query, Required | - |
| `inputField0` | `string` | Query, Required | - |

## Response Type

[`CreatePromptTemplate`](../../doc/models/create-prompt-template.md)

## Example Usage

```php
$userId = 1;

$public = 1;

$edit = 1;

$name = 'New checking';

$activate = 1;

$tone = 1;

$prompt = 'Want to create vlog';

$language = 'en-US';

$package = 'all';

$category = 'text';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = $promptTemplateController->createPromptTemplate(
    $userId,
    $public,
    $edit,
    $name,
    $activate,
    $tone,
    $prompt,
    $language,
    $package,
    $category,
    $names0,
    $placeholders0,
    $code0,
    $inputField0
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Prompt template creeated Successfully"
}
```


# Trashed Prompt Templates

```php
function trashedPromptTemplates(int $userId): TrashedPromptTemplates
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`TrashedPromptTemplates`](../../doc/models/trashed-prompt-templates.md)

## Example Usage

```php
$userId = 1;

$result = $promptTemplateController->trashedPromptTemplates($userId);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "data": [
    {
      "id": 2,
      "user_id": 1,
      "name": "a",
      "icon": "<i class=\"fa-solid fa-power-off blog-icon\"></i>",
      "image": null,
      "description": "a",
      "template_code": "7AUBC",
      "lang": "en-US",
      "status": 1,
      "professional": 0,
      "new": 0,
      "public": 1,
      "edit": 0,
      "group": "public",
      "slug": "custom-template",
      "type": "custom",
      "prompt": null,
      "tone": 0,
      "fields": [],
      "package": "all",
      "created_at": "2023-07-21T11:48:04.000000Z",
      "updated_at": "2023-09-04T09:04:34.000000Z",
      "deleted_at": "2023-09-04T09:04:34.000000Z"
    }
  ]
}
```


# Delete Prmopt Template

```php
function deletePrmoptTemplate(int $userId, int $templateId): DeletePrmoptTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`DeletePrmoptTemplate`](../../doc/models/delete-prmopt-template.md)

## Example Usage

```php
$userId = 1;

$templateId = 3;

$result = $promptTemplateController->deletePrmoptTemplate(
    $userId,
    $templateId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Deleted Successfully"
}
```


# Restore Prompt Template

```php
function restorePromptTemplate(int $userId, int $templateId): RestorePromptTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`RestorePromptTemplate`](../../doc/models/restore-prompt-template.md)

## Example Usage

```php
$userId = 1;

$templateId = 3;

$result = $promptTemplateController->restorePromptTemplate(
    $userId,
    $templateId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Restored Successfully"
}
```


# Parmanent Delete Prompt Template

```php
function parmanentDeletePromptTemplate(int $userId, int $templateId): ParmanentDeletePromptTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`ParmanentDeletePromptTemplate`](../../doc/models/parmanent-delete-prompt-template.md)

## Example Usage

```php
$userId = 1;

$templateId = 3;

$result = $promptTemplateController->parmanentDeletePromptTemplate(
    $userId,
    $templateId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "error",
  "message": "Not Found"
}
```


# Generate Prompt Template

```php
function generatePromptTemplate(
    int $userId,
    string $templateCode,
    string $language,
    int $maxResults,
    int $words,
    float $creativity,
    string $title,
    string $description,
    int $workbookId,
    int $folderId,
    string $text1
): GeneratePromptTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateCode` | `string` | Query, Required | - |
| `language` | `string` | Query, Required | - |
| `maxResults` | `int` | Query, Required | - |
| `words` | `int` | Query, Required | - |
| `creativity` | `float` | Query, Required | - |
| `title` | `string` | Query, Required | - |
| `description` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |
| `text1` | `string` | Query, Required | - |

## Response Type

[`GeneratePromptTemplate`](../../doc/models/generate-prompt-template.md)

## Example Usage

```php
$userId = 1;

$templateCode = 'SXHY9';

$language = 'en-US';

$maxResults = 1;

$words = 10000;

$creativity = 0.5;

$title = 'new';

$description = 'something new';

$workbookId = 1;

$folderId = 1;

$text1 = 'hello';

$result = $promptTemplateController->generatePromptTemplate(
    $userId,
    $templateCode,
    $language,
    $maxResults,
    $words,
    $creativity,
    $title,
    $description,
    $workbookId,
    $folderId,
    $text1
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "max_results": "1",
  "temperature": "0.5",
  "max_words": "1000",
  "id": 379
}
```

