<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Invoices;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBodyItem;

class InvoicesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_ID = 'id';
    public const SEARCH_FIELD_KB_ITEM_STATUS_ID = 'kb_item_status_id';
    public const SEARCH_FIELD_DOCUMENT_NR = 'document_nr';
    public const SEARCH_FIELD_TITLE = 'title';
    public const SEARCH_FIELD_API_REFERENCE = 'api_reference';
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_CONTACT_SUB_ID = 'contact_sub_id';
    public const SEARCH_FIELD_USER_ID = 'user_id';
    public const SEARCH_FIELD_CURRENCY_ID = 'currency_id';
    public const SEARCH_FIELD_TOTAL_GROSS = 'total_gross';
    public const SEARCH_FIELD_TOTAL_NET = 'total_net';
    public const SEARCH_FIELD_TOTAL = 'total';
    public const SEARCH_FIELD_IS_VALID_FROM = 'is_valid_from';
    public const SEARCH_FIELD_IS_VALID_TO = 'is_valid_to';
    public const SEARCH_FIELD_UPDATED_AT = 'updated_at';

    public const ITEM_STATUS_DRAFT = 7;
    public const ITEM_STATUS_PENDING = 8;
    public const ITEM_STATUS_PAID = 9;
    public const ITEM_STATUS_PARTIAL = 16;
    public const ITEM_STATUS_CANCELED = 19;
    public const ITEM_STATUS_UNPAID = 31;
}
