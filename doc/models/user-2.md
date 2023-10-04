
# User 2

## Structure

`User2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `country` | `string` | Required | - | getCountry(): string | setCountry(string country): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `emailVerifiedAt` | `string` | Required | - | getEmailVerifiedAt(): string | setEmailVerifiedAt(string emailVerifiedAt): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `availableWordsPrepaid` | `string` | Required | - | getAvailableWordsPrepaid(): string | setAvailableWordsPrepaid(string availableWordsPrepaid): void |
| `availableImagesPrepaid` | `string` | Required | - | getAvailableImagesPrepaid(): string | setAvailableImagesPrepaid(string availableImagesPrepaid): void |
| `availableCharsPrepaid` | `string` | Required | - | getAvailableCharsPrepaid(): string | setAvailableCharsPrepaid(string availableCharsPrepaid): void |
| `availableMinutesPrepaid` | `string` | Required | - | getAvailableMinutesPrepaid(): string | setAvailableMinutesPrepaid(string availableMinutesPrepaid): void |
| `defaultVoiceoverLanguage` | `string` | Required | - | getDefaultVoiceoverLanguage(): string | setDefaultVoiceoverLanguage(string defaultVoiceoverLanguage): void |
| `defaultVoiceoverVoice` | `string` | Required | - | getDefaultVoiceoverVoice(): string | setDefaultVoiceoverVoice(string defaultVoiceoverVoice): void |
| `jobRole` | `string` | Required | - | getJobRole(): string | setJobRole(string jobRole): void |
| `referralId` | `string` | Required | - | getReferralId(): string | setReferralId(string referralId): void |
| `referredBy` | `string` | Required | - | getReferredBy(): string | setReferredBy(string referredBy): void |
| `workbook` | `string` | Required | - | getWorkbook(): string | setWorkbook(string workbook): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `planId` | `int` | Required | - | getPlanId(): int | setPlanId(int planId): void |
| `totalWords` | `int` | Required | - | getTotalWords(): int | setTotalWords(int totalWords): void |
| `totalImages` | `int` | Required | - | getTotalImages(): int | setTotalImages(int totalImages): void |
| `totalChars` | `int` | Required | - | getTotalChars(): int | setTotalChars(int totalChars): void |
| `totalMinutes` | `int` | Required | - | getTotalMinutes(): int | setTotalMinutes(int totalMinutes): void |
| `availableWords` | `int` | Required | - | getAvailableWords(): int | setAvailableWords(int availableWords): void |
| `availableImages` | `int` | Required | - | getAvailableImages(): int | setAvailableImages(int availableImages): void |
| `availableChars` | `int` | Required | - | getAvailableChars(): int | setAvailableChars(int availableChars): void |
| `availableMinutes` | `int` | Required | - | getAvailableMinutes(): int | setAvailableMinutes(int availableMinutes): void |
| `roles` | [`Role[]`](../../doc/models/role.md) | Required | - | getRoles(): array | setRoles(array roles): void |

## Example (as JSON)

```json
{
  "name": "soban",
  "email": "sobanshahid47@gmail.com",
  "country": "pakistan",
  "updated_at": "2023-09-19T12:22:43.000000Z",
  "created_at": "2023-09-19T12:22:43.000000Z",
  "id": 20,
  "email_verified_at": "2023-09-19T12:22:43.000000Z",
  "status": "active",
  "group": "subscriber",
  "available_words_prepaid": "1000",
  "available_images_prepaid": "1000",
  "available_chars_prepaid": "1000",
  "available_minutes_prepaid": "10",
  "default_voiceover_language": "en-US",
  "default_voiceover_voice": "en-US-Wavenet-J",
  "job_role": "Happy Person",
  "referral_id": "EGUYLK7WC4DNMQU",
  "referred_by": "",
  "workbook": "default workbook",
  "workbook_id": 21,
  "workbook_folder_id": 26,
  "plan_id": 3,
  "total_words": 11,
  "total_images": 11,
  "total_chars": 0,
  "total_minutes": 0,
  "available_words": 11,
  "available_images": 11,
  "available_chars": 0,
  "available_minutes": 0,
  "roles": [
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
  ]
}
```

