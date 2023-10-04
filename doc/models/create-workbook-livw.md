
# Create Workbook Livw

## Structure

`CreateWorkbookLivw`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data`](../../doc/models/data.md) | Required | - | getData(): Data | setData(Data data): void |

## Example (as JSON)

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

