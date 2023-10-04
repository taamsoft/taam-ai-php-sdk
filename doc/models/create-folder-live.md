
# Create Folder Live

## Structure

`CreateFolderLive`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data3`](../../doc/models/data-3.md) | Required | - | getData(): Data3 | setData(Data3 data): void |

## Example (as JSON)

```json
{
  "status": "success",
  "message": "Folder Created Successfully",
  "data": {
    "name": "default new",
    "workbook_id": "39",
    "user_id": "40",
    "icon": "https://taam.ai/assets/empty.jpg",
    "description": "description0",
    "updated_at": "2023-09-22T14:27:35.000000Z",
    "created_at": "2023-09-22T14:27:35.000000Z",
    "id": 45
  }
}
```

