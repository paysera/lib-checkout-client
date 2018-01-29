<?php

namespace Paysera\Client\ClientCheckout\Entity;

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
     * @return string|null
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
    /**
     * @return string|null
     */
    public function getErrorUri()
    {
        return $this->get('error_uri');
    }
    /**
     * @param string $errorUri
     * @return $this
     */
    public function setErrorUri($errorUri)
    {
        $this->set('error_uri', $errorUri);
        return $this;
    }
    /**
     * @return object|null
     */
    public function getErrorProperties()
    {
        return $this->getByReference('error_properties');
    }
    /**
     * @param object $errorProperties
     * @return $this
     */
    public function setErrorProperties($errorProperties)
    {
        $this->set('error_properties', $errorProperties);
        return $this;
    }
    /**
     * @return object|null
     */
    public function getErrorData()
    {
        return $this->getByReference('error_data');
    }
    /**
     * @param object $errorData
     * @return $this
     */
    public function setErrorData($errorData)
    {
        $this->set('error_data', $errorData);
        return $this;
    }
}
