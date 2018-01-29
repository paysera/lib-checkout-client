<?php

namespace Paysera\Client\ClientCheckout\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class PaymentRequestsResult extends Result
{
    protected function createItem(array $data)
    {
        return new PaymentRequest($data);
    }
}
