
# Create Custom Template

## Structure

`CreateCustomTemplate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `data` | [`Data12`](../../doc/models/data-12.md) | Required | - | getData(): Data12 | setData(Data12 data): void |

## Example (as JSON)

```json
{
  "code": "200",
  "status": "success",
  "message": "template Created Successfully",
  "data": {
    "user_id": "1",
    "description": "description0",
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

