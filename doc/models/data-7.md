
# Data 7

## Structure

`Data7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `userId` | `int` | Required | - | getUserId(): int | setUserId(int userId): void |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `transcript` | `string` | Required | - | getTranscript(): string | setTranscript(string transcript): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `workbook` | `string` | Required | - | getWorkbook(): string | setWorkbook(string workbook): void |
| `task` | `string` | Required | - | getTask(): string | setTask(string task): void |
| `words` | `int` | Required | - | getWords(): int | setWords(int words): void |
| `format` | `string` | Required | - | getFormat(): string | setFormat(string format): void |
| `audioType` | `string` | Required | - | getAudioType(): string | setAudioType(string audioType): void |
| `description` | `?string` | Required | - | getDescription(): ?string | setDescription(?string description): void |
| `storage` | `string` | Required | - | getStorage(): string | setStorage(string storage): void |
| `length` | `string` | Required | - | getLength(): string | setLength(string length): void |
| `planType` | `string` | Required | - | getPlanType(): string | setPlanType(string planType): void |
| `size` | `string` | Required | - | getSize(): string | setSize(string size): void |
| `fileName` | `string` | Required | - | getFileName(): string | setFileName(string fileName): void |
| `tempName` | `string` | Required | - | getTempName(): string | setTempName(string tempName): void |
| `expiresAt` | `string` | Required | - | getExpiresAt(): string | setExpiresAt(string expiresAt): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `deletedAt` | `?string` | Required | - | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": 41,
  "user_id": 1,
  "url": "transcribe/MF8nK7yAyNbUmmVG3zMAPFQcgkONpUdJvz3eUDGz.mp3",
  "transcript": "<p>Marhaban, ana al-mutahaddithi al-iftiradi min imza'i al-jawda. Da'ani ulqi al-tahiyyata ala jumhourik wa u'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut'a.</p>",
  "workbook_id": 1,
  "workbook_folder_id": 1,
  "title": "Audio File",
  "workbook": "all",
  "task": "transcribe",
  "words": 25,
  "format": "mp3",
  "audio_type": "audio/mpeg",
  "description": "description4",
  "storage": "local",
  "length": "13.767",
  "plan_type": "free",
  "size": "215.13 KB",
  "file_name": "AR_F_GadaB.mp3",
  "temp_name": "u9c4fizRqM.mp3",
  "expires_at": "2073-09-05 23:21:57",
  "created_at": "2023-09-19T10:21:57.000000Z",
  "updated_at": "2023-09-19T10:22:12.000000Z",
  "deleted_at": "deleted_at2"
}
```

