
# Generate Template Live

## Structure

`GenerateTemplateLive`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `maxResults` | `string` | Required | - | getMaxResults(): string | setMaxResults(string maxResults): void |
| `temperature` | `string` | Required | - | getTemperature(): string | setTemperature(string temperature): void |
| `maxWords` | `int` | Required | - | getMaxWords(): int | setMaxWords(int maxWords): void |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |

## Example (as JSON)

```json
{
  "status": "success",
  "max_results": "1",
  "temperature": "0.5",
  "max_words": 100,
  "id": 1223
}
```

