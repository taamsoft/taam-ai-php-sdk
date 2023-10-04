
# Data 6

## Structure

`Data6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `language` | `string` | Required | - | getLanguage(): string | setLanguage(string language): void |
| `languageFlag` | `string` | Required | - | getLanguageFlag(): string | setLanguageFlag(string languageFlag): void |
| `voice` | `string` | Required | - | getVoice(): string | setVoice(string voice): void |
| `voiceId` | `string` | Required | - | getVoiceId(): string | setVoiceId(string voiceId): void |
| `gender` | `string` | Required | - | getGender(): string | setGender(string gender): void |
| `text` | `string` | Required | - | getText(): string | setText(string text): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `textRaw` | `string` | Required | - | getTextRaw(): string | setTextRaw(string textRaw): void |
| `fileName` | `string` | Required | - | getFileName(): string | setFileName(string fileName): void |
| `resultUrl` | `string` | Required | - | getResultUrl(): string | setResultUrl(string resultUrl): void |
| `resultExt` | `string` | Required | - | getResultExt(): string | setResultExt(string resultExt): void |
| `storage` | `string` | Required | - | getStorage(): string | setStorage(string storage): void |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `vendor` | `string` | Required | - | getVendor(): string | setVendor(string vendor): void |
| `vendorId` | `string` | Required | - | getVendorId(): string | setVendorId(string vendorId): void |
| `characters` | `int` | Required | - | getCharacters(): int | setCharacters(int characters): void |
| `voiceType` | `string` | Required | - | getVoiceType(): string | setVoiceType(string voiceType): void |
| `planType` | `string` | Required | - | getPlanType(): string | setPlanType(string planType): void |
| `audioType` | `string` | Required | - | getAudioType(): string | setAudioType(string audioType): void |
| `mode` | `string` | Required | - | getMode(): string | setMode(string mode): void |
| `project` | `?string` | Required | - | getProject(): ?string | setProject(?string project): void |
| `expiresAt` | `?string` | Required | - | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 38,
  "user_id": 1,
  "language": "Afrikaans (South Africa)",
  "language_flag": "/img/flags/za.svg",
  "voice": "Willem",
  "voice_id": "af-ZA-WillemNeural",
  "gender": "Male",
  "text": "hello. ",
  "workbook_id": 1,
  "workbook_folder_id": 1,
  "text_raw": "hello. ",
  "file_name": "rob5qkLDTS.mp3",
  "result_url": "/storage/rob5qkLDTS.mp3",
  "result_ext": "mp3",
  "storage": "local",
  "title": "New Audio",
  "vendor": "azure",
  "vendor_id": "azure_nrl",
  "characters": 5,
  "voice_type": "neural",
  "plan_type": "free",
  "audio_type": "audio/mpeg",
  "mode": "file",
  "project": "project8",
  "expires_at": "expires_at2",
  "created_at": "2023-09-05T07:12:12.000000Z",
  "updated_at": "2023-09-05T07:12:12.000000Z",
  "deleted_at": "deleted_at2"
}
```

