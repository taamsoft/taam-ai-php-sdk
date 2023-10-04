
# Data 8

## Structure

`Data8`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `image` | `string` | Required | - | getImage(): string | setImage(string image): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `storage` | `string` | Required | - | getStorage(): string | setStorage(string storage): void |
| `imageName` | `string` | Required | - | getImageName(): string | setImageName(string imageName): void |
| `resolution` | `string` | Required | - | getResolution(): string | setResolution(string resolution): void |
| `planType` | `string` | Required | - | getPlanType(): string | setPlanType(string planType): void |
| `expiresAt` | `string` | Required | - | getExpiresAt(): string | setExpiresAt(string expiresAt): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
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
  "deleted_at": "deleted_at4"
}
```

