<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Filter;

class PaymentRequestFilter extends Filter
{
    /**
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get('business_id');
    }

    /**
     * @param string $businessId
     * @return $this
     */
    public function setBusinessId($businessId)
    {
        $this->set('business_id', $businessId);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->set('status', $status);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethodKey()
    {
        return $this->get('method_key');
    }

    /**
     * @param string $methodKey
     * @return $this
     */
    public function setMethodKey($methodKey)
    {
        $this->set('method_key', $methodKey);
        return $this;
    }

}
