
# Data 15

## Structure

`Data15`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `icon` | `string` | Required | - | getIcon(): string | setIcon(string icon): void |
| `image` | `?string` | Required | - | getImage(): ?string | setImage(?string image): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `templateCode` | `string` | Required | - | getTemplateCode(): string | setTemplateCode(string templateCode): void |
| `lang` | `string` | Required | - | getLang(): string | setLang(string lang): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `professional` | `int` | Required | - | getProfessional(): int | setProfessional(int professional): void |
| `new` | `int` | Required | - | getNew(): int | setNew(int new): void |
| `public` | `int` | Required | - | getPublic(): int | setPublic(int public): void |
| `edit` | `int` | Required | - | getEdit(): int | setEdit(int edit): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `slug` | `string` | Required | - | getSlug(): string | setSlug(string slug): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `prompt` | `?string` | Required | - | getPrompt(): ?string | setPrompt(?string prompt): void |
| `tone` | `int` | Required | - | getTone(): int | setTone(int tone): void |
| `fields` | `string[]` | Required | - | getFields(): array | setFields(array fields): void |
| `package` | `string` | Required | - | getPackage(): string | setPackage(string package): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 3,
  "user_id": 1,
  "name": "Sobi Rajpoot",
  "icon": "<i class=\"fa-solid fa-search-minus blog-icon\"></i>",
  "image": "image2",
  "description": "tone of voice generator",
  "template_code": "DAQGY",
  "lang": "en-US",
  "status": 1,
  "professional": 0,
  "new": 0,
  "public": 0,
  "edit": 0,
  "group": "public",
  "slug": "custom-template",
  "type": "custom",
  "prompt": "prompt4",
  "tone": 0,
  "fields": [],
  "package": "all",
  "created_at": "2023-07-24T13:04:48.000000Z",
  "updated_at": "2023-07-24T13:04:48.000000Z",
  "deleted_at": "deleted_at2"
}
```

