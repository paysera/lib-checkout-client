<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Evp\Component\Money\Money;
use Paysera\Component\RestClientCommon\Entity\Entity;

class CaptureParameters extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return Money|null
     */
    public function getCaptureAmount()
    {
        return $this->get('capture_amount') !== null
            ? new Money($this->get('capture_amount')['amount'], $this->get('capture_amount')['currency'])
            : null
        ;
    }

    /**
     * @param Money|null $captureAmount
     *
     * @return self
     */
    public function setCaptureAmount(Money $captureAmount = null)
    {
        if ($captureAmount === null) {
            $this->set('capture_amount', null);
        } else {
            $this->set('capture_amount', [
                'amount' => $captureAmount->getAmount(),
                'currency' => $captureAmount->getCurrency()
            ]);
        }

        return $this;
    }
}
