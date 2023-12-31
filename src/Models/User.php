<?php

declare(strict_types=1);

/*
 * TaamAiUserLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TaamAiUserLib\Models;

use stdClass;

class User implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $jobRole;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string|null
     */
    private $subdomain;

    /**
     * @var string
     */
    private $emailVerifiedAt;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $group;

    /**
     * @var string
     */
    private $workbook;

    /**
     * @var int
     */
    private $workbookId;

    /**
     * @var int
     */
    private $workbookFolderId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $planId;

    /**
     * @var string|null
     */
    private $planType;

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var string|null
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var int
     */
    private $availableWords;

    /**
     * @var int
     */
    private $availableWordsPrepaid;

    /**
     * @var int
     */
    private $totalWords;

    /**
     * @var int
     */
    private $availableImages;

    /**
     * @var int
     */
    private $availableImagesPrepaid;

    /**
     * @var int
     */
    private $totalImages;

    /**
     * @var int
     */
    private $balance;

    /**
     * @var int
     */
    private $totalChars;

    /**
     * @var int
     */
    private $availableChars;

    /**
     * @var int
     */
    private $availableCharsPrepaid;

    /**
     * @var string
     */
    private $totalMinutes;

    /**
     * @var string
     */
    private $availableMinutes;

    /**
     * @var string
     */
    private $availableMinutesPrepaid;

    /**
     * @var string|null
     */
    private $profilePhotoPath;

    /**
     * @var string|null
     */
    private $oauthId;

    /**
     * @var string|null
     */
    private $oauthType;

    /**
     * @var string|null
     */
    private $lastSeen;

    /**
     * @var int
     */
    private $memberRole;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @var string|null
     */
    private $ckbox;

    /**
     * @var string|null
     */
    private $google2faSecret;

    /**
     * @var int
     */
    private $google2faEnabled;

    /**
     * @var string
     */
    private $referralId;

    /**
     * @var string
     */
    private $referredBy;

    /**
     * @var string|null
     */
    private $referralPaymentMethod;

    /**
     * @var string|null
     */
    private $referralPaypal;

    /**
     * @var string|null
     */
    private $referralBankRequisites;

    /**
     * @var string
     */
    private $defaultVoiceoverLanguage;

    /**
     * @var int
     */
    private $defaultTempLanguage;

    /**
     * @var string
     */
    private $defaultVoiceoverVoice;

    /**
     * @var string|null
     */
    private $defaultTone;

    /**
     * @var string|null
     */
    private $subdomainToken;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @param int $id
     * @param string $name
     * @param string $jobRole
     * @param string $email
     * @param string $emailVerifiedAt
     * @param string $status
     * @param string $group
     * @param string $workbook
     * @param int $workbookId
     * @param int $workbookFolderId
     * @param int $productId
     * @param int $planId
     * @param string $country
     * @param int $availableWords
     * @param int $availableWordsPrepaid
     * @param int $totalWords
     * @param int $availableImages
     * @param int $availableImagesPrepaid
     * @param int $totalImages
     * @param int $balance
     * @param int $totalChars
     * @param int $availableChars
     * @param int $availableCharsPrepaid
     * @param string $totalMinutes
     * @param string $availableMinutes
     * @param string $availableMinutesPrepaid
     * @param int $memberRole
     * @param int $parentId
     * @param int $google2faEnabled
     * @param string $referralId
     * @param string $referredBy
     * @param string $defaultVoiceoverLanguage
     * @param int $defaultTempLanguage
     * @param string $defaultVoiceoverVoice
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(
        int $id,
        string $name,
        string $jobRole,
        string $email,
        string $emailVerifiedAt,
        string $status,
        string $group,
        string $workbook,
        int $workbookId,
        int $workbookFolderId,
        int $productId,
        int $planId,
        string $country,
        int $availableWords,
        int $availableWordsPrepaid,
        int $totalWords,
        int $availableImages,
        int $availableImagesPrepaid,
        int $totalImages,
        int $balance,
        int $totalChars,
        int $availableChars,
        int $availableCharsPrepaid,
        string $totalMinutes,
        string $availableMinutes,
        string $availableMinutesPrepaid,
        int $memberRole,
        int $parentId,
        int $google2faEnabled,
        string $referralId,
        string $referredBy,
        string $defaultVoiceoverLanguage,
        int $defaultTempLanguage,
        string $defaultVoiceoverVoice,
        string $createdAt,
        string $updatedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->jobRole = $jobRole;
        $this->email = $email;
        $this->emailVerifiedAt = $emailVerifiedAt;
        $this->status = $status;
        $this->group = $group;
        $this->workbook = $workbook;
        $this->workbookId = $workbookId;
        $this->workbookFolderId = $workbookFolderId;
        $this->productId = $productId;
        $this->planId = $planId;
        $this->country = $country;
        $this->availableWords = $availableWords;
        $this->availableWordsPrepaid = $availableWordsPrepaid;
        $this->totalWords = $totalWords;
        $this->availableImages = $availableImages;
        $this->availableImagesPrepaid = $availableImagesPrepaid;
        $this->totalImages = $totalImages;
        $this->balance = $balance;
        $this->totalChars = $totalChars;
        $this->availableChars = $availableChars;
        $this->availableCharsPrepaid = $availableCharsPrepaid;
        $this->totalMinutes = $totalMinutes;
        $this->availableMinutes = $availableMinutes;
        $this->availableMinutesPrepaid = $availableMinutesPrepaid;
        $this->memberRole = $memberRole;
        $this->parentId = $parentId;
        $this->google2faEnabled = $google2faEnabled;
        $this->referralId = $referralId;
        $this->referredBy = $referredBy;
        $this->defaultVoiceoverLanguage = $defaultVoiceoverLanguage;
        $this->defaultTempLanguage = $defaultTempLanguage;
        $this->defaultVoiceoverVoice = $defaultVoiceoverVoice;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Job Role.
     */
    public function getJobRole(): string
    {
        return $this->jobRole;
    }

    /**
     * Sets Job Role.
     *
     * @required
     * @maps job_role
     */
    public function setJobRole(string $jobRole): void
    {
        $this->jobRole = $jobRole;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Subdomain.
     */
    public function getSubdomain(): ?string
    {
        return $this->subdomain;
    }

    /**
     * Sets Subdomain.
     *
     * @maps subdomain
     */
    public function setSubdomain(?string $subdomain): void
    {
        $this->subdomain = $subdomain;
    }

    /**
     * Returns Email Verified At.
     */
    public function getEmailVerifiedAt(): string
    {
        return $this->emailVerifiedAt;
    }

    /**
     * Sets Email Verified At.
     *
     * @required
     * @maps email_verified_at
     */
    public function setEmailVerifiedAt(string $emailVerifiedAt): void
    {
        $this->emailVerifiedAt = $emailVerifiedAt;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Group.
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * Sets Group.
     *
     * @required
     * @maps group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * Returns Workbook.
     */
    public function getWorkbook(): string
    {
        return $this->workbook;
    }

    /**
     * Sets Workbook.
     *
     * @required
     * @maps workbook
     */
    public function setWorkbook(string $workbook): void
    {
        $this->workbook = $workbook;
    }

    /**
     * Returns Workbook Id.
     */
    public function getWorkbookId(): int
    {
        return $this->workbookId;
    }

    /**
     * Sets Workbook Id.
     *
     * @required
     * @maps workbook_id
     */
    public function setWorkbookId(int $workbookId): void
    {
        $this->workbookId = $workbookId;
    }

    /**
     * Returns Workbook Folder Id.
     */
    public function getWorkbookFolderId(): int
    {
        return $this->workbookFolderId;
    }

    /**
     * Sets Workbook Folder Id.
     *
     * @required
     * @maps workbook_folder_id
     */
    public function setWorkbookFolderId(int $workbookFolderId): void
    {
        $this->workbookFolderId = $workbookFolderId;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps product_id
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Plan Id.
     */
    public function getPlanId(): int
    {
        return $this->planId;
    }

    /**
     * Sets Plan Id.
     *
     * @required
     * @maps plan_id
     */
    public function setPlanId(int $planId): void
    {
        $this->planId = $planId;
    }

    /**
     * Returns Plan Type.
     */
    public function getPlanType(): ?string
    {
        return $this->planType;
    }

    /**
     * Sets Plan Type.
     *
     * @maps plan_type
     */
    public function setPlanType(?string $planType): void
    {
        $this->planType = $planType;
    }

    /**
     * Returns Company.
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Sets Company.
     *
     * @maps company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * Returns Website.
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * Sets Website.
     *
     * @maps website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * Returns Phone Number.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Postal Code.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Available Words.
     */
    public function getAvailableWords(): int
    {
        return $this->availableWords;
    }

    /**
     * Sets Available Words.
     *
     * @required
     * @maps available_words
     */
    public function setAvailableWords(int $availableWords): void
    {
        $this->availableWords = $availableWords;
    }

    /**
     * Returns Available Words Prepaid.
     */
    public function getAvailableWordsPrepaid(): int
    {
        return $this->availableWordsPrepaid;
    }

    /**
     * Sets Available Words Prepaid.
     *
     * @required
     * @maps available_words_prepaid
     */
    public function setAvailableWordsPrepaid(int $availableWordsPrepaid): void
    {
        $this->availableWordsPrepaid = $availableWordsPrepaid;
    }

    /**
     * Returns Total Words.
     */
    public function getTotalWords(): int
    {
        return $this->totalWords;
    }

    /**
     * Sets Total Words.
     *
     * @required
     * @maps total_words
     */
    public function setTotalWords(int $totalWords): void
    {
        $this->totalWords = $totalWords;
    }

    /**
     * Returns Available Images.
     */
    public function getAvailableImages(): int
    {
        return $this->availableImages;
    }

    /**
     * Sets Available Images.
     *
     * @required
     * @maps available_images
     */
    public function setAvailableImages(int $availableImages): void
    {
        $this->availableImages = $availableImages;
    }

    /**
     * Returns Available Images Prepaid.
     */
    public function getAvailableImagesPrepaid(): int
    {
        return $this->availableImagesPrepaid;
    }

    /**
     * Sets Available Images Prepaid.
     *
     * @required
     * @maps available_images_prepaid
     */
    public function setAvailableImagesPrepaid(int $availableImagesPrepaid): void
    {
        $this->availableImagesPrepaid = $availableImagesPrepaid;
    }

    /**
     * Returns Total Images.
     */
    public function getTotalImages(): int
    {
        return $this->totalImages;
    }

    /**
     * Sets Total Images.
     *
     * @required
     * @maps total_images
     */
    public function setTotalImages(int $totalImages): void
    {
        $this->totalImages = $totalImages;
    }

    /**
     * Returns Balance.
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     *
     * @required
     * @maps balance
     */
    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Returns Total Chars.
     */
    public function getTotalChars(): int
    {
        return $this->totalChars;
    }

    /**
     * Sets Total Chars.
     *
     * @required
     * @maps total_chars
     */
    public function setTotalChars(int $totalChars): void
    {
        $this->totalChars = $totalChars;
    }

    /**
     * Returns Available Chars.
     */
    public function getAvailableChars(): int
    {
        return $this->availableChars;
    }

    /**
     * Sets Available Chars.
     *
     * @required
     * @maps available_chars
     */
    public function setAvailableChars(int $availableChars): void
    {
        $this->availableChars = $availableChars;
    }

    /**
     * Returns Available Chars Prepaid.
     */
    public function getAvailableCharsPrepaid(): int
    {
        return $this->availableCharsPrepaid;
    }

    /**
     * Sets Available Chars Prepaid.
     *
     * @required
     * @maps available_chars_prepaid
     */
    public function setAvailableCharsPrepaid(int $availableCharsPrepaid): void
    {
        $this->availableCharsPrepaid = $availableCharsPrepaid;
    }

    /**
     * Returns Total Minutes.
     */
    public function getTotalMinutes(): string
    {
        return $this->totalMinutes;
    }

    /**
     * Sets Total Minutes.
     *
     * @required
     * @maps total_minutes
     */
    public function setTotalMinutes(string $totalMinutes): void
    {
        $this->totalMinutes = $totalMinutes;
    }

    /**
     * Returns Available Minutes.
     */
    public function getAvailableMinutes(): string
    {
        return $this->availableMinutes;
    }

    /**
     * Sets Available Minutes.
     *
     * @required
     * @maps available_minutes
     */
    public function setAvailableMinutes(string $availableMinutes): void
    {
        $this->availableMinutes = $availableMinutes;
    }

    /**
     * Returns Available Minutes Prepaid.
     */
    public function getAvailableMinutesPrepaid(): string
    {
        return $this->availableMinutesPrepaid;
    }

    /**
     * Sets Available Minutes Prepaid.
     *
     * @required
     * @maps available_minutes_prepaid
     */
    public function setAvailableMinutesPrepaid(string $availableMinutesPrepaid): void
    {
        $this->availableMinutesPrepaid = $availableMinutesPrepaid;
    }

    /**
     * Returns Profile Photo Path.
     */
    public function getProfilePhotoPath(): ?string
    {
        return $this->profilePhotoPath;
    }

    /**
     * Sets Profile Photo Path.
     *
     * @maps profile_photo_path
     */
    public function setProfilePhotoPath(?string $profilePhotoPath): void
    {
        $this->profilePhotoPath = $profilePhotoPath;
    }

    /**
     * Returns Oauth Id.
     */
    public function getOauthId(): ?string
    {
        return $this->oauthId;
    }

    /**
     * Sets Oauth Id.
     *
     * @maps oauth_id
     */
    public function setOauthId(?string $oauthId): void
    {
        $this->oauthId = $oauthId;
    }

    /**
     * Returns Oauth Type.
     */
    public function getOauthType(): ?string
    {
        return $this->oauthType;
    }

    /**
     * Sets Oauth Type.
     *
     * @maps oauth_type
     */
    public function setOauthType(?string $oauthType): void
    {
        $this->oauthType = $oauthType;
    }

    /**
     * Returns Last Seen.
     */
    public function getLastSeen(): ?string
    {
        return $this->lastSeen;
    }

    /**
     * Sets Last Seen.
     *
     * @maps last_seen
     */
    public function setLastSeen(?string $lastSeen): void
    {
        $this->lastSeen = $lastSeen;
    }

    /**
     * Returns Member Role.
     */
    public function getMemberRole(): int
    {
        return $this->memberRole;
    }

    /**
     * Sets Member Role.
     *
     * @required
     * @maps member_role
     */
    public function setMemberRole(int $memberRole): void
    {
        $this->memberRole = $memberRole;
    }

    /**
     * Returns Parent Id.
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * Sets Parent Id.
     *
     * @required
     * @maps parent_id
     */
    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * Returns Ckbox.
     */
    public function getCkbox(): ?string
    {
        return $this->ckbox;
    }

    /**
     * Sets Ckbox.
     *
     * @maps ckbox
     */
    public function setCkbox(?string $ckbox): void
    {
        $this->ckbox = $ckbox;
    }

    /**
     * Returns Google 2 Fa Secret.
     */
    public function getGoogle2faSecret(): ?string
    {
        return $this->google2faSecret;
    }

    /**
     * Sets Google 2 Fa Secret.
     *
     * @maps google2fa_secret
     */
    public function setGoogle2faSecret(?string $google2faSecret): void
    {
        $this->google2faSecret = $google2faSecret;
    }

    /**
     * Returns Google 2 Fa Enabled.
     */
    public function getGoogle2faEnabled(): int
    {
        return $this->google2faEnabled;
    }

    /**
     * Sets Google 2 Fa Enabled.
     *
     * @required
     * @maps google2fa_enabled
     */
    public function setGoogle2faEnabled(int $google2faEnabled): void
    {
        $this->google2faEnabled = $google2faEnabled;
    }

    /**
     * Returns Referral Id.
     */
    public function getReferralId(): string
    {
        return $this->referralId;
    }

    /**
     * Sets Referral Id.
     *
     * @required
     * @maps referral_id
     */
    public function setReferralId(string $referralId): void
    {
        $this->referralId = $referralId;
    }

    /**
     * Returns Referred By.
     */
    public function getReferredBy(): string
    {
        return $this->referredBy;
    }

    /**
     * Sets Referred By.
     *
     * @required
     * @maps referred_by
     */
    public function setReferredBy(string $referredBy): void
    {
        $this->referredBy = $referredBy;
    }

    /**
     * Returns Referral Payment Method.
     */
    public function getReferralPaymentMethod(): ?string
    {
        return $this->referralPaymentMethod;
    }

    /**
     * Sets Referral Payment Method.
     *
     * @maps referral_payment_method
     */
    public function setReferralPaymentMethod(?string $referralPaymentMethod): void
    {
        $this->referralPaymentMethod = $referralPaymentMethod;
    }

    /**
     * Returns Referral Paypal.
     */
    public function getReferralPaypal(): ?string
    {
        return $this->referralPaypal;
    }

    /**
     * Sets Referral Paypal.
     *
     * @maps referral_paypal
     */
    public function setReferralPaypal(?string $referralPaypal): void
    {
        $this->referralPaypal = $referralPaypal;
    }

    /**
     * Returns Referral Bank Requisites.
     */
    public function getReferralBankRequisites(): ?string
    {
        return $this->referralBankRequisites;
    }

    /**
     * Sets Referral Bank Requisites.
     *
     * @maps referral_bank_requisites
     */
    public function setReferralBankRequisites(?string $referralBankRequisites): void
    {
        $this->referralBankRequisites = $referralBankRequisites;
    }

    /**
     * Returns Default Voiceover Language.
     */
    public function getDefaultVoiceoverLanguage(): string
    {
        return $this->defaultVoiceoverLanguage;
    }

    /**
     * Sets Default Voiceover Language.
     *
     * @required
     * @maps default_voiceover_language
     */
    public function setDefaultVoiceoverLanguage(string $defaultVoiceoverLanguage): void
    {
        $this->defaultVoiceoverLanguage = $defaultVoiceoverLanguage;
    }

    /**
     * Returns Default Temp Language.
     */
    public function getDefaultTempLanguage(): int
    {
        return $this->defaultTempLanguage;
    }

    /**
     * Sets Default Temp Language.
     *
     * @required
     * @maps default_temp_language
     */
    public function setDefaultTempLanguage(int $defaultTempLanguage): void
    {
        $this->defaultTempLanguage = $defaultTempLanguage;
    }

    /**
     * Returns Default Voiceover Voice.
     */
    public function getDefaultVoiceoverVoice(): string
    {
        return $this->defaultVoiceoverVoice;
    }

    /**
     * Sets Default Voiceover Voice.
     *
     * @required
     * @maps default_voiceover_voice
     */
    public function setDefaultVoiceoverVoice(string $defaultVoiceoverVoice): void
    {
        $this->defaultVoiceoverVoice = $defaultVoiceoverVoice;
    }

    /**
     * Returns Default Tone.
     */
    public function getDefaultTone(): ?string
    {
        return $this->defaultTone;
    }

    /**
     * Sets Default Tone.
     *
     * @maps default_tone
     */
    public function setDefaultTone(?string $defaultTone): void
    {
        $this->defaultTone = $defaultTone;
    }

    /**
     * Returns Subdomain Token.
     */
    public function getSubdomainToken(): ?string
    {
        return $this->subdomainToken;
    }

    /**
     * Sets Subdomain Token.
     *
     * @maps subdomain_token
     */
    public function setSubdomainToken(?string $subdomainToken): void
    {
        $this->subdomainToken = $subdomainToken;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @required
     * @maps updated_at
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']                         = $this->id;
        $json['name']                       = $this->name;
        $json['job_role']                   = $this->jobRole;
        $json['email']                      = $this->email;
        $json['subdomain']                  = $this->subdomain;
        $json['email_verified_at']          = $this->emailVerifiedAt;
        $json['status']                     = $this->status;
        $json['group']                      = $this->group;
        $json['workbook']                   = $this->workbook;
        $json['workbook_id']                = $this->workbookId;
        $json['workbook_folder_id']         = $this->workbookFolderId;
        $json['product_id']                 = $this->productId;
        $json['plan_id']                    = $this->planId;
        $json['plan_type']                  = $this->planType;
        $json['company']                    = $this->company;
        $json['website']                    = $this->website;
        $json['phone_number']               = $this->phoneNumber;
        $json['address']                    = $this->address;
        $json['city']                       = $this->city;
        $json['postal_code']                = $this->postalCode;
        $json['country']                    = $this->country;
        $json['available_words']            = $this->availableWords;
        $json['available_words_prepaid']    = $this->availableWordsPrepaid;
        $json['total_words']                = $this->totalWords;
        $json['available_images']           = $this->availableImages;
        $json['available_images_prepaid']   = $this->availableImagesPrepaid;
        $json['total_images']               = $this->totalImages;
        $json['balance']                    = $this->balance;
        $json['total_chars']                = $this->totalChars;
        $json['available_chars']            = $this->availableChars;
        $json['available_chars_prepaid']    = $this->availableCharsPrepaid;
        $json['total_minutes']              = $this->totalMinutes;
        $json['available_minutes']          = $this->availableMinutes;
        $json['available_minutes_prepaid']  = $this->availableMinutesPrepaid;
        $json['profile_photo_path']         = $this->profilePhotoPath;
        $json['oauth_id']                   = $this->oauthId;
        $json['oauth_type']                 = $this->oauthType;
        $json['last_seen']                  = $this->lastSeen;
        $json['member_role']                = $this->memberRole;
        $json['parent_id']                  = $this->parentId;
        $json['ckbox']                      = $this->ckbox;
        $json['google2fa_secret']           = $this->google2faSecret;
        $json['google2fa_enabled']          = $this->google2faEnabled;
        $json['referral_id']                = $this->referralId;
        $json['referred_by']                = $this->referredBy;
        $json['referral_payment_method']    = $this->referralPaymentMethod;
        $json['referral_paypal']            = $this->referralPaypal;
        $json['referral_bank_requisites']   = $this->referralBankRequisites;
        $json['default_voiceover_language'] = $this->defaultVoiceoverLanguage;
        $json['default_temp_language']      = $this->defaultTempLanguage;
        $json['default_voiceover_voice']    = $this->defaultVoiceoverVoice;
        $json['default_tone']               = $this->defaultTone;
        $json['subdomain_token']            = $this->subdomainToken;
        $json['created_at']                 = $this->createdAt;
        $json['updated_at']                 = $this->updatedAt;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
