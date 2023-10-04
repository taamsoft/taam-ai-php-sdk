
# Data 4

## Structure

`Data4`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `title` | `?string` | Required | - | getTitle(): ?string | setTitle(?string title): void |
| `inputText` | `?string` | Required | - | getInputText(): ?string | setInputText(?string inputText): void |
| `resultText` | `?string` | Required | - | getResultText(): ?string | setResultText(?string resultText): void |
| `model` | `?string` | Required | - | getModel(): ?string | setModel(?string model): void |
| `language` | `string` | Required | - | getLanguage(): string | setLanguage(string language): void |
| `templateCode` | `?string` | Required | - | getTemplateCode(): ?string | setTemplateCode(?string templateCode): void |
| `templateName` | `string` | Required | - | getTemplateName(): string | setTemplateName(string templateName): void |
| `workbook` | `?string` | Required | - | getWorkbook(): ?string | setWorkbook(?string workbook): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `icon` | `string` | Required | - | getIcon(): string | setIcon(string icon): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `tags` | `?string` | Required | - | getTags(): ?string | setTags(?string tags): void |
| `draft` | `int` | Required | - | getDraft(): int | setDraft(int draft): void |
| `languageName` | `string` | Required | - | getLanguageName(): string | setLanguageName(string languageName): void |
| `languageFlag` | `string` | Required | - | getLanguageFlag(): string | setLanguageFlag(string languageFlag): void |
| `tokens` | `int` | Required | - | getTokens(): int | setTokens(int tokens): void |
| `words` | string\|null\|int\|null | Required | This is a container for one-of cases. | getWords(): | setWords( words): void |
| `planType` | `string` | Required | - | getPlanType(): string | setPlanType(string planType): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 254,
  "user_id": 94,
  "title": "title4",
  "input_text": "input_text8",
  "result_text": "result_text4",
  "model": "model8",
  "language": "language2",
  "template_code": "template_code0",
  "template_name": "template_name2",
  "workbook": "workbook8",
  "workbook_id": 212,
  "workbook_folder_id": 138,
  "icon": "icon2",
  "group": "group8",
  "tags": "tags0",
  "draft": 128,
  "language_name": "language_name8",
  "language_flag": "language_flag0",
  "tokens": 40,
  "words": "String9",
  "plan_type": "plan_type0",
  "created_at": "created_at2",
  "updated_at": "updated_at4",
  "deleted_at": "deleted_at8"
}
```

