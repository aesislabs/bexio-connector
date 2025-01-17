<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\ItemPositions;

use Aesislabs\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ItemPositionBody extends AbstractBody
{

    /**
     * @var string
     * @SerializedName("amount")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $amount;

    /**
     * @var integer
     * @SerializedName("unit_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected $unitId;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected $accountId;

    /**
     * @var integer
     * @SerializedName("tax_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var string
     * @SerializedName("text")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $text;

    /**
     * @var string
     * @SerializedName("unit_price")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $unitPrice;

    /**
     * @var string
     * @SerializedName("discount_in_percent")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $discountInPercent;

    /**
     * @var integer
     * @SerializedName("article_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected $articleId;

    /**
     * @param string $amount
     * @return ItemPositionBody
     */
    public function setAmount(string $amount): ItemPositionBody
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param int $unitId
     * @return ItemPositionBody
     */
    public function setUnitId(int $unitId): ItemPositionBody
    {
        $this->unitId = $unitId;
        return $this;
    }

    /**
     * @param int $accountId
     * @return ItemPositionBody
     */
    public function setAccountId(int $accountId): ItemPositionBody
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @param int $taxId
     * @return ItemPositionBody
     */
    public function setTaxId(int $taxId): ItemPositionBody
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * @param string $text
     * @return ItemPositionBody
     */
    public function setText(string $text): ItemPositionBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return ItemPositionBody
     */
    public function setUnitPrice(string $unitPrice): ItemPositionBody
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $discountInPercent
     * @return ItemPositionBody
     */
    public function setDiscountInPercent(string $discountInPercent): ItemPositionBody
    {
        $this->discountInPercent = $discountInPercent;
        return $this;
    }

    /**
     * @param int $articleId
     * @return ItemPositionBody
     */
    public function setArticleId(int $articleId): ItemPositionBody
    {
        $this->articleId = $articleId;
        return $this;
    }
}
