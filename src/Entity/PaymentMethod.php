<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PaymentMethod extends Entity
{
    /**
     * @return string
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
