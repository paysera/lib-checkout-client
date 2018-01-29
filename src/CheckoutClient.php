<?php

namespace Paysera\Client\CheckoutClient;

use Paysera\Client\CheckoutClient\Entity as Entities;
use Fig\Http\Message\RequestMethodInterface;
use Paysera\Component\RestClientCommon\Client\ApiClient;

class CheckoutClient
{
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Update payment request customer email.
     * PUT /payment-requests/{id}/set-email
     *
     * @param string $id
     * @param Entities\Email $email
     * @return Entities\PaymentRequest
     */
    public function updatePaymentRequestSetEmail($id, Entities\Email $email)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('payment-requests/%s/set-email', urlencode($id)),
            $email
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequest($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /payment-requests/{id}/methods
     *
     * @param string $id
     * @param Entities\PaymentRequestMethodFilter $paymentRequestMethodFilter
     * @return Entities\PaymentRequestMethodsResult
     */
    public function getPaymentRequestMethods($id, Entities\PaymentRequestMethodFilter $paymentRequestMethodFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('payment-requests/%s/methods', urlencode($id)),
            $paymentRequestMethodFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequestMethodsResult($data, 'items');
    }

    /**
     * Start payment and return flow data
     * PUT /payment-requests/{id}/start-payment
     *
     * @param string $id
     * @param Entities\PaymentMethod $paymentMethod
     * @return Entities\StartPaymentResponse
     */
    public function startPaymentRequestPayment($id, Entities\PaymentMethod $paymentMethod)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('payment-requests/%s/start-payment', urlencode($id)),
            $paymentMethod
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\StartPaymentResponse($data);
    }

    /**
     * Authorize PaymentRequest with already issued Token
     * PUT /payment-requests/{id}/authorize
     *
     * @param string $id
     * @param Entities\AuthorizationParameters $authorizationParameters
     * @return Entities\PaymentRequest
     */
    public function authorizePaymentRequest($id, Entities\AuthorizationParameters $authorizationParameters)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('payment-requests/%s/authorize', urlencode($id)),
            $authorizationParameters
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequest($data);
    }

    /**
     * Capture authorized PaymentRequest
     * PUT /payment-requests/{id}/capture
     *
     * @param string $id
     * @return Entities\PaymentRequest
     */
    public function capturePaymentRequest($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('payment-requests/%s/capture', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequest($data);
    }

    /**
     * Get payment request.
     * GET /payment-requests/{id}
     *
     * @param string $id
     * @return Entities\PaymentRequest
     */
    public function getPaymentRequest($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('payment-requests/%s', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequest($data);
    }

    /**
     * Create payment request.
     * POST /payment-requests
     *
     * @param Entities\PaymentRequest $paymentRequest
     * @return Entities\PaymentRequest
     */
    public function createPaymentRequest(Entities\PaymentRequest $paymentRequest)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'payment-requests',
            $paymentRequest
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequest($data);
    }
    /**
     * Standard SQL-style Result filtering
     * GET /payment-requests
     *
     * @param Entities\PaymentRequestFilter $paymentRequestFilter
     * @return Entities\PaymentRequestsResult
     */
    public function getPaymentRequests(Entities\PaymentRequestFilter $paymentRequestFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'payment-requests',
            $paymentRequestFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequestsResult($data, 'items');
    }

    /**
     * Set status that event was read/processed successfully.
     * PUT /events/{id}/read
     *
     * @param string $id
     * @return Entities\PaymentRequestEvent
     */
    public function readEvent($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('events/%s/read', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequestEvent($data);
    }

    /**
     * Get event.
     * GET /events/{id}
     *
     * @param string $id
     * @return Entities\PaymentRequestEvent
     */
    public function getEvent($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('events/%s', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequestEvent($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /events
     *
     * @param Entities\PaymentRequestEventFilter $paymentRequestEventFilter
     * @return Entities\PaymentRequestEventsResult
     */
    public function getEvents(Entities\PaymentRequestEventFilter $paymentRequestEventFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'events',
            $paymentRequestEventFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PaymentRequestEventsResult($data, 'items');
    }

}
