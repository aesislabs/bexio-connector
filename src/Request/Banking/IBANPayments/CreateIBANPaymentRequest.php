<?php

namespace Aesislabs\BexioConnector\Request\Banking\IBANPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateIBANPayment
 */
class CreateIBANPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/iban_payments';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankIBANPayment';
}
