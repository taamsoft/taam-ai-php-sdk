
# Role

## Structure

`Role`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `guardName` | `string` | Required | - | getGuardName(): string | setGuardName(string guardName): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `pivot` | [`Pivot`](../../doc/models/pivot.md) | Required | - | getPivot(): Pivot | setPivot(Pivot pivot): void |

## Example (as JSON)

```json
{
  "id": 2,
  "name": "subscriber",
  "guard_name": "web",
  "created_at": "2023-07-06T13:33:48.000000Z",
  "updated_at": "2023-07-06T13:33:48.000000Z",
  "pivot": {
    "model_id": 20,
    "role_id": 2,
    "model_type": "App\\Models\\User"
  }
}
```

