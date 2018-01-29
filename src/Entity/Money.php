<?php

namespace Paysera\Client\ClientCheckout\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class Money extends Entity
{
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->get('amount');
    }
    /**
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->set('amount', $amount);
        return $this;
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->get('currency');
    }
    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->set('currency', $currency);
        return $this;
    }
}
