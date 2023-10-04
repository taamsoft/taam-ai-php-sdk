
# New Request

## Structure

`NewRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `count` | `int` | Required | - | getCount(): int | setCount(int count): void |
| `data` | [`Data9[]`](../../doc/models/data-9.md) | Required | - | getData(): array | setData(array data): void |

## Example (as JSON)

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
      "deleted_at": "deleted_at8"
    }
  ]
}
```

