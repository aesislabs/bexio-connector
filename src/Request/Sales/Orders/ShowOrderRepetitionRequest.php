<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowOrderRepetition
 */
class ShowOrderRepetitionRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}/repetition';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\OrderRepetition';
}
