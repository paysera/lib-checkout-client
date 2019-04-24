<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class CardDataRestriction extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getCardType()
    {
        return $this->get('card_type');
    }

    /**
     * @param string $cardType
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->set('card_type', $cardType);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardBrand()
    {
        return $this->get('card_brand');
    }

    /**
     * @param string $cardBrand
     * @return $this
     */
    public function setCardBrand($cardBrand)
    {
        $this->set('card_brand', $cardBrand);
        return $this;
    }
}
