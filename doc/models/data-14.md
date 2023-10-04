
# Data 14

## Structure

`Data14`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `featureImage` | `string` | Required | - | getFeatureImage(): string | setFeatureImage(string featureImage): void |
| `bulletPoints` | `string` | Required | - | getBulletPoints(): string | setBulletPoints(string bulletPoints): void |
| `targetAudience` | `string` | Required | - | getTargetAudience(): string | setTargetAudience(string targetAudience): void |
| `tags` | `string` | Required | - | getTags(): string | setTags(string tags): void |
| `deletedAt` | `string` | Required | - | getDeletedAt(): string | setDeletedAt(string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 10,
  "user_id": 1,
  "name": "New Product",
  "description": "THis is testing",
  "feature_image": "http://127.0.0.1:8000/assets/empty.jpg",
  "bullet_points": "friend",
  "target_audience": "males",
  "tags": "null",
  "deleted_at": "2023-09-30T08:18:41.000000Z"
}
```

