<?php

namespace Tda\LaravelGoogleAnalyticsAdmin\Traits;


trait MeasurementProtocolSecrets
{


    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.dataStreams.measurementProtocolSecrets/list
    */
    public function listMeasurementProtocolSecrets(string $dataStream): object
    {
        $this->service('ListMeasurementProtocolSecrets')
            ->setUri($dataStream);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.dataStreams.measurementProtocolSecrets/create
    */
    public function createMeasurementProtocolSecret(string $dataStream, array $params): object
    {
        $this->service('CreateMeasurementProtocolSecret')
            ->setUri($dataStream)
            ->queryBody($params);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.dataStreams.measurementProtocolSecrets/get
    */
    public function getMeasurementProtocolSecret(string $measurementProtocolSecret): object
    {
        $this->service('GetMeasurementProtocolSecret')
            ->setUri($measurementProtocolSecret);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.dataStreams.measurementProtocolSecrets/patch
    */
    public function updateMeasurementProtocolSecret(string $measurementProtocolSecret, array $params): object
    {
        $queryParams = implode(',', array_keys($params));

        $this->service('UpdateMeasurementProtocolSecret')
            ->setUri($measurementProtocolSecret)
            ->queryParams([$queryParams])
            ->queryBody($params);

        return $this->call();
    }

    /*
    * https://developers.google.com/analytics/devguides/config/admin/v1/rest/v1beta/properties.dataStreams.measurementProtocolSecrets/delete
    */
    public function deleteMeasurementProtocolSecret(string $measurementProtocolSecret)
    {
        $this->service('DeleteMeasurementProtocolSecret')
            ->setUri($measurementProtocolSecret);

        return $this->call();
    }

}
