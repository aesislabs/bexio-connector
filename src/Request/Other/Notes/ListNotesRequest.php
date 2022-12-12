<?php

namespace Aesislabs\BexioConnector\Request\Other\Notes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListNotes
 */
class ListNotesRequest extends Request
{
    const API_PATH = '/note';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Note>';
}
