<?php

namespace Paysera\Client\ClientCheckout\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PaymentRequest extends Entity
{
    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
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
    /**
     * @return string
     */
    public function getBusinessId()
    {
        return $this->get('business_id');
    }
    /**
     * @param string $businessId
     * @return $this
     */
    public function setBusinessId($businessId)
    {
        $this->set('business_id', $businessId);
        return $this;
    }
    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->get('order_id');
    }
    /**
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->set('order_id', $orderId);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUniqueIdentifier()
    {
        return $this->get('unique_identifier');
    }
    /**
     * @param string $uniqueIdentifier
     * @return $this
     */
    public function setUniqueIdentifier($uniqueIdentifier)
    {
        $this->set('unique_identifier', $uniqueIdentifier);
        return $this;
    }
    /**
     * @return Money
     */
    public function getPrice()
    {
        return (new Money())->setDataByReference($this->getByReference('price'));
    }
    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price)
    {
        $this->setByReference('price', $price->getDataByReference());
        return $this;
    }
    /**
     * @return Money|null
     */
    public function getPricePaid()
    {
        return (new Money())->setDataByReference($this->getByReference('price_paid'));
    }
    /**
     * @param Money $pricePaid
     * @return $this
     */
    public function setPricePaid(Money $pricePaid)
    {
        $this->setByReference('price_paid', $pricePaid->getDataByReference());
        return $this;
    }
    /**
     * @return integer|null
     */
    public function getValidUntil()
    {
        return $this->get('valid_until');
    }
    /**
     * @param integer $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->set('valid_until', $validUntil);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLocale()
    {
        return $this->get('locale');
    }
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->set('locale', $locale);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMethodCountry()
    {
        return $this->get('method_country');
    }
    /**
     * @param string $methodCountry
     * @return $this
     */
    public function setMethodCountry($methodCountry)
    {
        $this->set('method_country', $methodCountry);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMethodKey()
    {
        return $this->get('method_key');
    }
    /**
     * @param string $methodKey
     * @return $this
     */
    public function setMethodKey($methodKey)
    {
        $this->set('method_key', $methodKey);
        return $this;
    }
    /**
     * @return Payer|null
     */
    public function getPayer()
    {
        return (new Payer())->setDataByReference($this->getByReference('payer'));
    }
    /**
     * @param Payer $payer
     * @return $this
     */
    public function setPayer(Payer $payer)
    {
        $this->setByReference('payer', $payer->getDataByReference());
        return $this;
    }
    /**
     * @return InformationRequest|null
     */
    public function getInformationRequest()
    {
        return (new InformationRequest())->setDataByReference($this->getByReference('information_request'));
    }
    /**
     * @param InformationRequest $informationRequest
     * @return $this
     */
    public function setInformationRequest(InformationRequest $informationRequest)
    {
        $this->setByReference('information_request', $informationRequest->getDataByReference());
        return $this;
    }
    /**
     * @return CardDataRestriction|null
     */
    public function getCardDataRestriction()
    {
        return (new CardDataRestriction())->setDataByReference($this->getByReference('card_data_restriction'));
    }
    /**
     * @param CardDataRestriction $cardDataRestriction
     * @return $this
     */
    public function setCardDataRestriction(CardDataRestriction $cardDataRestriction)
    {
        $this->setByReference('card_data_restriction', $cardDataRestriction->getDataByReference());
        return $this;
    }
    /**
     * @return string
     */
    public function getAcceptUrl()
    {
        return $this->get('accept_url');
    }
    /**
     * @param string $acceptUrl
     * @return $this
     */
    public function setAcceptUrl($acceptUrl)
    {
        $this->set('accept_url', $acceptUrl);
        return $this;
    }
    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->get('cancel_url');
    }
    /**
     * @param string $cancelUrl
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->set('cancel_url', $cancelUrl);
        return $this;
    }
    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->get('callback_url');
    }
    /**
     * @param string $callbackUrl
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->set('callback_url', $callbackUrl);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAuthorizationUrl()
    {
        return $this->get('authorization_url');
    }
    /**
     * @param string $authorizationUrl
     * @return $this
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->set('authorization_url', $authorizationUrl);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAffiliateKey()
    {
        return $this->get('affiliate_key');
    }
    /**
     * @param string $affiliateKey
     * @return $this
     */
    public function setAffiliateKey($affiliateKey)
    {
        $this->set('affiliate_key', $affiliateKey);
        return $this;
    }
    /**
     * @return object|null
     */
    public function getParameters()
    {
        return $this->getByReference('parameters');
    }
    /**
     * @param object $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->set('parameters', $parameters);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getTokenStrategy()
    {
        return $this->get('token_strategy');
    }
    /**
     * @param string $tokenStrategy
     * @return $this
     */
    public function setTokenStrategy($tokenStrategy)
    {
        $this->set('token_strategy', $tokenStrategy);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIssuedToken()
    {
        return $this->get('issued_token');
    }
    /**
     * @param string $issuedToken
     * @return $this
     */
    public function setIssuedToken($issuedToken)
    {
        $this->set('issued_token', $issuedToken);
        return $this;
    }
}
