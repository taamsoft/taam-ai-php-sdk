
# Datum 1

## Structure

`Datum1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `default` | `int` | Required | - | getDefault(): int | setDefault(int default): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |
| `folders` | array<[Folder](../../doc/models/folder.md)\|string> | Required | This is Array of a container for one-of cases. | getFolders(): array | setFolders(array folders): void |

## Example (as JSON)

```json
{
  "id": 1,
  "user_id": 1,
  "name": "saas",
  "default": 0,
  "created_at": "2023-06-20T07:24:51.000000Z",
  "updated_at": "2023-07-10T14:39:11.000000Z",
  "deleted_at": "deleted_at6",
  "folders": [
    {
      "id": 1,
      "name": "Taam soft folder",
      "icon": "assets/folders/64ed714d9dd0f_Innovation.gif",
      "description": "description4",
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
      "description": "description4",
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
      "description": "description4",
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
      "description": "description4",
      "workbook_id": 1,
      "user_id": 1,
      "status": 1,
      "created_at": "2023-08-23T01:57:28.000000Z",
      "updated_at": "2023-08-23T01:57:28.000000Z",
      "deleted_at": null
    }
  ]
}
```

