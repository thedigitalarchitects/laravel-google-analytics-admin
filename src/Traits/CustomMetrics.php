<?php

namespace Tda\LaravelGoogleAnalyticsAdmin\Traits;


trait CustomMetrics
{


    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.customMetrics/list
    */
    public function listCustomMetrics(string $property)
    {
        $this->service('ListCustomMetrics')
            ->setTemplate($property);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.customMetrics/create
    */
    public function createCustomMetric(string $property, array $params)
    {
        $this->service('CreateCustomMetric')
            ->setTemplate($property)
            ->queryBody($params);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.customMetrics/get
    */
    public function getCustomMetric(string $property)
    {
        $this->service('GetCustomMetric')
            ->setTemplate($property);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.customMetrics/patch
    */
    public function updateCustomMetric(string $metric, array $params)
    {
        $queryParams = implode(',', array_keys($params));

        $this->service('UpdateCustomMetric')
            ->setTemplate($metric)
            ->queryParams([$queryParams])
            ->queryBody($params);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.customMetrics/delete
    */
    public function archiveCustomMetric(string $property)
    {
        $this->service('ArchiveCustomMetric');
        $this->setTemplate($property);

        return $this->call();
    }

}