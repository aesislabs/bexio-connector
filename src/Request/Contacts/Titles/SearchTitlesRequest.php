<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Titles;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchTitles
 */
class SearchTitlesRequest extends Request
{
    const API_PATH = '/title/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\Title>';
}
