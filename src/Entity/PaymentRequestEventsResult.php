<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class PaymentRequestEventsResult extends Result
{
    protected function createItem(array $data)
    {
        return new PaymentRequestEvent($data);
    }
}
