<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class Payer extends Entity
{
    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->get('name');
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSurname()
    {
        return $this->get('surname');
    }
    /**
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->set('surname', $surname);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFullName()
    {
        return $this->get('full_name');
    }
    /**
     * @param string $fullName
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->set('full_name', $fullName);
        return $this;
    }
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
    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->get('email');
    }
    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->set('email', $email);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIp()
    {
        return $this->get('ip');
    }
    /**
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->set('ip', $ip);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIpCountry()
    {
        return $this->get('ip_country');
    }
    /**
     * @param string $ipCountry
     * @return $this
     */
    public function setIpCountry($ipCountry)
    {
        $this->set('ip_country', $ipCountry);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAccount()
    {
        return $this->get('account');
    }
    /**
     * @param string $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->set('account', $account);
        return $this;
    }
}
