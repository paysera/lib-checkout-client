<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class StartPaymentResponse extends Entity
{
    const TYPE_FORM_AUTO_POST = 'form_auto_post';
    const TYPE_REDIRECT = 'redirect';
    const TYPE_CUSTOM = 'custom';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
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
     * @return StartPaymentResponseData|null
     */
    public function getFlowData()
    {
        if ($this->get('flow_data') === null) {
            return null;
        }
        return (new StartPaymentResponseData())->setDataByReference($this->getByReference('flow_data'));
    }

    /**
     * @param StartPaymentResponseData $flowData
     * @return $this
     */
    public function setFlowData(StartPaymentResponseData $flowData)
    {
        $this->setByReference('flow_data', $flowData->getDataByReference());
        return $this;
    }
}
