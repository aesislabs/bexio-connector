<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use DateTime;
use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Quote implements ContainerInterface
{
    public const ITEM_STATUSES = [
        1 => 'Draft',
        2 => 'Pending',
        3 => 'Confirmed',
        4 => 'Declined',
    ];

    public function reset(): void
    {
        $this->id = null;
        $this->isValidFrom = null;
        $this->isValidUntil = null;
        $this->viewedByClientAt = null;
        $this->updatedAt = null;
        $this->positions = [];
    }

    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("document_nr")
     * @Type("string")
     */
    protected $documentNr;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var int|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("contact_sub_id")
     * @Type("integer")
     */
    protected $contactSubId;

    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var int|null
     * @SerializedName("project_id")
     * @Type("integer")
     */
    protected $projectId;

    /**
     * @var int
     * @SerializedName("logopaper_id")
     * @Type("integer")
     */
    protected $logopaperId;

    /**
     * @var int
     * @SerializedName("language_id")
     * @Type("integer")
     */
    protected $languageId;

    /**
     * @var int
     * @SerializedName("bank_account_id")
     * @Type("integer")
     */
    protected $bankAccountId;

    /**
     * @var int
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var int
     * @SerializedName("payment_type_id")
     * @Type("integer")
     */
    protected $paymentTypeId;

    /**
     * @var string
     * @SerializedName("header")
     * @Type("string")
     */
    protected $header;

    /**
     * @var string
     * @SerializedName("footer")
     * @Type("string")
     */
    protected $footer;

    /**
     * @var string
     * @SerializedName("total_gross")
     * @Type("string")
     */
    protected $totalGross;

    /**
     * @var string
     * @SerializedName("total_net")
     * @Type("string")
     */
    protected $totalNet;

    /**
     * @var string
     * @SerializedName("total_taxes")
     * @Type("string")
     */
    protected $totalTaxes;

    /**
     * @var string
     * @SerializedName("total")
     * @Type("string")
     */
    protected $total;

    /**
     * @var double
     * @SerializedName("total_rounding_difference")
     * @Type("double")
     */
    protected $totalRoundingDifference;

    /**
     * @var int
     * @SerializedName("mwst_type")
     * @Type("integer")
     */
    protected $mwstType;

    /**
     * @var bool
     * @SerializedName("mwst_is_net")
     * @Type("boolean")
     */
    protected $mwstIsNet;

    /**
     * @var bool
     * @SerializedName("show_position_taxes")
     * @Type("boolean")
     */
    protected $showPositionTaxes;

    /**
     * @var DateTime
     * @SerializedName("is_valid_from")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidFrom;

    /**
     * @var DateTime
     * @SerializedName("is_valid_until")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidUntil;

    /**
     * @var string
     * @SerializedName("contact_address")
     * @Type("string")
     */
    protected $contactAddress;

    /**
     * @var integer
     * @SerializedName("delivery_address_type")
     * @Type("integer")
     */
    protected $deliveryAddressType;

    /**
     * @var string
     * @SerializedName("delivery_address")
     * @Type("string")
     */
    protected $deliveryAddress;

    /**
     * @var int
     * @SerializedName("kb_item_status_id")
     * @Type("integer")
     */
    protected $kbItemStatusId;

    /**
     * @var string|null
     * @SerializedName("api_reference")
     * @Type("string")
     */
    protected $apiReference;

    /**
     * @var string|null
     * @SerializedName("viewed_by_client_at")
     * @Type("string")
     */
    protected $viewedByClientAt;

    /**
     * @var integer|null
     * @SerializedName("kb_terms_of_payment_template_id")
     * @Type("integer")
     */
    protected $kbTermsOfPaymentTemplateId;

    /**
     * @var boolean
     * @SerializedName("show_total")
     * @Type("boolean")
     */
    protected $showTotal;

    /**
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $updatedAt;

    /**
     * @var string|null
     * @SerializedName("template_slug")
     * @Type("string")
     */
    protected $templateSlug;

    /**
     * @var array
     * @SerializedName("taxs")
     * @Type("array")
     */
    protected $taxs;

    /**
     * @var string|null
     * @SerializedName("network_link")
     * @Type("string")
     */
    protected $networkLink;

    /**
     * @var array
     * @SerializedName("positions")
     * @Type("array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>")
     */
    protected $positions;

    /**
     * @return array|ItemPosition[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDocumentNr(): string
    {
        return $this->documentNr;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @return int|null
     */
    public function getContactSubId(): ?int
    {
        return $this->contactSubId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @return int
     */
    public function getLogopaperId(): int
    {
        return $this->logopaperId;
    }

    /**
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->languageId;
    }

    /**
     * @return int
     */
    public function getBankAccountId(): int
    {
        return $this->bankAccountId;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    /**
     * @return int
     */
    public function getPaymentTypeId(): int
    {
        return $this->paymentTypeId;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }

    /**
     * @return string
     */
    public function getTotalGross(): string
    {
        return $this->totalGross;
    }

    /**
     * @return string
     */
    public function getTotalNet(): string
    {
        return $this->totalNet;
    }

    /**
     * @return string
     */
    public function getTotalTaxes(): string
    {
        return $this->totalTaxes;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getTotalRoundingDifference(): float
    {
        return $this->totalRoundingDifference;
    }

    /**
     * @return int
     */
    public function getMwstType(): int
    {
        return $this->mwstType;
    }

    /**
     * @return bool
     */
    public function isMwstIsNet(): bool
    {
        return $this->mwstIsNet;
    }

    /**
     * @return bool
     */
    public function isShowPositionTaxes(): bool
    {
        return $this->showPositionTaxes;
    }

    /**
     * @return DateTime
     */
    public function getIsValidFrom(): DateTime
    {
        return $this->isValidFrom;
    }

    /**
     * @return DateTime
     */
    public function getIsValidUntil(): DateTime
    {
        return $this->isValidUntil;
    }

    /**
     * @return string
     */
    public function getContactAddress(): string
    {
        return $this->contactAddress;
    }

    /**
     * @return int
     */
    public function getDeliveryAddressType(): int
    {
        return $this->deliveryAddressType;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    /**
     * @return int
     */
    public function getKbItemStatusId(): int
    {
        return $this->kbItemStatusId;
    }

    /**
     * @return string|null
     */
    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }

    /**
     * @return string|null
     */
    public function getViewedByClientAt(): ?string
    {
        return $this->viewedByClientAt;
    }

    /**
     * @return int|null
     */
    public function getKbTermsOfPaymentTemplateId(): ?int
    {
        return $this->kbTermsOfPaymentTemplateId;
    }

    /**
     * @return bool
     */
    public function isShowTotal(): bool
    {
        return $this->showTotal;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return string|null
     */
    public function getTemplateSlug(): ?string
    {
        return $this->templateSlug;
    }

    /**
     * @return array
     */
    public function getTaxs(): array
    {
        return $this->taxs;
    }

    /**
     * @return string|null
     */
    public function getNetworkLink(): ?string
    {
        return $this->networkLink;
    }
}
