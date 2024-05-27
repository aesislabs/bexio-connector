<?php

namespace Aesislabs\BexioConnector\Request\Other\Users;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3CreateFictionalUser
 */
class CreateFictionalUserRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/2.0/fictional_users';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\FictionalUser';
}
