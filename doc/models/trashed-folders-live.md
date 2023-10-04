
# Trashed Folders Live

## Structure

`TrashedFoldersLive`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data5[]`](../../doc/models/data-5.md) | Required | - | getData(): array | setData(array data): void |

## Example (as JSON)

```json
{
  "status": "success",
  "message": "Data Fatched Successfully",
  "data": [
    {
      "id": 14,
      "name": "haristaamsoft",
      "icon": "https://taamfly.com/assets/empty.jpg",
      "description": "description0",
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

