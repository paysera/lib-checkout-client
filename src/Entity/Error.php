<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class Error extends Entity
{
    /**
     * @return string
     */
    public function getError()
    {
        return $this->get('error');
    }
    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        $this->set('error', $error);
        return $this;
    }
    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->get('error_description');
    }
    /**
     * @param string $errorDescription
     * @return $this
     */
    public function setErrorDescription($errorDescription)
    {
        $this->set('error_description', $errorDescription);
        return $this;
    }
}
