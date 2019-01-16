
## paysera-checkout-client

Provides methods to manipulate `Checkout` API.
It automatically authenticates all requests and maps required data structure for you.

#### Usage

This library provides `ClientFactory` class, which you should use to get the API client itself:

```php
use Paysera\Client\CheckoutClient\ClientFactory;

$clientFactory = ClientFactory::create([
    'base_url' => 'https://checkout-eu-a.paysera.com/checkout/rest/v1/', // optional, in case you need a custom one.
    'basic' => [                                        // use this, it API requires Basic authentication.
        'username' => 'username',
        'password' => 'password',
    ],
    'oauth' => [                                        // use this, it API requires OAuth v2 authentication.
        'token' => [
            'access_token' => 'my-access-token',
            'refresh_token' => 'my-refresh-token',
        ],
    ],
    // other configuration options, if needed
]);

$checkoutClient = $clientFactory->getCheckoutClient();
```

Please use only one authentication mechanism, provided by `Vendor`.

Now, that you have instance of `CheckoutClient`, you can use following methods
### Methods

    
Update payment request customer email


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$email = new Entities\Email();

$email->setEmail($email);
    
$result = $checkoutClient->setPaymentRequestEmail($id, $email);
```
---


Get payment methods for a payment request


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$filter = new Entities\Filter();

$filter->setLimit($limit);
$filter->setOffset($offset);
$filter->setOrderBy($orderBy);
$filter->setOrderDirection($orderDirection);
    
$result = $checkoutClient->getPaymentRequestMethods($id, $filter);
```
---


Start payment and return flow data


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$paymentMethod = new Entities\PaymentMethod();

$paymentMethod->setMethodKey($methodKey);
    
$result = $checkoutClient->startPaymentRequestPayment($id, $paymentMethod);
```
---


Authorize PaymentRequest with already issued Token


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$authorizationParameters = new Entities\AuthorizationParameters();

$authorizationParameters->setToken($token);
    
$result = $checkoutClient->authorizePaymentRequest($id, $authorizationParameters);
```
---


Capture authorized PaymentRequest


```php

$result = $checkoutClient->capturePaymentRequest($id);
```
---


Get payment request


```php

$result = $checkoutClient->getPaymentRequest($id);
```
---


Create payment request


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$paymentRequest = new Entities\PaymentRequest();

$paymentRequest->setId($id);
$paymentRequest->setStatus($status);
$paymentRequest->setBusinessId($businessId);
$paymentRequest->setOrderId($orderId);
$paymentRequest->setUniqueIdentifier($uniqueIdentifier);
$paymentRequest->setPrice($price);
$paymentRequest->setPricePaid($pricePaid);
$paymentRequest->setValidUntil($validUntil);
$paymentRequest->setLocale($locale);
$paymentRequest->setDescription($description);
$paymentRequest->setMethodCountry($methodCountry);
$paymentRequest->setMethodKey($methodKey);
$paymentRequest->setPayer($payer);
$paymentRequest->setInformationRequest($informationRequest);
$paymentRequest->setCardDataRestriction($cardDataRestriction);
$paymentRequest->setAcceptUrl($acceptUrl);
$paymentRequest->setCancelUrl($cancelUrl);
$paymentRequest->setCallbackUrl($callbackUrl);
$paymentRequest->setAuthorizationUrl($authorizationUrl);
$paymentRequest->setAffiliateKey($affiliateKey);
$paymentRequest->setParameters($parameters);
$paymentRequest->setTokenStrategy($tokenStrategy);
$paymentRequest->setIssuedToken($issuedToken);
    
$result = $checkoutClient->createPaymentRequest($paymentRequest);
```
---

Cancel payment request


```php

$result = $checkoutClient->cancelPaymentRequest($id);
```
---

Payment request result filter


```php
use Paysera\Client\CheckoutClient\Entity as Entities;

$paymentRequestFilter = new Entities\PaymentRequestFilter();

$paymentRequestFilter->setBusinessId($businessId);
$paymentRequestFilter->setStatus($status);
$paymentRequestFilter->setMethodKey($methodKey);
    
$result = $checkoutClient->getPaymentRequests($paymentRequestFilter);
```
---

