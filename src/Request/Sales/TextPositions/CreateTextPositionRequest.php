<?php

namespace Aesislabs\BexioConnector\Request\Sales\TextPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2CreateTextPosition
 */
class CreateTextPositionRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_text';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\TextPosition';
}
