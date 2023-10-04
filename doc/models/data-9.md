
# Data 9

## Structure

`Data9`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `model` | `string` | Required | - | getModel(): string | setModel(string model): void |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `instructions` | `string` | Required | - | getInstructions(): string | setInstructions(string instructions): void |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
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
  "deleted_at": "deleted_at8"
}
```

