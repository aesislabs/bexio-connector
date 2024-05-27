<?php

namespace Aesislabs\BexioConnector\Request\Accounting\CalendarYears;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListCalendarYears
 */
class ListCalendarYearsRequest extends Request
{
    const API_PATH = '/2.0/accounting/calendar_years';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\CalendarYear>';
}
