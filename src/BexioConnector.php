<?php

namespace Fatpanda\BexioConnector;

use Fatpanda\BexioConnector\Message\Response;
use Fatpanda\BexioConnector\Request\Banking\BankAccounts\ListBankAccountsRequest;
use Fatpanda\BexioConnector\Request\Banking\BankAccounts\ShowBankAccountRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\CreateAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\DeleteAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\EditAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\ListAdditionalAddressesRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\SearchAdditionalAddressesRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\ShowAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\CreateContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\DeleteContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\EditContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\ListContactGroupsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\SearchContactGroupsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\ShowContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\CreateContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\DeleteContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\EditContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\ListContactRelationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\SearchContactRelationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\ShowContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\CreateContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\CreateContactsBulkRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\DeleteContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\EditContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\ListContactsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\SearchContactsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\ShowContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactSectors\ListContactSectorsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactSectors\SearchContactSectorsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\CreateSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\DeleteSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\EditSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\ListSalutationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\SearchSalutationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\ShowSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\CreateTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\DeleteTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\EditTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\ListTitlesRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\SearchTitlesRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\ShowTitleRequest;
use Fatpanda\BexioConnector\Request\Other\Companies\ListCompaniesRequest;
use Fatpanda\BexioConnector\Request\Other\Companies\ShowCompanyRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\CreateCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\DeleteCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\EditCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\ListCountriesRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\SearchCountriesRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\ShowCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Languages\ListLanguagesRequest;
use Fatpanda\BexioConnector\Request\Other\Languages\SearchLanguagesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\CreateNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\DeleteNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\EditNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ListNotesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\SearchNotesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ShowNoteRequest;
use Fatpanda\BexioConnector\Request\Other\PaymentTypes\ListPaymentTypesRequest;
use Fatpanda\BexioConnector\Request\Other\PaymentTypes\SearchPaymentTypesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\CreateTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\DeleteTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\EditTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskPrioritiesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskStatusesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\SearchTasksRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ShowTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTasksRequest;
use Fatpanda\BexioConnector\Request\Other\Units\CreateUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\DeleteUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\EditUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ListUnitsRequest;
use Fatpanda\BexioConnector\Request\Other\Units\SearchUnitsRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ShowUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ListUsersRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ShowUserRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\CreateBusinessActivityRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\ListBusinessActivitiesRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\SearchBusinessActivitiesRequest;
use Fatpanda\BexioConnector\Request\Projects\CommunicationTypes\ListCommunicationTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\CommunicationTypes\SearchCommunicationTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ArchiveProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\CreateProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\DeleteProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\EditProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectsRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectStatusRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\SearchProjectsRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ShowProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\UnarchiveProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\CreateTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\DeleteTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\EditTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ListTimesheetsRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ListTimesheetStatusRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\SearchTimesheetsRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ShowTimesheetRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CreateInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\DeleteInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\EditInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ListInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SearchInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoicePDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoiceRequest;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactBulkBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactSectors\ContactSectorsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitlesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitleBody;
use Fatpanda\BexioConnector\RequestBody\Other\Countries\CountriesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Countries\CountryBody;
use Fatpanda\BexioConnector\RequestBody\Other\Languages\LanguagesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Notes\NoteBody;
use Fatpanda\BexioConnector\RequestBody\Other\Notes\NotesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\PaymentTypes\PaymentTypesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Tasks\TaskBody;
use Fatpanda\BexioConnector\RequestBody\Other\Tasks\TasksSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Units\UnitBody;
use Fatpanda\BexioConnector\RequestBody\Other\Units\UnitsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivitiesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivityBody;
use Fatpanda\BexioConnector\RequestBody\Projects\CommunicationTypes\CommunicationTypesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Projects\ProjectBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Projects\ProjectsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Timesheets\TimesheetBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Timesheets\TimesheetsSearchBody;
use Fatpanda\BexioConnector\RequestBody\RequestBodyInterface;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBody;
use Fatpanda\BexioConnector\RequestQuery\Banking\BankAccountsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\AdditionalAddressesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactGroupsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactRelationsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactSectorsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\SalutationsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\TitlesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\CountriesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\LanguagesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\NotesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\PaymentTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TaskPrioritiesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TasksRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TaskStatusesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\UnitsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\UsersRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\BusinessActivitiesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\CommunicationTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectStatusesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\TimesheetsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\TimesheetStatusRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\RequestQueryInterface;
use Fatpanda\BexioConnector\RequestQuery\Sales\InvoicesRequestQuery;
use Fatpanda\BexioConnector\Response\ErrorResponse;
use Fatpanda\BexioConnector\Response\SuccessResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;

class BexioConnector
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @var string|null
     */
    protected $token;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var array
     */
    private $pathParameters = [];

    /**
     * @var RequestQueryInterface|null
     */
    private $query;

    /**
     * @var RequestBodyInterface
     */
    private $body;

    /**
     * BexioConnector constructor.
     * @param string|null $token
     * @param LoggerInterface $logger
     */
    public function __construct($token = null, LoggerInterface $logger = null)
    {
        $this->logger = $logger;
        $this->token = $token;

        $this->client = new Client([
            'timeout'  => 5,
        ]);
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    // Banking
    // Banking\BankAccounts

    /**
     * @param BankAccountsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBankAccountsList(?BankAccountsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBankAccountsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBankAccount(int $bankAccountId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $request = new ShowBankAccountRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts
    // Contacts\AdditionalAddresses

    /**
     * @param int $contactId
     * @param AdditionalAddressesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAdditionalAddressesList(int $contactId, ?AdditionalAddressesRequestQuery $query = null): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->query = $query;
        $request = new ListAdditionalAddressesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param AdditionalAddressBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postAdditionalAddress(int $contactId, AdditionalAddressBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $request = new CreateAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param AdditionalAddressesSearchBody $body
     * @param AdditionalAddressesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchAdditionalAddresses(
        int $contactId,
        AdditionalAddressesSearchBody $body,
        ?AdditionalAddressesRequestQuery $query = null
    ): Response {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $this->query = $query;
        $request = new SearchAdditionalAddressesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $additionalAddressId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAdditionalAddress(int $contactId, int $additionalAddressId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['additional_address_id'] = $additionalAddressId;
        $request = new ShowAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $contactRelationId
     * @param AdditionalAddressBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putAdditionalAddress(int $contactId, int $contactRelationId, AdditionalAddressBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $this->body = $body;
        $request = new EditAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $additionalAddressId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteAdditionalAddress(int $contactId, int $additionalAddressId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['additional_address_id'] = $additionalAddressId;
        $request = new DeleteAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactGroups

    /**
     * @param ContactGroupsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactGroupsList(?ContactGroupsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactGroupsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactGroupBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactGroup(ContactGroupBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactGroupsSearchBody $body
     * @param ContactGroupsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactGroups(ContactGroupsSearchBody $body, ?ContactGroupsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactGroupsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactGroup(int $contactGroupId): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $request = new ShowContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @param ContactGroupBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContactGroup(int $contactGroupId, ContactGroupBody $body): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $this->body = $body;
        $request = new EditContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContactGroup(int $contactGroupId): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $request = new DeleteContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactRelations

    /**
     * @param ContactRelationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactRelationsList(?ContactRelationsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactRelationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactRelationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactRelation(ContactRelationBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactRelationsSearchBody $body
     * @param ContactRelationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactRelations(ContactRelationsSearchBody $body, ?ContactRelationsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactRelationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactRelation(int $contactRelationId): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $request = new ShowContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @param ContactRelationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContactRelation(int $contactRelationId, ContactRelationBody $body): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $this->body = $body;
        $request = new EditContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContactRelation(int $contactRelationId): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $request = new DeleteContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactSectors

    /**
     * @param ContactSectorsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactSectorsList(?ContactSectorsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactSectorsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactSectorsSearchBody $body
     * @param ContactSectorsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactSectors(ContactSectorsSearchBody $body, ?ContactSectorsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactSectorsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Contacts

    /**
     * @param ContactsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactsList(?ContactsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContact(ContactBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactsSearchBody $body
     * @param ContactsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContacts(ContactsSearchBody $body, ?ContactsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContact(int $contactId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $request = new ShowContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param ContactBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContact(int $contactId, ContactBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $request = new EditContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContact(int $contactId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $request = new DeleteContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactBulkBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactsBulk(ContactBulkBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactsBulkRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Salutations

    /**
     * @param SalutationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSalutationsList(?SalutationsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListSalutationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param SalutationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSalutation(SalutationBody $body): Response
    {
        $this->body = $body;
        $request = new CreateSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param SalutationsSearchBody $body
     * @param SalutationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchSalutations(SalutationsSearchBody $body, ?SalutationsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchSalutationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSalutation(int $salutationId): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $request = new ShowSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @param SalutationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putSalutation(int $salutationId, SalutationBody $body): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $this->body = $body;
        $request = new EditSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteSalutation(int $salutationId): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $request = new DeleteSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Titles

    /**
     * @param TitlesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTitlesList(?TitlesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTitlesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TitleBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTitle(TitleBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TitlesSearchBody $body
     * @param TitlesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTitles(TitlesSearchBody $body, ?TitlesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTitlesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTitle(int $titleId): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $request = new ShowTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @param TitleBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTitle(int $titleId, TitleBody $body): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $this->body = $body;
        $request = new EditTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTitle(int $titleId): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $request = new DeleteTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other
    // Other\Companies

    /**
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCompaniesList(): Response
    {
        $request = new ListCompaniesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $companyId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCompany(int $companyId): Response
    {
        $this->pathParameters['profile_id'] = $companyId;
        $request = new ShowCompanyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Countries

    /**
     * @param CountriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCountriesList(?CountriesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCountriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CountryBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCountry(CountryBody $body): Response
    {
        $this->body = $body;
        $request = new CreateCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CountriesSearchBody $body
     * @param CountriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchCountries(CountriesSearchBody $body, ?CountriesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchCountriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCountry(int $countryId): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $request = new ShowCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @param CountryBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putCountry(int $countryId, CountryBody $body): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $this->body = $body;
        $request = new EditCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteCountry(int $countryId): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $request = new DeleteCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Languages

    /**
     * @param LanguagesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getLanguagesList(?LanguagesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListLanguagesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param LanguagesSearchBody $body
     * @param LanguagesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchLanguages(LanguagesSearchBody $body, ?LanguagesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchLanguagesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Notes

    /**
     * @param NotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getNotesList(?NotesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListNotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param NoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postNote(NoteBody $body): Response
    {
        $this->body = $body;
        $request = new CreateNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param NotesSearchBody $body
     * @param NotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchNotes(NotesSearchBody $body, ?NotesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchNotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getNote(int $noteId): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $request = new ShowNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @param NoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putNote(int $noteId, NoteBody $body): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $this->body = $body;
        $request = new EditNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteNote(int $noteId): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $request = new DeleteNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\PaymentType

    /**
     * @param PaymentTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getPaymentTypesList(?PaymentTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListPaymentTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param PaymentTypesSearchBody $body
     * @param PaymentTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchPaymentTypes(PaymentTypesSearchBody $body, ?PaymentTypesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchPaymentTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Tasks

    /**
     * @param TasksRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTasksList(?TasksRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTasksRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTask(TaskBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TasksSearchBody $body
     * @param TasksRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTasks(TasksSearchBody $body, ?TasksRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTasksRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTask(int $taskId): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $request = new ShowTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @param TaskBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTask(int $taskId, TaskBody $body): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $this->body = $body;
        $request = new EditTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTask(int $taskId): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $request = new DeleteTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskPrioritiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTaskPrioritiesList(?TaskPrioritiesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTaskPrioritiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskStatusesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTaskStatusesList(?TaskStatusesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTaskStatusesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Units

    /**
     * @param UnitsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUnitsList(?UnitsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListUnitsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param UnitBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postUnit(UnitBody $body): Response
    {
        $this->body = $body;
        $request = new CreateUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param UnitsSearchBody $body
     * @param UnitsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchUnits(UnitsSearchBody $body, ?UnitsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchUnitsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUnit(int $unitId): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $request = new ShowUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @param UnitBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putUnit(int $unitId, UnitBody $body): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $this->body = $body;
        $request = new EditUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteUnit(int $unitId): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $request = new DeleteUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Users

    /**
     * @param UsersRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUsersList(?UsersRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListUsersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $userId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUser(int $userId): Response
    {
        $this->pathParameters['user_id'] = $userId;
        $request = new ShowUserRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects
    // Projects\Projects

    /**
     * @param ProjectsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getProjectsList(?ProjectsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postProject(ProjectBody $body): Response
    {
        $this->body = $body;
        $request = new CreateProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectsSearchBody $body
     * @param ProjectsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchProjects(ProjectsSearchBody $body, ?ProjectsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchProjectsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new ShowProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @param ProjectBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putProject(int $projectId, ProjectBody $body): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $this->body = $body;
        $request = new EditProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new DeleteProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postArchiveProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new ArchiveProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postUnarchiveProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new UnarchiveProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectStatusesRequestQuery|null $query
     * @return Response
     */
    public function getProjectStatusesList(?ProjectStatusesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectStatusRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectTypesRequestQuery|null $query
     * @return Response
     */
    public function getProjectTypesList(?ProjectTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\Timesheets

    /**
     * @param TimesheetsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheetsList(?TimesheetsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTimesheetsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTimesheet(TimesheetBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetsSearchBody $body
     * @param TimesheetsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTimesheets(TimesheetsSearchBody $body, ?TimesheetsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTimesheetsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheet(int $timesheetId): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $request = new ShowTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @param TimesheetBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTimesheet(int $timesheetId, TimesheetBody $body): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $this->body = $body;
        $request = new EditTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTimesheet(int $timesheetId): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $request = new DeleteTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetStatusRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheetStatusList(?TimesheetStatusRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTimesheetStatusRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\BusinessActivities

    /**
     * @param BusinessActivitiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBusinessActivitiesList(?BusinessActivitiesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBusinessActivitiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param BusinessActivityBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postBusinessActivity(BusinessActivityBody $body): Response
    {
        $this->body = $body;
        $request = new CreateBusinessActivityRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param BusinessActivitiesSearchBody $body
     * @param BusinessActivitiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchBusinessActivities(BusinessActivitiesSearchBody $body, ?BusinessActivitiesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchBusinessActivitiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\CommunicationTypes

    /**
     * @param CommunicationTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCommunicationTypesList(?CommunicationTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCommunicationTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CommunicationTypesSearchBody $body
     * @param CommunicationTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchCommunicationTypes(CommunicationTypesSearchBody $body, ?CommunicationTypesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchCommunicationTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales
    // Sales\Invoices

    /**
     * @param InvoicesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicesList(?InvoicesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListInvoicesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new ShowInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicePdf(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new ShowInvoicePDFRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param InvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postInvoice(InvoiceBody $body = null): Response
    {
        $this->body = $body;
        $request = new CreateInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param InvoicesSearchBody $body
     * @param InvoicesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchInvoices(InvoicesSearchBody $body, ?InvoicesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchInvoicesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param InvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putInvoice(int $invoiceId, InvoiceBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new EditInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new DeleteInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @return array
     */
    private function getRequestParameters(): array
    {
        return [
            $this->client,
            $this->token,
            $this->logger,
            $this->pathParameters,
            $this->query,
            $this->body,
        ];
    }
}
