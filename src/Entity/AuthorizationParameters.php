<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class AuthorizationParameters extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->get('token');
    }
    
    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->set('token', $token);
        return $this;
    }
}
