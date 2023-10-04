# Workbookandfolders

```php
$workbookandfoldersController = $client->getWorkbookandfoldersController();
```

## Class Name

`WorkbookandfoldersController`

## Methods

* [All Workbooks](../../doc/controllers/workbookandfolders.md#all-workbooks)
* [Create Workbook](../../doc/controllers/workbookandfolders.md#create-workbook)
* [Workbook Detail](../../doc/controllers/workbookandfolders.md#workbook-detail)
* [Delete Workspace](../../doc/controllers/workbookandfolders.md#delete-workspace)
* [Trashed Workspaces](../../doc/controllers/workbookandfolders.md#trashed-workspaces)
* [Restore Workspace](../../doc/controllers/workbookandfolders.md#restore-workspace)
* [Create Folder](../../doc/controllers/workbookandfolders.md#create-folder)
* [Delete Folder](../../doc/controllers/workbookandfolders.md#delete-folder)
* [Restore Folder](../../doc/controllers/workbookandfolders.md#restore-folder)
* [Set Defualt Workspace](../../doc/controllers/workbookandfolders.md#set-defualt-workspace)
* [Permanent Delete Folder](../../doc/controllers/workbookandfolders.md#permanent-delete-folder)
* [Contents in Work Book](../../doc/controllers/workbookandfolders.md#contents-in-work-book)
* [Trashed Folders](../../doc/controllers/workbookandfolders.md#trashed-folders)
* [Workbook Voiceovers](../../doc/controllers/workbookandfolders.md#workbook-voiceovers)
* [Workbook Transcripts](../../doc/controllers/workbookandfolders.md#workbook-transcripts)
* [Permanent Delete Workspace](../../doc/controllers/workbookandfolders.md#permanent-delete-workspace)
* [Workbook Images](../../doc/controllers/workbookandfolders.md#workbook-images)
* [Workbook Codes](../../doc/controllers/workbookandfolders.md#workbook-codes)
* [User Chats](../../doc/controllers/workbookandfolders.md#user-chats)
* [Permanent Delete Document](../../doc/controllers/workbookandfolders.md#permanent-delete-document)
* [Restore Docuemnt of All Type Content Voiceover Images Transcript Code](../../doc/controllers/workbookandfolders.md#restore-docuemnt-of-all-type-content-voiceover-images-transcript-code)
* [Delete All Kind of Documents](../../doc/controllers/workbookandfolders.md#delete-all-kind-of-documents)
* [Add and Remove From Fav Document](../../doc/controllers/workbookandfolders.md#add-and-remove-from-fav-document)
* [Join Workbook Requestr](../../doc/controllers/workbookandfolders.md#join-workbook-requestr)
* [Join Workbook](../../doc/controllers/workbookandfolders.md#join-workbook)
* [Reject Workbook](../../doc/controllers/workbookandfolders.md#reject-workbook)
* [Workbook Policies](../../doc/controllers/workbookandfolders.md#workbook-policies)
* [Create Link to Access Any Document](../../doc/controllers/workbookandfolders.md#create-link-to-access-any-document)


# All Workbooks

```php
function allWorkbooks(int $userId): AllWorkbooksLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`AllWorkbooksLive`](../../doc/models/all-workbooks-live.md)

## Example Usage

```php
$userId = 1;

$result = $workbookAndFoldersController->allWorkbooks($userId);
```

## Example Response *(as JSON)*

```json
{
  "code": 200,
  "status": "success",
  "mesaage": "Workbooks fetched SUccessfully",
  "data": [
    {
      "id": 1,
      "user_id": 1,
      "name": "saas",
      "default": 0,
      "created_at": "2023-06-20T07:24:51.000000Z",
      "updated_at": "2023-07-10T14:39:11.000000Z",
      "deleted_at": null,
      "folders": [
        {
          "id": 1,
          "name": "Taam soft folder",
          "icon": "assets/folders/64ed714d9dd0f_Innovation.gif",
          "description": null,
          "workbook_id": 1,
          "user_id": 1,
          "status": 1,
          "created_at": "2023-06-27T10:32:02.000000Z",
          "updated_at": "2023-08-29T04:17:17.000000Z",
          "deleted_at": null
        },
        {
          "id": 15,
          "name": "hello",
          "icon": "https://taamfly.com/assets/empty.jpg",
          "description": null,
          "workbook_id": 1,
          "user_id": 4,
          "status": 1,
          "created_at": "2023-08-03T06:34:27.000000Z",
          "updated_at": "2023-08-03T06:34:27.000000Z",
          "deleted_at": null
        },
        {
          "id": 16,
          "name": "test folders",
          "icon": "https://taamfly.com/assets/empty.jpg",
          "description": null,
          "workbook_id": 1,
          "user_id": 1,
          "status": 1,
          "created_at": "2023-08-03T14:31:02.000000Z",
          "updated_at": "2023-08-16T03:08:19.000000Z",
          "deleted_at": null
        },
        {
          "id": 31,
          "name": "taam ai",
          "icon": "https://taam.ai/assets/empty.jpg",
          "description": null,
          "workbook_id": 1,
          "user_id": 1,
          "status": 1,
          "created_at": "2023-08-23T01:57:28.000000Z",
          "updated_at": "2023-08-23T01:57:28.000000Z",
          "deleted_at": null
        }
      ]
    },
    {
      "id": 2,
      "user_id": 1,
      "name": "sales",
      "default": 0,
      "created_at": "2023-06-20T07:25:00.000000Z",
      "updated_at": "2023-06-20T07:25:00.000000Z",
      "deleted_at": null,
      "folders": []
    },
    {
      "id": 32,
      "user_id": 1,
      "name": "test",
      "default": 0,
      "created_at": "2023-09-13T11:50:03.000000Z",
      "updated_at": "2023-09-13T11:50:03.000000Z",
      "deleted_at": null,
      "folders": []
    },
    {
      "id": 7,
      "user_id": 2,
      "name": "member workspace",
      "default": 0,
      "created_at": "2023-07-19T04:51:54.000000Z",
      "updated_at": "2023-07-19T04:51:54.000000Z",
      "deleted_at": null,
      "folders": [
        {
          "id": 8,
          "name": "defaul1",
          "icon": "assets/folders/64ed715fc11cb_Artificial intelligence.gif",
          "description": null,
          "workbook_id": 7,
          "user_id": 2,
          "status": 1,
          "created_at": "2023-07-19T04:51:54.000000Z",
          "updated_at": "2023-08-29T04:17:35.000000Z",
          "deleted_at": null
        }
      ]
    }
  ]
}
```


# Create Workbook

```php
function createWorkbook(int $userId, string $workbookName): CreateWorkbookLivw
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookName` | `string` | Query, Required | - |

## Response Type

[`CreateWorkbookLivw`](../../doc/models/create-workbook-livw.md)

## Example Usage

```php
$userId = 1;

$workbookName = 'soban2';

$result = $workbookAndFoldersController->createWorkbook(
    $userId,
    $workbookName
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Workbook has been successfully created",
  "data": {
    "user_id": "40",
    "name": "soban2",
    "updated_at": "2023-09-22T14:27:03.000000Z",
    "created_at": "2023-09-22T14:27:03.000000Z",
    "id": 39
  }
}
```


# Workbook Detail

```php
function workbookDetail(int $userId, int $workbookId): WorkbookDetailLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

[`WorkbookDetailLive`](../../doc/models/workbook-detail-live.md)

## Example Usage

```php
$userId = 1;

$workbookId = 12;

$result = $workbookAndFoldersController->workbookDetail(
    $userId,
    $workbookId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fetch Successfully",
  "data": {
    "id": 7,
    "user_id": 2,
    "name": "member workspace",
    "default": 0,
    "created_at": "2023-07-19T04:51:54.000000Z",
    "updated_at": "2023-07-19T04:51:54.000000Z",
    "deleted_at": null,
    "folders": [
      {
        "id": 8,
        "name": "defaul1",
        "icon": "assets/folders/64ed715fc11cb_Artificial intelligence.gif",
        "description": null,
        "workbook_id": 7,
        "user_id": 2,
        "status": 1,
        "created_at": "2023-07-19T04:51:54.000000Z",
        "updated_at": "2023-08-29T04:17:35.000000Z",
        "deleted_at": null
      }
    ]
  }
}
```


# Delete Workspace

```php
function deleteWorkspace(int $userId, int $workbookId): DeleteWorkspaceLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

[`DeleteWorkspaceLive`](../../doc/models/delete-workspace-live.md)

## Example Usage

```php
$userId = 1;

$workbookId = 39;

$result = $workbookAndFoldersController->deleteWorkspace(
    $userId,
    $workbookId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Workspace deleted Successfully"
}
```


# Trashed Workspaces

```php
function trashedWorkspaces(int $userId): TrashedWorkspacesLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`TrashedWorkspacesLive`](../../doc/models/trashed-workspaces-live.md)

## Example Usage

```php
$userId = 1;

$result = $workbookAndFoldersController->trashedWorkspaces($userId);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "data": [
    {
      "id": 39,
      "user_id": 40,
      "name": "soban2",
      "default": 0,
      "created_at": "2023-09-22T14:27:03.000000Z",
      "updated_at": "2023-09-22T14:28:21.000000Z",
      "deleted_at": "2023-09-22T14:28:21.000000Z"
    }
  ]
}
```


# Restore Workspace

```php
function restoreWorkspace(int $userId, int $workbookId): RestoreWorkspaceLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

[`RestoreWorkspaceLive`](../../doc/models/restore-workspace-live.md)

## Example Usage

```php
$userId = 40;

$workbookId = 39;

$result = $workbookAndFoldersController->restoreWorkspace(
    $userId,
    $workbookId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "workspace restored successfully"
}
```


# Create Folder

```php
function createFolder(string $folderName, int $workbookId, int $userId): CreateFolderLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `folderName` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |

## Response Type

[`CreateFolderLive`](../../doc/models/create-folder-live.md)

## Example Usage

```php
$folderName = 'default new';

$workbookId = 23;

$userId = 1;

$result = $workbookAndFoldersController->createFolder(
    $folderName,
    $workbookId,
    $userId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Folder Created Successfully",
  "data": {
    "name": "default new",
    "workbook_id": "39",
    "user_id": "40",
    "icon": "https://taam.ai/assets/empty.jpg",
    "description": null,
    "updated_at": "2023-09-22T14:27:35.000000Z",
    "created_at": "2023-09-22T14:27:35.000000Z",
    "id": 45
  }
}
```


# Delete Folder

```php
function deleteFolder(int $userId, int $folderId): DeleteFolder
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

[`DeleteFolder`](../../doc/models/delete-folder.md)

## Example Usage

```php
$userId = 1;

$folderId = 27;

$result = $workbookAndFoldersController->deleteFolder(
    $userId,
    $folderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "error",
  "message": "You are not able to delete this folder"
}
```


# Restore Folder

```php
function restoreFolder(int $userId, int $folderId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 1;

$folderId = 27;

$workbookAndFoldersController->restoreFolder(
    $userId,
    $folderId
);
```


# Set Defualt Workspace

```php
function setDefualtWorkspace(int $userId, int $workbookId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 1;

$workbookId = 1;

$workbookAndFoldersController->setDefualtWorkspace(
    $userId,
    $workbookId
);
```


# Permanent Delete Folder

```php
function permanentDeleteFolder(int $userId, int $folderId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 1;

$folderId = 27;

$workbookAndFoldersController->permanentDeleteFolder(
    $userId,
    $folderId
);
```


# Contents in Work Book

```php
function contentsInWorkBook(int $userId, string $type, int $workbookId): ContentsInWorkBook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

[`ContentsInWorkBook`](../../doc/models/contents-in-work-book.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$workbookId = 1;

$result = $workbookAndFoldersController->contentsInWorkBook(
    $userId,
    $type,
    $workbookId
);
```


# Trashed Folders

```php
function trashedFolders(int $userId, int $workbookId): TrashedFoldersLive
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |

## Response Type

[`TrashedFoldersLive`](../../doc/models/trashed-folders-live.md)

## Example Usage

```php
$userId = 1;

$workbookId = 22;

$result = $workbookAndFoldersController->trashedFolders(
    $userId,
    $workbookId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "data": [
    {
      "id": 14,
      "name": "haristaamsoft",
      "icon": "https://taamfly.com/assets/empty.jpg",
      "description": null,
      "workbook_id": 1,
      "user_id": 1,
      "status": 1,
      "created_at": "2023-07-20T14:06:31.000000Z",
      "updated_at": "2023-08-09T07:48:43.000000Z",
      "deleted_at": "2023-08-09T07:48:43.000000Z"
    }
  ]
}
```


# Workbook Voiceovers

```php
function workbookVoiceovers(int $userId, string $type, int $workbookId, int $folderId): WorkbookVoiceovers
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

[`WorkbookVoiceovers`](../../doc/models/workbook-voiceovers.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$workbookId = 1;

$folderId = 1;

$result = $workbookAndFoldersController->workbookVoiceovers(
    $userId,
    $type,
    $workbookId,
    $folderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 1,
  "data": [
    {
      "id": 38,
      "user_id": 1,
      "language": "Afrikaans (South Africa)",
      "language_flag": "/img/flags/za.svg",
      "voice": "Willem",
      "voice_id": "af-ZA-WillemNeural",
      "gender": "Male",
      "text": "hello. ",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "text_raw": "hello. ",
      "file_name": "rob5qkLDTS.mp3",
      "result_url": "/storage/rob5qkLDTS.mp3",
      "result_ext": "mp3",
      "storage": "local",
      "title": "New Audio",
      "vendor": "azure",
      "vendor_id": "azure_nrl",
      "characters": 5,
      "voice_type": "neural",
      "plan_type": "free",
      "audio_type": "audio/mpeg",
      "mode": "file",
      "project": null,
      "expires_at": null,
      "created_at": "2023-09-05T07:12:12.000000Z",
      "updated_at": "2023-09-05T07:12:12.000000Z",
      "deleted_at": null
    }
  ]
}
```


# Workbook Transcripts

```php
function workbookTranscripts(int $userId, string $type, string $workbookId, int $folderId): WorkbookTranscripts
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |
| `workbookId` | `string` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

[`WorkbookTranscripts`](../../doc/models/workbook-transcripts.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$workbookId = 'all';

$folderId = 1;

$result = $workbookAndFoldersController->workbookTranscripts(
    $userId,
    $type,
    $workbookId,
    $folderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 1,
  "data": [
    {
      "id": 41,
      "user_id": 1,
      "url": "transcribe/MF8nK7yAyNbUmmVG3zMAPFQcgkONpUdJvz3eUDGz.mp3",
      "transcript": "<p>Marhaban, ana al-mutahaddithi al-iftiradi min imza'i al-jawda. Da'ani ulqi al-tahiyyata ala jumhourik wa u'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut'a.</p>",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "title": "Audio File",
      "workbook": "all",
      "task": "transcribe",
      "words": 25,
      "format": "mp3",
      "audio_type": "audio/mpeg",
      "description": null,
      "storage": "local",
      "length": "13.767",
      "plan_type": "free",
      "size": "215.13 KB",
      "file_name": "AR_F_GadaB.mp3",
      "temp_name": "u9c4fizRqM.mp3",
      "expires_at": "2073-09-05 23:21:57",
      "created_at": "2023-09-19T10:21:57.000000Z",
      "updated_at": "2023-09-19T10:22:12.000000Z",
      "deleted_at": null
    }
  ]
}
```


# Permanent Delete Workspace

```php
function permanentDeleteWorkspace(): PermanentDeleteWorkspaceLive
```

## Response Type

[`PermanentDeleteWorkspaceLive`](../../doc/models/permanent-delete-workspace-live.md)

## Example Usage

```php
$result = $workbookAndFoldersController->permanentDeleteWorkspace();
```

## Example Response *(as JSON)*

```json
{
  "status": "errpr",
  "message": "You are not able to Delete this workspace"
}
```


# Workbook Images

```php
function workbookImages(int $userId, string $type, string $workbookId, int $folderId): WorkbookImages
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |
| `workbookId` | `string` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

[`WorkbookImages`](../../doc/models/workbook-images.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$workbookId = 'all';

$folderId = 1;

$result = $workbookAndFoldersController->workbookImages(
    $userId,
    $type,
    $workbookId,
    $folderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 9,
  "data": [
    {
      "id": 90,
      "user_id": 1,
      "name": "New Image",
      "description": "car",
      "image": "assets/images/6507ed288bb37_7",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/jWE80sgd7U.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:24:40",
      "created_at": "2023-09-18T06:24:40.000000Z",
      "updated_at": "2023-09-18T06:24:40.000000Z",
      "deleted_at": null
    },
    {
      "id": 89,
      "user_id": 1,
      "name": "New Image",
      "description": "boy",
      "image": "assets/images/6507eccfbd842_5",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/oE4JFGV9YI.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:23:11",
      "created_at": "2023-09-18T06:23:11.000000Z",
      "updated_at": "2023-09-18T06:23:11.000000Z",
      "deleted_at": null
    },
    {
      "id": 88,
      "user_id": 1,
      "name": "New Image",
      "description": "boy",
      "image": "assets/images/6507ec965410e_5",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/4Asp9kVwDS.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:22:14",
      "created_at": "2023-09-18T06:22:14.000000Z",
      "updated_at": "2023-09-18T06:22:14.000000Z",
      "deleted_at": null
    },
    {
      "id": 87,
      "user_id": 1,
      "name": "New Image",
      "description": "girl",
      "image": "assets/images/6507ec016cedd_8",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/Sp6UuQsHlR.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:19:45",
      "created_at": "2023-09-18T06:19:45.000000Z",
      "updated_at": "2023-09-18T06:19:45.000000Z",
      "deleted_at": null
    },
    {
      "id": 86,
      "user_id": 1,
      "name": "New Image",
      "description": "car",
      "image": "assets/images/6507ebc7221c5_9",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/GtMdnzT5kF.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:18:47",
      "created_at": "2023-09-18T06:18:47.000000Z",
      "updated_at": "2023-09-18T06:18:47.000000Z",
      "deleted_at": null
    },
    {
      "id": 85,
      "user_id": 1,
      "name": "New Image",
      "description": "larka",
      "image": "assets/images/6507eb71d397b_5",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/sTO1u0m5rU.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:17:21",
      "created_at": "2023-09-18T06:17:21.000000Z",
      "updated_at": "2023-09-18T06:17:21.000000Z",
      "deleted_at": null
    },
    {
      "id": 84,
      "user_id": 1,
      "name": "New Image",
      "description": "larka",
      "image": "assets/images/6507eaedd57fc_7",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/qewKzBPTLW.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:15:09",
      "created_at": "2023-09-18T06:15:09.000000Z",
      "updated_at": "2023-09-18T06:15:09.000000Z",
      "deleted_at": null
    },
    {
      "id": 83,
      "user_id": 1,
      "name": "New Image",
      "description": "car",
      "image": "assets/images/6507ea71637a2_2",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/8uMUJn8ESH.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-09-04 19:13:05",
      "created_at": "2023-09-18T06:13:05.000000Z",
      "updated_at": "2023-09-18T06:13:05.000000Z",
      "deleted_at": null
    },
    {
      "id": 82,
      "user_id": 1,
      "name": "New Image",
      "description": "car",
      "image": "assets/images/64fabfd095f76_7",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "storage": "local",
      "image_name": "images/YjnEnLD7WJ.png",
      "resolution": "256x256",
      "plan_type": "paid",
      "expires_at": "2073-08-25 19:31:44",
      "created_at": "2023-09-08T06:31:44.000000Z",
      "updated_at": "2023-09-08T06:31:44.000000Z",
      "deleted_at": null
    }
  ]
}
```


# Workbook Codes

```php
function workbookCodes(int $userId, string $type, string $workbookId, int $folderId): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |
| `workbookId` | `string` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$workbookId = 'all';

$folderId = 1;

$result = $workbookAndFoldersController->workbookCodes(
    $userId,
    $type,
    $workbookId,
    $folderId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 1,
  "data": [
    {
      "id": 29,
      "user_id": 1,
      "model": "python",
      "title": "New Code",
      "instructions": "hello print",
      "code": "<p>Sure, here’s a simple code in Python to print “Hello, World!”</p>\n<pre class=\"hljs\"><code><a class=\"copy-code\" onclick=\"copyCode(this)\" href=\"#\">Copy</a><span class=\"hljs-built_in\">print</span>(<span class=\"hljs-string\">\"Hello, World!\"</span>)\n</code></pre>",
      "workbook_id": 1,
      "workbook_folder_id": 1,
      "created_at": "2023-09-18T08:18:58.000000Z",
      "updated_at": "2023-09-18T08:19:03.000000Z",
      "deleted_at": null
    }
  ]
}
```


# User Chats

```php
function userChats(int $userId, string $type): UserChats
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |

## Response Type

[`UserChats`](../../doc/models/user-chats.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$result = $workbookAndFoldersController->userChats(
    $userId,
    $type
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 4,
  "data": [
    {
      "id": 1,
      "name": "Travis Guider",
      "sub_name": "Travel Guide",
      "chat_code": "OBADW",
      "logo": "/chats/1.jpg",
      "status": 0,
      "prompt": "I want you to act as a travel guide. I will write you my location and you will suggest a place to visit near my location. In some cases, I will also give you the type of places I will visit. You will also suggest me places of similar type that are close to my first location.",
      "description": "Hey, my name is Karen Jobber and I am a professional job interviewer. I can help you with preparations.",
      "category": "all",
      "type": "original",
      "created_at": "2023-07-06T13:33:49.000000Z",
      "updated_at": "2023-07-15T14:26:24.000000Z",
      "deleted_at": null
    },
    {
      "id": 2,
      "name": "Matt Tivate",
      "sub_name": "Motivational Coach",
      "chat_code": "IUSJH",
      "logo": "/chats/2.jpg",
      "status": 1,
      "prompt": "I want you to act as a motivational coach. I will provide you with some information about someone's goals and challenges, and it will be your job to come up with strategies that can help this person achieve their goals. This could involve providing positive affirmations, giving helpful advice or suggesting activities they can do to reach their end goal>",
      "description": "Hey, my name is Karen Jobber and I am a professional job interviewer. I can help you with preparations.",
      "category": "all",
      "type": "original",
      "created_at": "2023-07-06T13:33:49.000000Z",
      "updated_at": "2023-07-06T13:33:49.000000Z",
      "deleted_at": null
    },
    {
      "id": 6,
      "name": "Robert Williams",
      "sub_name": "Life Coach",
      "chat_code": "SFOBQ",
      "logo": "/chats/4.jpg",
      "status": 1,
      "prompt": "I want you to act as a life coach. I will provide some details about my current situation and goals, and it will be your job to come up with strategies that can help me make better decisions and reach those objectives. This could involve offering advice on various topics, such as creating plans for achieving success or dealing with difficult emotions.",
      "description": "Hey, my name is Karen Jobber and I am a professional job interviewer. I can help you with preparations.",
      "category": "all",
      "type": "original",
      "created_at": "2023-07-06T13:33:49.000000Z",
      "updated_at": "2023-07-06T13:33:49.000000Z",
      "deleted_at": null
    },
    {
      "id": 7,
      "name": "Jack Harper",
      "sub_name": "Personal Trainer",
      "chat_code": "SWIGE",
      "logo": "/chats/5.jpg",
      "status": 1,
      "prompt": "I want you to act as a personal trainer. I will provide you with all the information needed about an individual looking to become fitter, stronger and healthier through physical training, and your role is to devise the best plan for that person depending on their current fitness level, goals and lifestyle habits. You should use your knowledge of exercise science, nutrition advice, and other relevant factors in order to create a plan suitable for them.",
      "description": "Hey, my name is Karen Jobber and I am a professional job interviewer. I can help you with preparations.",
      "category": "all",
      "type": "original",
      "created_at": "2023-07-06T13:33:49.000000Z",
      "updated_at": "2023-07-06T13:33:49.000000Z",
      "deleted_at": null
    }
  ]
}
```


# Permanent Delete Document

```php
function permanentDeleteDocument(int $userId, int $id, string $type): PermanentDeleteDocument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `id` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |

## Response Type

[`PermanentDeleteDocument`](../../doc/models/permanent-delete-document.md)

## Example Usage

```php
$userId = 1;

$id = 4;

$type = 'document';

$result = $workbookAndFoldersController->permanentDeleteDocument(
    $userId,
    $id,
    $type
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "document Deleted Successfully"
}
```


# Restore Docuemnt of All Type Content Voiceover Images Transcript Code

```php
function restoreDocuemntOfAllTypeContentVoiceoverImagesTranscriptCode(
    int $id,
    int $userId,
    string $type
): RestoreDocuemntOfAllTypeContentVoiceoverImagesTranscriptCode
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |

## Response Type

[`RestoreDocuemntOfAllTypeContentVoiceoverImagesTranscriptCode`](../../doc/models/restore-docuemnt-of-all-type-content-voiceover-images-transcript-code.md)

## Example Usage

```php
$id = 1;

$userId = 1;

$type = 'document';

$result = $workbookAndFoldersController->restoreDocuemntOfAllTypeContentVoiceoverImagesTranscriptCode(
    $id,
    $userId,
    $type
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "document Restored Successfully"
}
```


# Delete All Kind of Documents

```php
function deleteAllKindOfDocuments(): DeleteAllKindOfDocuments
```

## Response Type

[`DeleteAllKindOfDocuments`](../../doc/models/delete-all-kind-of-documents.md)

## Example Usage

```php
$result = $workbookAndFoldersController->deleteAllKindOfDocuments();
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "document Deleted Successfully"
}
```


# Add and Remove From Fav Document

```php
function addAndRemoveFromFavDocument(int $id, int $userId, string $type): AddAndRemoveFromFavDocument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |

## Response Type

[`AddAndRemoveFromFavDocument`](../../doc/models/add-and-remove-from-fav-document.md)

## Example Usage

```php
$id = 6;

$userId = 1;

$type = 'document';

$result = $workbookAndFoldersController->addAndRemoveFromFavDocument(
    $id,
    $userId,
    $type
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Remove from Favourite Successfully"
}
```


# Join Workbook Requestr

```php
function joinWorkbookRequestr(int $workbookId, int $userId, string $email): JoinWorkbookRequestr
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `workbookId` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |
| `email` | `string` | Query, Required | - |

## Response Type

[`JoinWorkbookRequestr`](../../doc/models/join-workbook-requestr.md)

## Example Usage

```php
$workbookId = 1;

$userId = 1;

$email = 'sobanshahid38@gmail.com';

$result = $workbookAndFoldersController->joinWorkbookRequestr(
    $workbookId,
    $userId,
    $email
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Invitation sended to user successfully"
}
```


# Join Workbook

```php
function joinWorkbook(int $workbookId, int $userId): JoinWorkbook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `workbookId` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |

## Response Type

[`JoinWorkbook`](../../doc/models/join-workbook.md)

## Example Usage

```php
$workbookId = 1;

$userId = 12;

$result = $workbookAndFoldersController->joinWorkbook(
    $workbookId,
    $userId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Joined workspace Successfully"
}
```


# Reject Workbook

```php
function rejectWorkbook(int $workbookId, int $userId): RejectWorkbook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `workbookId` | `int` | Query, Required | - |
| `userId` | `int` | Query, Required | - |

## Response Type

[`RejectWorkbook`](../../doc/models/reject-workbook.md)

## Example Usage

```php
$workbookId = 1;

$userId = 12;

$result = $workbookAndFoldersController->rejectWorkbook(
    $workbookId,
    $userId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "error",
  "message": "Worbook invite no more exist"
}
```


# Workbook Policies

```php
function workbookPolicies(int $userId, string $type): WorkbookPolicies
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `type` | `string` | Query, Required | - |

## Response Type

[`WorkbookPolicies`](../../doc/models/workbook-policies.md)

## Example Usage

```php
$userId = 1;

$type = 'general';

$result = $workbookAndFoldersController->workbookPolicies(
    $userId,
    $type
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "count": 8,
  "data": [
    {
      "id": 20,
      "created_at": "2023-07-17T10:44:54.000000Z",
      "updated_at": "2023-07-17T10:44:54.000000Z",
      "deleted_at": null,
      "alias": "taamfly",
      "name": "taamfly",
      "type": "ppgen.Terms",
      "lang": "en",
      "content": "<h1>Welcome to taamfly's Terms And Conditions!</h1>\n<p>These terms and conditions outline the rules and regulations for the use of taamfly ( <a href=\"https://taamfly.com\">https://taamfly.com )  </a>.</p>\n<p>By accessing this  website , we assume you accept these terms and conditions. Do not continue to use taamfly if you do not agree to take all of the terms and conditions stated on this page.</p>\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement, and Disclaimer Notice and all Agreements: \"Client,\" \"You,\" and \"Your\" refers to you, the person log on this website/app and compliant to the Company's terms and conditions. \"The Company,\" \"Ourselves,\" \"We,\" \"Our,\" and \"Us,\" refers to our Company. \"Party,\" \"Parties,\" or \"Us,\" refers to both the Client and ourselves. All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of the provision of the Company's stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to the same.</p>\n\n \n<h2>License</h2>\n<p>Unless otherwise stated, taamfly and/or its&nbsp;licensors own the intellectual property rights in the website/app and material on the website/app. Subject to the license below, all these intellectual property rights are reserved.</p>\n<p>You may view, download for caching purposes only, and print pages from the website/app for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>\n<p>You must not:</p>\n<p>Republish material from taamfly&nbsp;<br>Sell, rent or sub-license material from taamfly <br>Reproduce, duplicate or copy material from taamfly <br>Redistribute content from taamfly (unless the content is specifically made for redistribution).</p>\n<h2>User Content</h2>\n<p>In these terms and conditions, \"your user content\" means material (including without limitation text, images, audio material, video material, and audio-visual material) that you submit to this website/app, for whatever purpose.</p>\n<p>You grant to taamfly a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate, and distribute your user content in any existing or future media. You also grant to taamfly the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>\n<p>Your user content must not be defamatory, indecent, obscene, harassing, or hateful, and must not infringe any third party's rights. taamfly reserves the right to remove any of your user content from this website/app at any time, and for any reason, without notice.</p>\n<h2>Variation of Terms</h2>\n<p>taamfly is permitted to revise these terms and conditions at any time as it sees fit, and by using this website/app you are expected to review these terms regularly.</p>\n<p>Assignment taamfly is allowed to assign, transfer, and subcontract its rights and/or obligations under these terms and conditions without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these terms and conditions.</p>\n<h2>Entire Agreement</h2>\n<p>These terms and conditions constitute the entire agreement between taamfly and you concerning your use of this</p>",
      "response": "{\"_token\":\"eWdti7UpjaXPTIxF5LJ56hbsS8M3Qj6TAzUdvGDv\",\"doctype\":\"Terms\",\"fortype\":\"website\",\"use_openai_yes_subquestion\":null,\"use_openai_yes_secondsubquestion\":null,\"use_openai\":\"use_openai_no\",\"business_name\":\"Taam soft\",\"project_name\":\"taamfly\",\"website_url\":\"https:\\/\\/taamfly.com\",\"use_cookies\":\"use_cookies_no\"}",
      "user_id": 4,
      "paid": 1,
      "ai": 0,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 0,
      "md": "taamfly"
    },
    {
      "id": 19,
      "created_at": "2023-07-14T11:29:20.000000Z",
      "updated_at": "2023-07-14T11:29:20.000000Z",
      "deleted_at": null,
      "alias": "matgarli-3",
      "name": "MATGARLI",
      "type": "ppgen.Ccpa",
      "lang": "en",
      "content": "<h1><strong>California Privacy&nbsp;Rights - MATGARLI</strong></h1>\nLast updated:2023-07-13<br />\n<p>To the extent provided for by law and subject to applicable exceptions, California residents have the following privacy rights in relation to the Personal Information we&nbsp;collect:</p>\n<p>The right to know what Personal Information we have collected and how we have used and disclosed that Personal&nbsp;Information;</p>\n<p>The right to request the deletion of your Personal Information;&nbsp;and</p>\n<p>The right to be free from discrimination relating to the exercise of any of your privacy&nbsp;rights.</p>\n<p>We do not and will not sell your Personal&nbsp;Information.</p>\n<p>This Privacy Policy document&nbsp;describes the personal information that we collect, the sources from which we collect it, the purposes for which we use it, the limited circumstances under which we share personal information, and with whom we share it. These additional disclosures are required by the California Consumer Privacy Act:</p>\n<ol>\n<li><strong>Categories of personal information collected</strong>. The personal information that  taam soft. collects, or has collected from consumers in the twelve months prior to the effective date of this Disclosure, fall into the following categories established by the California Consumer Privacy Act:\n<ol>\n    <li>identifiers such as your name, alias, address, phone number, or IP address;</li>    <li>personal information, such as a credit card number;</li>        <li>commercial information, such as purchase and content consumed activity;</li>                            </ol>\n</li>\n<li><strong>Categories of personal information disclosed for a business purpose</strong>. The personal information that taam soft disclosed to the third parties identified in the previous sections&nbsp;about consumers for a business purpose in the twelve months prior to the effective date of this Disclosure fall into the following categories established by the California Consumer Privacy Act:\n<ol>\n    <li>identifiers such as your name, alias, address, phone number, or IP address;</li>            <li>commercial information, such as purchase and content consumed activity;</li>                            </ol>\n</li>\n<li><strong>Right to Request Access to or Deletion of Personal Information:</strong>&nbsp;You may have the right under the California Consumer Privacy Act to request information about the collection of your personal information by taam soft, or access to or deletion of your personal information. If you wish to do any of these things, please contact us <a href=\"mailto:tamem20142016@gmail.com\" />tamem20142016@gmail.com</a>.</li>\n<li><strong>No sale of personal information</strong>. In the twelve months prior to the effective date of this Disclosure, taam soft has not sold any personal information of consumers, as those terms are defined under the California Consumer Privacy Act.</li>\n<li><strong>No Discrimination</strong>. taam soft will not discriminate against any consumer for exercising their rights under the California Consumer Privacy Act.</li>\n</ol>",
      "response": "{\"_token\":\"xJYzw4KC1qidibEfAzRIDLvXbM2vHhzLwrJqxnzT\",\"doctype\":\"Ccpa\",\"fortype\":\"website\",\"use_openai_yes_subquestion\":null,\"use_openai_yes_secondsubquestion\":null,\"business_name\":\"taam soft\",\"project_name\":\"MATGARLI\",\"website_url\":\"https:\\/\\/taamsoft.com\\/\",\"ccpa_collected_id\":\"ccpa_collected_id\",\"ccpa_collected_ccnumbers\":\"ccpa_collected_ccnumbers\",\"ccpa_collected_comm_info\":\"ccpa_collected_comm_info\",\"ccpa_disclosed_id\":\"ccpa_disclosed_id\",\"ccpa_disclosed_comm_info\":\"ccpa_disclosed_comm_info\",\"change_email\":\"tamem20142016@gmail.com\"}",
      "user_id": 1,
      "paid": 1,
      "ai": 0,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 0,
      "md": "matgarli-3"
    },
    {
      "id": 18,
      "created_at": "2023-07-14T11:14:20.000000Z",
      "updated_at": "2023-07-14T11:14:20.000000Z",
      "deleted_at": null,
      "alias": "matgarli-2",
      "name": "MATGARLI",
      "type": "ppgen.Terms",
      "lang": "en",
      "content": "<h1>Welcome to MATGARLI's Terms And Conditions!</h1>\n<p>These terms and conditions outline the rules and regulations for the use of MATGARLI ( <a href=\"https://taamsoft.com/\">https://taamsoft.com/ )  </a>.</p>\n<p>By accessing this  website , we assume you accept these terms and conditions. Do not continue to use MATGARLI if you do not agree to take all of the terms and conditions stated on this page.</p>\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement, and Disclaimer Notice and all Agreements: \"Client,\" \"You,\" and \"Your\" refers to you, the person log on this website/app and compliant to the Company's terms and conditions. \"The Company,\" \"Ourselves,\" \"We,\" \"Our,\" and \"Us,\" refers to our Company. \"Party,\" \"Parties,\" or \"Us,\" refers to both the Client and ourselves. All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of the provision of the Company's stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to the same.</p>\n\n<h2>Cookies</h2>\n<p>We employ the use of cookies. By accessing MATGARLI, you agreed to use cookies in agreement with the MATGARLI's Privacy Policy.</p>\n \n<h2>License</h2>\n<p>Unless otherwise stated, MATGARLI and/or its&nbsp;licensors own the intellectual property rights in the website/app and material on the website/app. Subject to the license below, all these intellectual property rights are reserved.</p>\n<p>You may view, download for caching purposes only, and print pages from the website/app for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>\n<p>You must not:</p>\n<p>Republish material from MATGARLI&nbsp;<br>Sell, rent or sub-license material from MATGARLI <br>Reproduce, duplicate or copy material from MATGARLI <br>Redistribute content from MATGARLI (unless the content is specifically made for redistribution).</p>\n<h2>User Content</h2>\n<p>In these terms and conditions, \"your user content\" means material (including without limitation text, images, audio material, video material, and audio-visual material) that you submit to this website/app, for whatever purpose.</p>\n<p>You grant to MATGARLI a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate, and distribute your user content in any existing or future media. You also grant to MATGARLI the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>\n<p>Your user content must not be defamatory, indecent, obscene, harassing, or hateful, and must not infringe any third party's rights. MATGARLI reserves the right to remove any of your user content from this website/app at any time, and for any reason, without notice.</p>\n<h2>Variation of Terms</h2>\n<p>MATGARLI is permitted to revise these terms and conditions at any time as it sees fit, and by using this website/app you are expected to review these terms regularly.</p>\n<p>Assignment MATGARLI is allowed to assign, transfer, and subcontract its rights and/or obligations under these terms and conditions without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these terms and conditions.</p>\n<h2>Entire Agreement</h2>\n<p>These terms and conditions constitute the entire agreement between MATGARLI and you concerning your use of this</p>",
      "response": "{\"_token\":\"xJYzw4KC1qidibEfAzRIDLvXbM2vHhzLwrJqxnzT\",\"doctype\":\"Terms\",\"fortype\":\"website\",\"use_openai_yes_subquestion\":null,\"use_openai_yes_secondsubquestion\":null,\"use_openai\":\"use_openai_no\",\"business_name\":\"taam soft\",\"project_name\":\"MATGARLI\",\"website_url\":\"https:\\/\\/taamsoft.com\\/\",\"use_cookies\":\"use_cookies_yes\"}",
      "user_id": 1,
      "paid": 1,
      "ai": 0,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 0,
      "md": "matgarli-2"
    },
    {
      "id": 17,
      "created_at": "2023-07-07T21:43:46.000000Z",
      "updated_at": "2023-07-07T21:43:56.000000Z",
      "deleted_at": null,
      "alias": "matgarli-1",
      "name": "MATGARLI",
      "type": "ppgen.Refundtemplate",
      "lang": "en",
      "content": "business days after the returned product is received and inspected by MATGARLI.<br />\n<br />\nSection: Late or Missing Refunds<br />\nIf you haven't received a refund within the specified time period, please check your bank account again. Then contact your credit card company, as it may take some time before your refund is officially posted. Next, contact your bank. There is often some processing time before a refund is posted. If you've completed all of these steps and still haven't received your refund, please contact MATGARLI's customer support team for further assistance.<br />\n<br />\nSection: Exchanges<br />\nMATGARLI does not offer exchanges for returned items. If you wish to exchange a product, you will need to return the original item for a refund and place a new order for the desired product.<br />\n<br />\nSection: Damaged or Defective Products<br />\nIf you receive a damaged or defective product, please contact MATGARLI's customer support team within 48 hours of receiving the product. We will provide instructions on how to return the item and arrange for a replacement or refund, depending on your preference.<br />\n<br />\nSection: Cancellations<br />\nCancellations are only accepted for orders that have not been shipped yet. If you wish to cancel your order, please contact MATGARLI's customer support team as soon as possible. If your order has already been shipped, you will need to follow the return process outlined in this policy.<br />\n<br />\nSection: Changes to the Refund Policy<br />\nMATGARLI reserves the right to modify or update this refund policy at any time. Any changes will be effective immediately upon posting the revised policy on the MATGARLI website. It is your responsibility to review this policy periodically for any updates or changes.<br />\n<br />\nBy making a purchase from MATGARLI, you acknowledge that you have read, understood, and agree to this refund policy.",
      "response": "{\"_token\":\"IR6OfNy4GYkb1LJjdqBVgcr4nsNJGjahNkTccPC7\",\"doctype\":\"Refundtemplate\",\"fortype\":\"shop\",\"use_openai\":\"use_openai_yes\",\"use_openai_yes_subquestion\":\"SAAS APPLICATION HELP THE VENDORS TO CREATE ONLINE STORE IN CLICK\",\"use_openai_yes_secondsubquestion\":\"ENGLISH\",\"project_name\":\"MATGARLI\",\"how_long_for_refund\":\"how_long_for_refund_value\",\"how_long_for_refund_value_subquestion\":null,\"num_days_credit\":\"10\",\"conditions_for_refund_op\":\"conditions_for_refund_op\",\"conditions_for_refund_nd\":\"conditions_for_refund_nd\",\"conditions_for_refund_receipt\":\"conditions_for_refund_receipt\",\"refund_discount\":\"refund_discount_yes\",\"refund_pay\":\"refund_pay_yes\",\"how_return_address_subquestion\":null}",
      "user_id": 1,
      "paid": 1,
      "ai": 1,
      "ai_done": 1,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 1000,
      "md": "matgarli-1"
    },
    {
      "id": 16,
      "created_at": "2023-07-07T21:43:31.000000Z",
      "updated_at": "2023-07-07T21:43:31.000000Z",
      "deleted_at": null,
      "alias": "matgarli",
      "name": "MATGARLI",
      "type": "ppgen.Refundtemplate",
      "lang": "en",
      "content": "Create new Refund Policy for MATGARLI   in ENGLISH  .\n\nSAAS APPLICATION HELP THE VENDORS TO CREATE ONLINE STORE IN CLICK\n\nWe need the following section to be preent in thes Policy:\n\nSection: Return Eligibility\n            The return must be initiated within  days of the purchase date.\n                    \n            The product must be returned in its original packaging, including all accessories, labels, and documentation.\n    \n            The product must be returned together with the purchase receipt.\n    \n            The product must not have been used or damaged in any way. Products that are returned in a damaged or used condition will not be eligible for a refund.\n        \n\nSection: Non-refundable Items\nDiscounted or sale items are not eligible for refunds.\n\n\nSection: Return cost\nThe customer is responsible for covering the cost of return shipping. MATGARLI will not reimburse or provide a prepaid shipping label for returned items.\n \n \n\nSection: Return Process\n\nSection: Refund Process\nA credit will automatically be applied to your original method of payment within 10",
      "response": "{\"_token\":\"IR6OfNy4GYkb1LJjdqBVgcr4nsNJGjahNkTccPC7\",\"doctype\":\"Refundtemplate\",\"fortype\":\"shop\",\"use_openai\":\"use_openai_yes\",\"use_openai_yes_subquestion\":\"SAAS APPLICATION HELP THE VENDORS TO CREATE ONLINE STORE IN CLICK\",\"use_openai_yes_secondsubquestion\":\"ENGLISH\",\"project_name\":\"MATGARLI\",\"how_long_for_refund\":\"how_long_for_refund_value\",\"how_long_for_refund_value_subquestion\":null,\"num_days_credit\":\"10\",\"conditions_for_refund_op\":\"conditions_for_refund_op\",\"conditions_for_refund_nd\":\"conditions_for_refund_nd\",\"conditions_for_refund_receipt\":\"conditions_for_refund_receipt\",\"refund_discount\":\"refund_discount_yes\",\"refund_pay\":\"refund_pay_yes\",\"how_return_address_subquestion\":null}",
      "user_id": 1,
      "paid": 0,
      "ai": 1,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 0,
      "price": 1000,
      "md": "matgarli"
    },
    {
      "id": 15,
      "created_at": "2023-07-07T21:36:53.000000Z",
      "updated_at": "2023-07-07T21:36:53.000000Z",
      "deleted_at": null,
      "alias": "taam-soft",
      "name": "taam soft",
      "type": "ppgen.Privacypolicytemplate",
      "lang": "en",
      "content": "<h1><b>Privacy Policy for taam soft</b></h1>\nLast updated:2023-07-07\n\n<p>\nWe at taam soft. (together with our affiliates,  taam soft, “we”, “our” or “us”) respect your privacy and are strongly committed to keeping secure any information we obtain from you or about you. This Privacy Policy describes our practices with respect to Personal Information we collect from or about you when you access  taam soft ( <a href=\"https://taamsoft.com/\">https://taamsoft.com/</a> ) and its affiliates’ websites (collectively, the “Site”), or use  taam soft and its affiliates’ products and services, including application programming interfaces, associated software, tools, developer services, data and documentation (collectively, the “Services”).\n<br/>Visiting the website, creating an account with a view to using the application, subscribing to the newsletter, and/or applying for a live or video demo implies your explicit approval (by means of providing your personal data or opt-in) of the Privacy Statement and therefore your approval of the way we collect, use and process your personal data.\n<br/>Please read this Privacy Statement in conjunction with taam soft’s cookie policy. </p><br /><br />\n<h1><b>PERSONAL INFORMATION WE COLLECT</b></h1>\n\ntaam soft may collect and process the following personal data:\n- First and last name <br />\n<p>\nWe collect information that alone or in combination with other information in our possession could be used to identify you (“Personal Information”) as follows:\n</p>\n<p>\n<b>Personal Information You Provide</b>: We may collect Personal Information if you create an account to use our Services or communicate with us as follows.\n<br />\n<b>Communication Information</b>: If you communicate with us, we may collect your name, contact information, and the contents of any messages you send (“Communication Information”).\n<br />\n<b>Personal Information We Receive Automatically From Your Use of the Services</b>: When you visit, use, and interact with the Services, we may receive certain information about your visit, use, or interactions (“Technical Information”), including the following:\n<br />\n<b>Log data</b>: Information that your browser automatically sends whenever you visit the Site (“log data”). Log data includes your Internet Protocol address, browser type and settings, the date and time of your request, and how you interacted with the Site.\n<br />\n<b>Usage data</b>: We may automatically collect information about your use of the Services, such as the types of content that you view or engage with, the features you use, and the actions you take, as well as your time zone, country, the dates and times of access, user agent and version, type of computer or mobile device, computer connection, IP address, and the like.\n<br />\n<b>Device information</b>: Includes name of the device, operating system, and browser you are using. Information collected may depend on the type of device you use and its settings.\n</p>\n<b>Cookies</b><br /> We use cookies to operate and administer our Site and Services, and improve your experience on it. A “cookie” is a piece of information sent to your browser by a website you visit. You can set your browser to accept all cookies, reject all cookies, or notify you whenever a cookie is offered so that you can decide each time whether to accept it. However, refusing a cookie may in some cases preclude you from using, or negatively affect the display or function of, a website or certain areas or features of a website. For more details on cookies please visit <a href=\"https://allaboutcookies.org/\" target=\"_blank\">All About Cookies</a>.\n    <br /><br />\n<h1><b>HOW WE USE PERSONAL INFORMATION</b></h1>\nWe may use your Personal Information as follows:\n<ul>\n<li><b>Provide Our Products and Services: </b>We use Personal Information\nto furnish our Services, including to process and fulfill your selection or purchase of our Services and to\nimprove the quality, safety and security of our Site and the Services.</li>\n<li><b>Communicate with You:</b> We use Personal Information to respond\nto communications, contact you about your transactions, promote our Services, provide other relevant\ninformation, and request information or feedback.</li>\n<li><b>Personalize Your Experience</b>: We utilize Personal Information\nregarding your use of our Site, including to personalize and enhance your experiences.</li>\n<li><b>Internal Research</b>: We use Personal Information to conduct\ninternal research to develop, improve or repair our products, services or technology.</li>\n<li><b>Security or Fraud Prevention</b>: We use Personal Information to:\n(1) prevent, detect, protect against, or respond to security incidents, and (2) preserve the integrity or\nsecurity of systems.</li>\n<li><b>Legal Compliance</b>: We may use Personal Information to comply\nwith applicable law or to comply with a lawful governmental request.</li>\n\n</ul>\n<p>We strive to retain your Personal Information only for as long\nas reasonably necessary to fulfill the purpose(s) for which we obtained the information or as otherwise required\nby law.</p>\n<h1><b>SHARING AND DISCLOSURE OF PERSONAL INFORMATION</b></h1>\nIn certain circumstances we may share your Personal Information with third parties without further notice to you, unless required by the law, including without limitation in the situations below:\n<ul>\n\t<li><strong>Vendors and Service Providers</strong>: To assist us in meeting business operations needs and to perform certain services and functions, we may share Personal Information with vendors and service providers, including providers of hosting services, cloud services, and other information technology services providers, event management services, email communication software and email newsletter services, advertising and marketing services, and web analytics services. Pursuant to our instructions, these parties will access, process, or store Personal Information in the course of performing their duties to&nbsp;us.</li>\n\t<li><strong>Business Transfers</strong>: If we are involved in strategic transactions, reorganization, bankruptcy, receivership, or transition of service to another provider (collectively a &ldquo;Transaction&rdquo;), your Personal Information and other information may be shared in the diligence process with counterparties and others assisting with the Transaction and transferred to a successor or affiliate as part of that Transaction along with other&nbsp;assets.</li>\n\t<li><strong>Legal Requirements</strong>: If required to do so by law or in the good faith belief that such action is necessary to (i) comply with a legal obligation, including to meet national security or law enforcement requirements, (ii) protect and defend our rights or property, (iii) prevent fraud, (iv) act in urgent circumstances to protect the personal safety of users of the Services, or the public, or (v) protect against legal&nbsp;liability.</li>\n\t<li><strong>Affiliates</strong>: We may share Personal Information with our affiliates, meaning an entity that controls, is controlled by, or is under common control with OpenAI. Our affiliates may use the Personal Information we share in a manner consistent with this Privacy&nbsp;Policy.</li>\n\t<li><strong>Other Users</strong>: certain actions you take may be visible to other users of the&nbsp;Service.</li>\n</ul>\n<h1><strong>PROCESSING OF YOUR PERSONAL DATA</strong></h1>\n    \n    \n     \n<p><strong>Payments</strong></p>\n<p>We do provide paid products and/or services within the Service. </p>\n<p>We do not store or collect Your payment card details. That information is provided directly to Our third-party payment processors whose use of Your personal information is governed by their Privacy Policy.</p>\n<p>The tools/s we use for payment processing</p>\n<table>\n    <thead>\n        <tr>\n            <th><strong>Tool name</strong></th>\n            <th><strong>Privacy policy URL</strong></th>\n        </tr>\n    </thead>\n    <tbody>\n                <tr>\n            <td><strong>PayPal</strong></td>\n            <td><a href=\"https://www.paypal.com/en/webapps/mpp/ua/privacy-full\">Privacy Policy</a></td>\n        </tr>\n        \n                <tr>\n            <td><strong>Stripe</strong></td>\n            <td><a href=\"https://stripe.com/en-gb-us/privacy\">Privacy Policy</a></td>\n        </tr>\n        \n        \n        \n            </tbody>\n\n    \n</table>\n\n     \n<p><strong>ADS</strong></p>\n<p>We do generate revenue by showing advertising placement.  </p>\n<p>The tools/s we use for the ads</p>\n<table>\n    <thead>\n        <tr>\n            <th><strong>Tool name</strong></th>\n            <th><strong>Privacy policy URL</strong></th>\n        </tr>\n    </thead>\n    <tbody>\n                <tr>\n            <td><strong>Google AdSense</strong></td>\n            <td><a href=\"https://policies.google.com/privacy\">Privacy Policy</a></td>\n        </tr>\n        \n                <tr>\n            <td><strong>Meta (Facebook) ADS</strong></td>\n            <td><a href=\"https://www.facebook.com/privacy/policy/?entry_point=data_policy_redirect&entry=0\">Privacy Policy</a></td>\n        </tr>\n        \n\n            </tbody>\n\n    \n</table>\n    <h1><strong>UPDATING YOUR NFORMATION</strong></h1>\n<p>Please contact us at <a href=\"mailto:tamem20142016@gmail.com\" />tamem20142016@gmail.com</a> if you need to change or correct your Personal Information, or if you have any questions or concerns not already addressed in this Privacy Policy.</p>            <h1>CHILDREN</h1>\n<p>Our Service is not directed to children who are under the age of 13. taam soft does not knowingly collect Personal Information from children under the age of 13. If you have reason to believe that a child under the age of 13 has provided Personal Information to taam soft through the Service please email us at <a href=\"mailto:tamem20142016@gmail.com\" >tamem20142016@gmail.com</a> &nbsp;and we will endeavor to delete that information from our databases.</p>   \n \n\n<h1><strong>SECURITY</strong></h1>\n<p>We use commercial reasonably physical, technical, and administrative security measures to reduce the risk of loss, misuse, unauthorized access, and disclosure of data. Please note, however, that no security measures are perfectly secure, and we are unable to guarantee the security of your Personal Information.</p>\n<p>No Internet or e-mail transmission is ever fully secure or error-free. In particular, e-mail sent to or from us may not be secure. Therefore, you should take special care in deciding what information you send to us via the Service or e-mail. In addition, we are not responsible for the circumvention of any privacy settings or security measures contained on the Service, or third-party websites.</p>\n\n<h1><strong>INTERNATIONAL&nbsp;USERS</strong></h1>\n<p>By using our Service, you understand and acknowledge that your Personal Information will be transferred from your location to our facilities and servers in the New York.</p>\n\n<h1><strong>CHANGES TO THE PRIVACY&nbsp;POLICY</strong></h1>\n<p>We may update this Policy periodically as we offer new products and services, and as our business, technology, and applicable laws change. You can determine when this Policy was last revised by referring to the &ldquo;Last updated&rdquo; referenced below. Any changes will become effective upon posting of the revised Policy.</p>\n<h1>CONTACT US</h1>\n<p>taam soft<br>\n<a href=\"tel:19172441980\" />19172441980</a><br>Last Updated: 2023-07-07</p>",
      "response": "{\"_token\":\"oVTRrR7m8wA3gO32mIZBVydEuyI4Z3gQu85RN9w6\",\"doctype\":\"Privacypolicytemplate\",\"fortype\":\"website\",\"use_openai_yes_subquestion\":null,\"use_openai_yes_secondsubquestion\":null,\"use_openai\":\"use_openai_no\",\"business_name\":\"taam soft\",\"project_name\":\"taam soft\",\"website_url\":\"https:\\/\\/taamsoft.com\\/\",\"personal_data_collected_fln\":\"personal_data_collected_fln\",\"use_cookies\":\"use_cookies_yes\",\"analytics\":\"use_analytics_no\",\"emailmarketing\":\"emailmarketing_no\",\"payments\":\"payments_yes\",\"payments_yes_subquestion_paypal\":\"payments_yes_subquestion_paypal\",\"payments_yes_subquestion_stripe\":\"payments_yes_subquestion_stripe\",\"ads\":\"ads_yes\",\"ads_yes_subquestion_google_ads\":\"ads_yes_subquestion_google_ads\",\"ads_yes_subquestion_meta\":\"ads_yes_subquestion_meta\",\"otherserviceproviders\":\"otherserviceproviders_no\",\"change_email\":\"tamem20142016@gmail.com\",\"eu_gdrp\":\"eu_gdrp__no\",\"ccpa\":\"ccpa_no\",\"caloppa\":\"caloppa_no\",\"children_yes_subquestion\":null,\"children\":\"children_no\",\"servers_location\":\"New York\",\"how_to_contact_email_subquestion\":null,\"how_to_contact_phoone\":\"how_to_contact_phoone\",\"how_to_contact_phoone_subquestion\":\"19172441980\"}",
      "user_id": 2,
      "paid": 1,
      "ai": 0,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 0,
      "md": "taam-soft"
    },
    {
      "id": 14,
      "created_at": "2023-07-07T12:29:44.000000Z",
      "updated_at": "2023-07-07T12:29:44.000000Z",
      "deleted_at": null,
      "alias": "shahzamaaaaaa-1",
      "name": "shahzamaaaaaa",
      "type": "ppgen.Privacypolicytemplate",
      "lang": "en",
      "content": "<h1><b>Privacy Policy for shahzamaaaaaa</b></h1>\nLast updated:2023-07-07\n\n<p>\nWe at Jazmyne Krajcik. (together with our affiliates,  shahzamaaaaaa, “we”, “our” or “us”) respect your privacy and are strongly committed to keeping secure any information we obtain from you or about you. This Privacy Policy describes our practices with respect to Personal Information we collect from or about you when you access  shahzamaaaaaa ( <a href=\"Aperiam tenetur quasi expedita.\">Aperiam tenetur quasi expedita.</a> ) and its affiliates’ websites (collectively, the “Site”), or use  shahzamaaaaaa and its affiliates’ products and services, including application programming interfaces, associated software, tools, developer services, data and documentation (collectively, the “Services”).\n<br/>Visiting the website, creating an account with a view to using the application, subscribing to the newsletter, and/or applying for a live or video demo implies your explicit approval (by means of providing your personal data or opt-in) of the Privacy Statement and therefore your approval of the way we collect, use and process your personal data.\n<br/>Please read this Privacy Statement in conjunction with shahzamaaaaaa’s cookie policy. </p><br /><br />\n<h1><b>PERSONAL INFORMATION WE COLLECT</b></h1>\n\nshahzamaaaaaa may collect and process the following personal data:\n- Function <br />\n<p>\nWe collect information that alone or in combination with other information in our possession could be used to identify you (“Personal Information”) as follows:\n</p>\n<p>\n<b>Personal Information You Provide</b>: We may collect Personal Information if you create an account to use our Services or communicate with us as follows.\n<br />\n<b>Communication Information</b>: If you communicate with us, we may collect your name, contact information, and the contents of any messages you send (“Communication Information”).\n<br />\n<b>Personal Information We Receive Automatically From Your Use of the Services</b>: When you visit, use, and interact with the Services, we may receive certain information about your visit, use, or interactions (“Technical Information”), including the following:\n<br />\n<b>Log data</b>: Information that your browser automatically sends whenever you visit the Site (“log data”). Log data includes your Internet Protocol address, browser type and settings, the date and time of your request, and how you interacted with the Site.\n<br />\n<b>Usage data</b>: We may automatically collect information about your use of the Services, such as the types of content that you view or engage with, the features you use, and the actions you take, as well as your time zone, country, the dates and times of access, user agent and version, type of computer or mobile device, computer connection, IP address, and the like.\n<br />\n<b>Device information</b>: Includes name of the device, operating system, and browser you are using. Information collected may depend on the type of device you use and its settings.\n</p>\n<b>Cookies</b><br /> We use cookies to operate and administer our Site and Services, and improve your experience on it. A “cookie” is a piece of information sent to your browser by a website you visit. You can set your browser to accept all cookies, reject all cookies, or notify you whenever a cookie is offered so that you can decide each time whether to accept it. However, refusing a cookie may in some cases preclude you from using, or negatively affect the display or function of, a website or certain areas or features of a website. For more details on cookies please visit <a href=\"https://allaboutcookies.org/\" target=\"_blank\">All About Cookies</a>.\n    <br /><br />\n<h1><b>HOW WE USE PERSONAL INFORMATION</b></h1>\nWe may use your Personal Information as follows:\n<ul>\n<li><b>Provide Our Products and Services: </b>We use Personal Information\nto furnish our Services, including to process and fulfill your selection or purchase of our Services and to\nimprove the quality, safety and security of our Site and the Services.</li>\n<li><b>Communicate with You:</b> We use Personal Information to respond\nto communications, contact you about your transactions, promote our Services, provide other relevant\ninformation, and request information or feedback.</li>\n<li><b>Personalize Your Experience</b>: We utilize Personal Information\nregarding your use of our Site, including to personalize and enhance your experiences.</li>\n<li><b>Internal Research</b>: We use Personal Information to conduct\ninternal research to develop, improve or repair our products, services or technology.</li>\n<li><b>Security or Fraud Prevention</b>: We use Personal Information to:\n(1) prevent, detect, protect against, or respond to security incidents, and (2) preserve the integrity or\nsecurity of systems.</li>\n<li><b>Legal Compliance</b>: We may use Personal Information to comply\nwith applicable law or to comply with a lawful governmental request.</li>\n\n</ul>\n<p>We strive to retain your Personal Information only for as long\nas reasonably necessary to fulfill the purpose(s) for which we obtained the information or as otherwise required\nby law.</p>\n<h1><b>SHARING AND DISCLOSURE OF PERSONAL INFORMATION</b></h1>\nIn certain circumstances we may share your Personal Information with third parties without further notice to you, unless required by the law, including without limitation in the situations below:\n<ul>\n\t<li><strong>Vendors and Service Providers</strong>: To assist us in meeting business operations needs and to perform certain services and functions, we may share Personal Information with vendors and service providers, including providers of hosting services, cloud services, and other information technology services providers, event management services, email communication software and email newsletter services, advertising and marketing services, and web analytics services. Pursuant to our instructions, these parties will access, process, or store Personal Information in the course of performing their duties to&nbsp;us.</li>\n\t<li><strong>Business Transfers</strong>: If we are involved in strategic transactions, reorganization, bankruptcy, receivership, or transition of service to another provider (collectively a &ldquo;Transaction&rdquo;), your Personal Information and other information may be shared in the diligence process with counterparties and others assisting with the Transaction and transferred to a successor or affiliate as part of that Transaction along with other&nbsp;assets.</li>\n\t<li><strong>Legal Requirements</strong>: If required to do so by law or in the good faith belief that such action is necessary to (i) comply with a legal obligation, including to meet national security or law enforcement requirements, (ii) protect and defend our rights or property, (iii) prevent fraud, (iv) act in urgent circumstances to protect the personal safety of users of the Services, or the public, or (v) protect against legal&nbsp;liability.</li>\n\t<li><strong>Affiliates</strong>: We may share Personal Information with our affiliates, meaning an entity that controls, is controlled by, or is under common control with OpenAI. Our affiliates may use the Personal Information we share in a manner consistent with this Privacy&nbsp;Policy.</li>\n\t<li><strong>Other Users</strong>: certain actions you take may be visible to other users of the&nbsp;Service.</li>\n</ul>\n<h1><strong>PROCESSING OF YOUR PERSONAL DATA</strong></h1>\n    \n    \n    \n    <h1><strong>UPDATING YOUR NFORMATION</strong></h1>\n<p>Please contact us at <a href=\"mailto:\" /></a> if you need to change or correct your Personal Information, or if you have any questions or concerns not already addressed in this Privacy Policy.</p><h1>CHILDREN</h1>\n \n\n<h1><strong>SECURITY</strong></h1>\n<p>We use commercial reasonably physical, technical, and administrative security measures to reduce the risk of loss, misuse, unauthorized access, and disclosure of data. Please note, however, that no security measures are perfectly secure, and we are unable to guarantee the security of your Personal Information.</p>\n<p>No Internet or e-mail transmission is ever fully secure or error-free. In particular, e-mail sent to or from us may not be secure. Therefore, you should take special care in deciding what information you send to us via the Service or e-mail. In addition, we are not responsible for the circumvention of any privacy settings or security measures contained on the Service, or third-party websites.</p>\n\n<h1><strong>INTERNATIONAL&nbsp;USERS</strong></h1>\n<p>By using our Service, you understand and acknowledge that your Personal Information will be transferred from your location to our facilities and servers in the .</p>\n\n<h1><strong>CHANGES TO THE PRIVACY&nbsp;POLICY</strong></h1>\n<p>We may update this Policy periodically as we offer new products and services, and as our business, technology, and applicable laws change. You can determine when this Policy was last revised by referring to the &ldquo;Last updated&rdquo; referenced below. Any changes will become effective upon posting of the revised Policy.</p>\n<h1>CONTACT US</h1>\n<p>Jazmyne Krajcik<br>\n<a href=\"mailto:shahzaman@gmail.com\" />shahzaman@gmail.com</a><br>Last Updated: 2023-07-07</p>",
      "response": "{\"_token\":\"cXRpUeIxiWcghIz8vxj5rZ6Mvhmd89OKB33GlZtz\",\"doctype\":\"Privacypolicytemplate\",\"fortype\":\"website\",\"use_openai_yes_subquestion\":null,\"use_openai_yes_secondsubquestion\":null,\"use_openai\":\"use_openai_no\",\"business_name\":\"Jazmyne Krajcik\",\"project_name\":\"shahzamaaaaaa\",\"website_url\":\"Aperiam tenetur quasi expedita.\",\"personal_data_collected_function\":\"personal_data_collected_function\",\"use_cookies\":\"use_cookies_yes\",\"analytics\":\"use_analytics_no\",\"emailmarketing\":\"emailmarketing_no\",\"payments\":\"payments_no\",\"ads\":\"ads_no\",\"change_email\":null,\"children_yes_subquestion\":null,\"servers_location\":null,\"how_to_contact_email\":\"how_to_contact_email\",\"how_to_contact_email_subquestion\":\"shahzaman@gmail.com\",\"how_to_contact_phoone_subquestion\":null}",
      "user_id": 1,
      "paid": 1,
      "ai": 0,
      "ai_done": 0,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 0,
      "md": "shahzamaaaaaa-1"
    },
    {
      "id": 13,
      "created_at": "2023-07-07T12:26:06.000000Z",
      "updated_at": "2023-07-07T12:48:30.000000Z",
      "deleted_at": null,
      "alias": "shahzamaaaaaa",
      "name": "shahzamaaaaaa",
      "type": "ppgen.Privacypolicytemplate",
      "lang": "en",
      "content": "1. Personal Information We Collect<br />\r\n<br />\r\nWe may collect and process the following personal data from you:<br />\r\n<br />\r\n- First and last name<br />\r\n<br />\r\n2. How We Use Personal Information<br />\r\n<br />\r\nWe may use the personal information collected from you for the following purposes:<br />\r\n<br />\r\n3. Sharing and Disclosure of Personal Information<br />\r\n<br />\r\nWe may share or disclose your personal information in the following circumstances:<br />\r\n<br />\r\n4. Processing of Your Personal Data<br />\r\n<br />\r\n5. Updating Your Information<br />\r\n<br />\r\nIf you need to update or correct any personal information you have provided to us, please contact us at shahzaman@gmail.com.<br />\r\n<br />\r\n6. GDPR - EU Data Subjects<br />\r\n<br />\r\nIf you are an EU data subject, additional rights and obligations may apply to the collection and processing of your personal data. Please refer to our separate GDPR Privacy Notice for more information.<br />\r\n<br />\r\n7. CalOPPA<br />\r\n<br />\r\nWe use cookies on our Site. By using the Site, you consent to the use of cookies in accordance with our Cookie Policy. Our Site currently does not respond to Do Not Track signals.<br />\r\n<br />\r\n8. Children<br />\r\n<br />\r\nOur Service is not directed to children under the age of 13. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us immediately at shahzaman@gmail.com.<br />\r\n<br />\r\n9. Security<br />\r\n<br />\r\nWe implement appropriate technical and organizational measures to protect the security of your personal information. However, please note that no method of transmission over the internet or electronic storage is completely secure.<br />\r\n<br />\r\n10. International Users<br />\r\n<br />\r\nBy accessing or using our Site, you agree that your personal information may be transferred from your location to our facilities and servers located in the Beatae voluptatum adipisci.<br />\r\n<br />\r\n11. Changes to the Privacy Policy<br />\r\n<br />\r\nWe reserve the right to update or change our Privacy Policy at any time. Any changes will be effective immediately upon posting the updated Privacy Policy on the Site. It is your responsibility to review this Privacy Policy periodically for any updates or changes. Your continued use of the Site after any changes will constitute your acceptance of such changes.<br />\r\n<br />\r\n12. Contact Us<br />\r\n<br />\r\nIf you have any questions or concerns about this Privacy Policy, please contact us at shahzaman@gmail.com.<br />\r\n<br />\r\nBy using this Site, you signify your acceptance of this Privacy Policy. If you do not agree to this Privacy Policy, please do not use our Site.",
      "response": "{\"_token\":\"cXRpUeIxiWcghIz8vxj5rZ6Mvhmd89OKB33GlZtz\",\"doctype\":\"Privacypolicytemplate\",\"fortype\":\"website\",\"use_openai\":\"use_openai_yes\",\"use_openai_yes_subquestion\":\"Julia_Schinner13\",\"use_openai_yes_secondsubquestion\":\"Bessie_Ondricka49\",\"business_name\":\"Jazmyne Krajcik\",\"project_name\":\"shahzamaaaaaa\",\"website_url\":\"Aperiam tenetur quasi expedita.\",\"personal_data_collected_fln\":\"personal_data_collected_fln\",\"use_cookies\":\"use_cookies_yes\",\"analytics\":\"use_analytics_no\",\"emailmarketing\":\"emailmarketing_no\",\"payments\":\"payments_no\",\"ads\":\"ads_no\",\"otherserviceproviders\":\"otherserviceproviders_no\",\"change_email\":\"shahzaman@gmail.com\",\"eu_gdrp\":\"eu_gdrp_yes\",\"ccpa\":\"ccpa_no\",\"caloppa\":\"caloppa_yes\",\"caloppa_yes_subquestion\":\"caloppa_yes_subquestion_no\",\"children_yes_subquestion\":null,\"children\":\"children_no\",\"servers_location\":\"Beatae voluptatum adipisci.\",\"how_to_contact_email\":\"how_to_contact_email\",\"how_to_contact_email_subquestion\":\"shahzaman@gmail.com\",\"how_to_contact_phoone_subquestion\":null}",
      "user_id": 1,
      "paid": 1,
      "ai": 1,
      "ai_done": 1,
      "ai_used_tokens": 0,
      "active": 1,
      "price": 1000,
      "md": "shahzamaaaaaa"
    }
  ]
}
```


# Create Link to Access Any Document

```php
function createLinkToAccessAnyDocument(): void
```

## Response Type

`void`

## Example Usage

```php
$workbookAndFoldersController->createLinkToAccessAnyDocument();
```

