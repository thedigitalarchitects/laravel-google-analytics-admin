<?php

namespace Tda\LaravelGoogleAnalyticsAdmin\Traits;

trait Accounts
{


    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/list
    */
    public function listAccounts(): object
    {
        $this->service('ListAccounts');

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/get
    */
    public function listAccountSummaries(): object
    {
        $this->service('ListAccountSummaries');

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/provisionAccountTicket
    */
    public function provisionAccountTicket(): string
    {
        $this->service('ProvisionAccountTicket');

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/get
    */
    public function getAccount(string $account): object
    {
        $this->service('GetAccount')->setUri($account);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/patch
    */
    public function updateAccount(string $account, array $params): object
    {
        $queryParams = implode(',', array_keys($params));

        $this->service('UpdateAccount')
            ->setUri($account)
            ->queryParams([$queryParams])
            ->queryBody($params);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/delete
    */
    public function deleteAccount(string $account)
    {
        $this->service('DeleteAccount')
            ->setUri($account);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/getDataSharingSettings
    */
    public function getDataSharingSettings(string $account)
    {
        $this->service('GetDataSharingSettings')
            ->setUri($account . '/dataSharingSettings');

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/runAccessReport
    */
    public function runAccountsAccessReport(string $account, array $dateRange)
    {
        $accessDateRange = json_encode($dateRange);
        $this->service('RunAccessReport')
            ->setUri($account)
            ->queryParams($dateRange);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/accounts/searchChangeHistoryEvents
    */
    public function searchChangeHistoryEvents(string $account)
    {
        $this->service('SearchChangeHistoryEvents')
            ->setUri($account);

        return $this->call();
    }

}
