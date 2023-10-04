
# Workbook Detail Live

## Structure

`WorkbookDetailLive`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data1`](../../doc/models/data-1.md) | Required | - | getData(): Data1 | setData(Data1 data): void |

## Example (as JSON)

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
    "deleted_at": "deleted_at8",
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
}
```

