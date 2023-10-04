
# Datum

## Structure

`Datum`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `icon` | `string` | Required | - | getIcon(): string | setIcon(string icon): void |
| `image` | `?string` | Required | - | getImage(): ?string | setImage(?string image): void |
| `popular` | `int` | Required | - | getPopular(): int | setPopular(int popular): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `templateCode` | `string` | Required | - | getTemplateCode(): string | setTemplateCode(string templateCode): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `professional` | `int` | Required | - | getProfessional(): int | setProfessional(int professional): void |
| `new` | `int` | Required | - | getNew(): int | setNew(int new): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `slug` | `string` | Required | - | getSlug(): string | setSlug(string slug): void |
| `package` | `string` | Required | - | getPackage(): string | setPackage(string package): void |
| `fields` | `string` | Required | - | getFields(): string | setFields(string fields): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |

## Example (as JSON)

```json
{
  "id": 1,
  "name": "Article Generator",
  "icon": "<i class=\"fa-solid fa-file-lines main-icon\"></i>",
  "image": "image4",
  "popular": 0,
  "description": "Turn a title and outline text into a fully complete high quality article within seconds",
  "template_code": "KPAQQ",
  "status": 1,
  "professional": 0,
  "new": 0,
  "type": "original",
  "group": "text",
  "slug": "article-generator",
  "package": "all",
  "fields": "[{\"name\":\"Article Title\",\"placeholder\":\"e.g. Amazing cuisine culture of Mexico\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. taco, sangria, paella\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":600}]",
  "created_at": "2023-07-06T08:33:48.000000Z",
  "updated_at": "2023-09-20T05:57:13.000000Z"
}
```

