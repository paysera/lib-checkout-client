<?php

namespace Paysera\Client\ClientCheckout\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PaymentRequestMethod extends Entity
{
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->get('key');
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->set('key', $key);
        return $this;
    }
    /**
     * @return string[]|null
     */
    public function getCountries()
    {
        return $this->get('countries');
    }
    /**
     * @param string[] $countries
     * @return $this
     */
    public function setCountries(array $countries)
    {
        $this->set('countries', $countries);
        return $this;
    }
    /**
     * @return string
     */
    public function getGroupKey()
    {
        return $this->get('group_key');
    }
    /**
     * @param string $groupKey
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->set('group_key', $groupKey);
        return $this;
    }
    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->get('logo_url');
    }
    /**
     * @param string $logoUrl
     * @return $this
     */
    public function setLogoUrl($logoUrl)
    {
        $this->set('logo_url', $logoUrl);
        return $this;
    }
    /**
     * @return BasicInformation[]
     */
    public function getBasicInformation()
    {
        $items = $this->getByReference('basic_information');
        if ($items === null) {
            return [];
        }

        $list = [];
        foreach($items as &$item) {
            $list[] = (new BasicInformation())->setDataByReference($item);
        }

        return $list;
    }
    /**
     * @param BasicInformation[] $basicInformation
     * @return $this
     */
    public function setBasicInformation(array $basicInformation)
    {
        $data = [];
        foreach($basicInformation as $item) {
            $data[] = $item->getDataByReference();
        }
        $this->setByReference('basic_information', $data);
        return $this;
    }
    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->get('gateway');
    }
    /**
     * @param string $gateway
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->set('gateway', $gateway);
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
}
