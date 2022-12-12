<?php

namespace Aesislabs\BexioConnector\Request\Other\Users;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3UpdateFictionalUser
 */
class UpdateFictionalUserRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/fictional_users/{fictional_user_id}';
    const API_METHOD = 'PATCH';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\FictionalUser';
}
