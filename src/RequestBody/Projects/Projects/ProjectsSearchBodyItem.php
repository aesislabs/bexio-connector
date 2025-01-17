<?php

namespace Aesislabs\BexioConnector\RequestBody\Projects\Projects;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBodyItem;

class ProjectsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_PR_STATE_ID = 'pr_state_id';
}
