<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class ContactInfo extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getContactsUrl()
    {
        return $this->get('contacts_url');
    }

    /**
     * @param string $contactsUrl
     * @return $this
     */
    public function setContactsUrl($contactsUrl)
    {
        $this->set('contacts_url', $contactsUrl);
        return $this;
    }

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
    public function getAddress()
    {
        return $this->get('address');
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->set('address', $address);
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
    public function getPhone()
    {
        return $this->get('phone');
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->set('phone', $phone);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOther()
    {
        return $this->get('other');
    }

    /**
     * @param string $other
     * @return $this
     */
    public function setOther($other)
    {
        $this->set('other', $other);
        return $this;
    }
}
