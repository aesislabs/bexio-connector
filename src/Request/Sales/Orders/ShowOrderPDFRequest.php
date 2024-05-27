<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowOrderPDF
 */
class ShowOrderPDFRequest extends Request
{
    const API_PATH = '/2.0/kb_order/{order_id}/pdf';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\File';
}
