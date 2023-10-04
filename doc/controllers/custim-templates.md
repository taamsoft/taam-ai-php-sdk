# Custim Templates

```php
$custimTemplatesController = $client->getCustimTemplatesController();
```

## Class Name

`CustimTemplatesController`

## Methods

* [Custom Templates](../../doc/controllers/custim-templates.md#custom-templates)
* [Fav Custom Templates](../../doc/controllers/custim-templates.md#fav-custom-templates)
* [Custom Template Generate](../../doc/controllers/custim-templates.md#custom-template-generate)
* [Create Custom Template](../../doc/controllers/custim-templates.md#create-custom-template)
* [Trashed Custom Templates](../../doc/controllers/custim-templates.md#trashed-custom-templates)
* [Delete Custom Template](../../doc/controllers/custim-templates.md#delete-custom-template)
* [Restore Custom Template](../../doc/controllers/custim-templates.md#restore-custom-template)
* [Permanent Delete Custom Template](../../doc/controllers/custim-templates.md#permanent-delete-custom-template)


# Custom Templates

```php
function customTemplates(int $userId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 40;

$custimTemplatesController->customTemplates($userId);
```


# Fav Custom Templates

```php
function favCustomTemplates(int $userId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 40;

$custimTemplatesController->favCustomTemplates($userId);
```


# Custom Template Generate

```php
function customTemplateGenerate(
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
    string $text,
    string $text2
): CustomTemplateGenerate
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
| `text` | `string` | Query, Required | - |
| `text2` | `string` | Query, Required | - |

## Response Type

[`CustomTemplateGenerate`](../../doc/models/custom-template-generate.md)

## Example Usage

```php
$userId = 40;

$templateCode = 'AZL78';

$language = 'en-US';

$maxResults = 1;

$words = 100;

$creativity = 0.5;

$title = 'code';

$description = 'code';

$workbookId = 1;

$folderId = 1;

$text = 'hello';

$text2 = 'really';

$result = $custimTemplatesController->customTemplateGenerate(
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
    $text,
    $text2
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "max_results": "1",
  "temperature": "0.5",
  "max_words": 100,
  "id": 289
}
```


# Create Custom Template

```php
function createCustomTemplate(): CreateCustomTemplate
```

## Response Type

[`CreateCustomTemplate`](../../doc/models/create-custom-template.md)

## Example Usage

```php
$result = $custimTemplatesController->createCustomTemplate();
```

## Example Response *(as JSON)*

```json
{
  "code": "200",
  "status": "success",
  "message": "template Created Successfully",
  "data": {
    "user_id": "1",
    "description": null,
    "status": true,
    "professional": false,
    "template_code": "KOWPI",
    "name": "new",
    "icon": "<i class=\"fa-solid  blog-icon\"></i>",
    "group": "text",
    "slug": "custom-template",
    "prompt": "Tone of voice generator",
    "tone": true,
    "fields": [
      {
        "name": "text1",
        "placeholder": "Enter the ralevent information",
        "input": "input",
        "code": "input-field-1"
      }
    ],
    "package": "all",
    "updated_at": "2023-09-30T13:35:17.000000Z",
    "created_at": "2023-09-30T13:35:17.000000Z",
    "id": 3
  }
}
```


# Trashed Custom Templates

```php
function trashedCustomTemplates(int $userId): TrashedCustomTemplates
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`TrashedCustomTemplates`](../../doc/models/trashed-custom-templates.md)

## Example Usage

```php
$userId = 1;

$result = $custimTemplatesController->trashedCustomTemplates($userId);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "data": []
}
```


# Delete Custom Template

```php
function deleteCustomTemplate(int $userId, int $templateId): DeleteCustomTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`DeleteCustomTemplate`](../../doc/models/delete-custom-template.md)

## Example Usage

```php
$userId = 1;

$templateId = 3;

$result = $custimTemplatesController->deleteCustomTemplate(
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


# Restore Custom Template

```php
function restoreCustomTemplate(int $userId, int $templateId): RestoreCustomTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

[`RestoreCustomTemplate`](../../doc/models/restore-custom-template.md)

## Example Usage

```php
$userId = 1;

$templateId = 3;

$result = $custimTemplatesController->restoreCustomTemplate(
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


# Permanent Delete Custom Template

```php
function permanentDeleteCustomTemplate(): PermanentDeleteCustomTemplate
```

## Response Type

[`PermanentDeleteCustomTemplate`](../../doc/models/permanent-delete-custom-template.md)

## Example Usage

```php
$result = $custimTemplatesController->permanentDeleteCustomTemplate();
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Delete Successfully"
}
```

