
# User

## Structure

`User`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `jobRole` | `string` | Required | - | getJobRole(): string | setJobRole(string jobRole): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `subdomain` | `?string` | Required | - | getSubdomain(): ?string | setSubdomain(?string subdomain): void |
| `emailVerifiedAt` | `string` | Required | - | getEmailVerifiedAt(): string | setEmailVerifiedAt(string emailVerifiedAt): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `group` | `string` | Required | - | getGroup(): string | setGroup(string group): void |
| `workbook` | `string` | Required | - | getWorkbook(): string | setWorkbook(string workbook): void |
| `workbookId` | `int` | Required | - | getWorkbookId(): int | setWorkbookId(int workbookId): void |
| `workbookFolderId` | `int` | Required | - | getWorkbookFolderId(): int | setWorkbookFolderId(int workbookFolderId): void |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |
| `planId` | `int` | Required | - | getPlanId(): int | setPlanId(int planId): void |
| `planType` | `?string` | Required | - | getPlanType(): ?string | setPlanType(?string planType): void |
| `company` | `?string` | Required | - | getCompany(): ?string | setCompany(?string company): void |
| `website` | `?string` | Required | - | getWebsite(): ?string | setWebsite(?string website): void |
| `phoneNumber` | `?string` | Required | - | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `address` | `?string` | Required | - | getAddress(): ?string | setAddress(?string address): void |
| `city` | `?string` | Required | - | getCity(): ?string | setCity(?string city): void |
| `postalCode` | `?string` | Required | - | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `country` | `string` | Required | - | getCountry(): string | setCountry(string country): void |
| `availableWords` | `int` | Required | - | getAvailableWords(): int | setAvailableWords(int availableWords): void |
| `availableWordsPrepaid` | `int` | Required | - | getAvailableWordsPrepaid(): int | setAvailableWordsPrepaid(int availableWordsPrepaid): void |
| `totalWords` | `int` | Required | - | getTotalWords(): int | setTotalWords(int totalWords): void |
| `availableImages` | `int` | Required | - | getAvailableImages(): int | setAvailableImages(int availableImages): void |
| `availableImagesPrepaid` | `int` | Required | - | getAvailableImagesPrepaid(): int | setAvailableImagesPrepaid(int availableImagesPrepaid): void |
| `totalImages` | `int` | Required | - | getTotalImages(): int | setTotalImages(int totalImages): void |
| `balance` | `int` | Required | - | getBalance(): int | setBalance(int balance): void |
| `totalChars` | `int` | Required | - | getTotalChars(): int | setTotalChars(int totalChars): void |
| `availableChars` | `int` | Required | - | getAvailableChars(): int | setAvailableChars(int availableChars): void |
| `availableCharsPrepaid` | `int` | Required | - | getAvailableCharsPrepaid(): int | setAvailableCharsPrepaid(int availableCharsPrepaid): void |
| `totalMinutes` | `string` | Required | - | getTotalMinutes(): string | setTotalMinutes(string totalMinutes): void |
| `availableMinutes` | `string` | Required | - | getAvailableMinutes(): string | setAvailableMinutes(string availableMinutes): void |
| `availableMinutesPrepaid` | `string` | Required | - | getAvailableMinutesPrepaid(): string | setAvailableMinutesPrepaid(string availableMinutesPrepaid): void |
| `profilePhotoPath` | `?string` | Required | - | getProfilePhotoPath(): ?string | setProfilePhotoPath(?string profilePhotoPath): void |
| `oauthId` | `?string` | Required | - | getOauthId(): ?string | setOauthId(?string oauthId): void |
| `oauthType` | `?string` | Required | - | getOauthType(): ?string | setOauthType(?string oauthType): void |
| `lastSeen` | `?string` | Required | - | getLastSeen(): ?string | setLastSeen(?string lastSeen): void |
| `memberRole` | `int` | Required | - | getMemberRole(): int | setMemberRole(int memberRole): void |
| `parentId` | `int` | Required | - | getParentId(): int | setParentId(int parentId): void |
| `ckbox` | `?string` | Required | - | getCkbox(): ?string | setCkbox(?string ckbox): void |
| `google2faSecret` | `?string` | Required | - | getGoogle2faSecret(): ?string | setGoogle2faSecret(?string google2faSecret): void |
| `google2faEnabled` | `int` | Required | - | getGoogle2faEnabled(): int | setGoogle2faEnabled(int google2faEnabled): void |
| `referralId` | `string` | Required | - | getReferralId(): string | setReferralId(string referralId): void |
| `referredBy` | `string` | Required | - | getReferredBy(): string | setReferredBy(string referredBy): void |
| `referralPaymentMethod` | `?string` | Required | - | getReferralPaymentMethod(): ?string | setReferralPaymentMethod(?string referralPaymentMethod): void |
| `referralPaypal` | `?string` | Required | - | getReferralPaypal(): ?string | setReferralPaypal(?string referralPaypal): void |
| `referralBankRequisites` | `?string` | Required | - | getReferralBankRequisites(): ?string | setReferralBankRequisites(?string referralBankRequisites): void |
| `defaultVoiceoverLanguage` | `string` | Required | - | getDefaultVoiceoverLanguage(): string | setDefaultVoiceoverLanguage(string defaultVoiceoverLanguage): void |
| `defaultTempLanguage` | `int` | Required | - | getDefaultTempLanguage(): int | setDefaultTempLanguage(int defaultTempLanguage): void |
| `defaultVoiceoverVoice` | `string` | Required | - | getDefaultVoiceoverVoice(): string | setDefaultVoiceoverVoice(string defaultVoiceoverVoice): void |
| `defaultTone` | `?string` | Required | - | getDefaultTone(): ?string | setDefaultTone(?string defaultTone): void |
| `subdomainToken` | `?string` | Required | - | getSubdomainToken(): ?string | setSubdomainToken(?string subdomainToken): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |

## Example (as JSON)

```json
{
  "id": 20,
  "name": "soban",
  "job_role": "Happy Person",
  "email": "sobanshahid47@gmail.com",
  "subdomain": "subdomain2",
  "email_verified_at": "2023-09-19T12:22:43.000000Z",
  "status": "active",
  "group": "subscriber",
  "workbook": "default workbook",
  "workbook_id": 21,
  "workbook_folder_id": 26,
  "product_id": 0,
  "plan_id": 3,
  "plan_type": "plan_type6",
  "company": "company6",
  "website": "website2",
  "phone_number": "phone_number4",
  "address": "address2",
  "city": "city6",
  "postal_code": "postal_code8",
  "country": "pakistan",
  "available_words": 11,
  "available_words_prepaid": 1000,
  "total_words": 11,
  "available_images": 11,
  "available_images_prepaid": 1000,
  "total_images": 11,
  "balance": 0,
  "total_chars": 0,
  "available_chars": 0,
  "available_chars_prepaid": 1000,
  "total_minutes": "0.000",
  "available_minutes": "0.000",
  "available_minutes_prepaid": "10.000",
  "profile_photo_path": "profile_photo_path8",
  "oauth_id": "oauth_id4",
  "oauth_type": "oauth_type0",
  "last_seen": "last_seen6",
  "member_role": 0,
  "parent_id": 0,
  "ckbox": "ckbox8",
  "google2fa_secret": "google2fa_secret8",
  "google2fa_enabled": 0,
  "referral_id": "EGUYLK7WC4DNMQU",
  "referred_by": "",
  "referral_payment_method": "referral_payment_method4",
  "referral_paypal": "referral_paypal8",
  "referral_bank_requisites": "referral_bank_requisites6",
  "default_voiceover_language": "en-US",
  "default_temp_language": 0,
  "default_voiceover_voice": "en-US-Wavenet-J",
  "default_tone": "default_tone2",
  "subdomain_token": "subdomain_token8",
  "created_at": "2023-09-19T12:22:43.000000Z",
  "updated_at": "2023-09-19T12:22:43.000000Z"
}
```

