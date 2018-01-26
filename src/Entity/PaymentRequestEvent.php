<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PaymentRequestEvent extends Entity
{
    const TYPE_PAID = 'paid';
    const TYPE_INFORMATION = 'information';
    const TYPE_CANCELED = 'canceled';

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->get('type');
    }
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->set('type', $type);
        return $this;
    }
    /**
     * @return PaymentRequest|null
     */
    public function getPaymentRequest()
    {
        return (new PaymentRequest())->setDataByReference($this->getByReference('payment_request'));
    }
    /**
     * @param PaymentRequest $paymentRequest
     * @return $this
     */
    public function setPaymentRequest(PaymentRequest $paymentRequest)
    {
        $this->setByReference('payment_request', $paymentRequest->getDataByReference());
        return $this;
    }
}
