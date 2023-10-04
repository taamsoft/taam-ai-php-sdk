
# Data 12

## Structure

`Data12`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `string` | Required | - | getUserId(): string | setUserId(string userId): void |
| `description` | `?string` | Required | - | getDescription(): ?string | setDescription(?string description): void |
| `status` | `bool` | Required | - | getStatus(): bool | setStatus(bool status): void |
| `professional` | `bool` | Required | - | getProfessional(): bool | setProfessional(bool professional): void |
| `templateCode` | `string` | Required | - | getTemplateCode(): string | setTemplateCode(string templateCode): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `icon` | `string` | Required | - | getIcon(): string | setIcon(string icon): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `slug` | `string` | Required | - | getSlug(): string | setSlug(string slug): void |
| `prompt` | `string` | Required | - | getPrompt(): string | setPrompt(string prompt): void |
| `tone` | `bool` | Required | - | getTone(): bool | setTone(bool tone): void |
| `fields` | [`Field[]`](../../doc/models/field.md) | Required | - | getFields(): array | setFields(array fields): void |
| `package` | `string` | Required | - | getPackage(): string | setPackage(string package): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |

## Example (as JSON)

```json
{
  "user_id": "1",
  "description": "description2",
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
```

