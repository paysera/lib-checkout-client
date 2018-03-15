<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class PaymentRequestResult extends Result
{
    protected function createItem(array $data)
    {
        return new PaymentRequest($data);
    }
}
