
# Data 10

## Structure

`Data10`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `subName` | `string` | Required | - | getSubName(): string | setSubName(string subName): void |
| `chatCode` | `string` | Required | - | getChatCode(): string | setChatCode(string chatCode): void |
| `logo` | `string` | Required | - | getLogo(): string | setLogo(string logo): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `prompt` | `string` | Required | - | getPrompt(): string | setPrompt(string prompt): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `category` | `string` | Required | - | getCategory(): string | setCategory(string category): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 1,
  "name": "Travis Guider",
  "sub_name": "Travel Guide",
  "chat_code": "OBADW",
  "logo": "/chats/1.jpg",
  "status": 0,
  "prompt": "I want you to act as a travel guide. I will write you my location and you will suggest a place to visit near my location. In some cases, I will also give you the type of places I will visit. You will also suggest me places of similar type that are close to my first location.",
  "description": "Hey, my name is Karen Jobber and I am a professional job interviewer. I can help you with preparations.",
  "category": "all",
  "type": "original",
  "created_at": "2023-07-06T13:33:49.000000Z",
  "updated_at": "2023-07-15T14:26:24.000000Z",
  "deleted_at": "deleted_at4"
}
```

