<?php

namespace Paysera\Client\ClientCheckout\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class AuthorizationParameters extends Entity
{
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
