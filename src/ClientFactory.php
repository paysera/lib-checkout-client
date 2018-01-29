<?php

namespace Paysera\Client\ClientCheckout;

use Paysera\Component\RestClientCommon\Client\ApiClient;
use Paysera\Component\RestClientCommon\Util\ClientFactoryAbstract;

class ClientFactory extends ClientFactoryAbstract
{
    const DEFAULT_BASE_URL = 'https://checkout-a.paysera.com/checkout/rest/v1/';

    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getCheckoutClient()
    {
        return new CheckoutClient($this->apiClient);
    }
}
