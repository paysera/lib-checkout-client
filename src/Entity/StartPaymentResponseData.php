<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class StartPaymentResponseData extends Entity
{
    const METHOD_POST = 'POST';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->get('action_url');
    }

    /**
     * @param string $actionUrl
     * @return $this
     */
    public function setActionUrl($actionUrl)
    {
        $this->set('action_url', $actionUrl);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethod()
    {
        return $this->get('method');
    }

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->set('method', $method);
        return $this;
    }

    /**
     * @return object|null
     */
    public function getAutoPostData()
    {
return $this->getByReference('auto_post_data');
    }

    /**
     * @param object $autoPostData
     * @return $this
     */
    public function setAutoPostData($autoPostData)
    {
        $this->setByReference('auto_post_data', $autoPostData);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->get('redirect_url');
    }

    /**
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->set('redirect_url', $redirectUrl);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGatewayKey()
    {
        return $this->get('gateway_key');
    }

    /**
     * @param string $gatewayKey
     * @return $this
     */
    public function setGatewayKey($gatewayKey)
    {
        $this->set('gateway_key', $gatewayKey);
        return $this;
    }
}
