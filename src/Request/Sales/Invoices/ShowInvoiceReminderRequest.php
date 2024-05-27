<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowInvoiceReminder
 */
class ShowInvoiceReminderRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/kb_reminder/{reminder_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\InvoiceReminder';
}
