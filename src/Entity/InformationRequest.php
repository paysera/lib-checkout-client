<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class InformationRequest extends Entity
{
    /**
     * @return string|null
     */
    public function getPersonalCode()
    {
        return $this->get('personal_code');
    }
    /**
     * @param string $personalCode
     * @return $this
     */
    public function setPersonalCode($personalCode)
    {
        $this->set('personal_code', $personalCode);
        return $this;
    }
}
