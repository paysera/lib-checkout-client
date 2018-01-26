<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PaymentRequestEventFilter extends Entity
{
    /**
     * @return string|null
     */
    public function getDummy()
    {
        return $this->get('dummy');
    }

    /**
     * @param string $dummy
     * @return $this
     */
    public function setDummy($dummy)
    {
        $this->set('dummy', $dummy);
        return $this;
    }

}
