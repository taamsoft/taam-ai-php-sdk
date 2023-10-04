
# Data 1

## Structure

`Data1`

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
| `folders` | [`Folder2[]`](../../doc/models/folder-2.md) | Required | - | getFolders(): array | setFolders(array folders): void |

## Example (as JSON)

```json
{
  "id": 7,
  "user_id": 2,
  "name": "member workspace",
  "default": 0,
  "created_at": "2023-07-19T04:51:54.000000Z",
  "updated_at": "2023-07-19T04:51:54.000000Z",
  "deleted_at": "deleted_at6",
  "folders": [
    {
      "id": 8,
      "name": "defaul1",
      "icon": "assets/folders/64ed715fc11cb_Artificial intelligence.gif",
      "description": "description6",
      "workbook_id": 7,
      "user_id": 2,
      "status": 1,
      "created_at": "2023-07-19T04:51:54.000000Z",
      "updated_at": "2023-08-29T04:17:35.000000Z",
      "deleted_at": "deleted_at4"
    }
  ]
}
```

