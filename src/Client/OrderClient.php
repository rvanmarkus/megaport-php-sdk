<?php

namespace Megaport\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Megaport\Model\Order\Order;
use Megaport\Model\Order\Product\OrderableProduct;
use RuntimeException;

class OrderClient extends AbstractClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * OrderClient constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * @param OrderableProduct $orderableProduct
     *
     * @return Order
     * @throws GuzzleException
     * @throws RuntimeException
     */
    public function order(OrderableProduct $orderableProduct)
    {
        $uri = 'networkdesign/buy';
        $response = $this->client->request('POST', $uri, ['json' => [$this->serialize($orderableProduct, 'array')]]);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException($response->getBody()->getContents());
        }

        /** @var Order $order */
        $order = $this->renderResponse($response, Order::class);

        return $order;
    }

    /**
     * @param OrderableProduct $orderableProduct
     *
     * @return bool
     * @throws GuzzleException
     * @throws RuntimeException
     */
    public function validate(OrderableProduct $orderableProduct): bool
    {
        $uri = 'networkdesign/validate';
        $response = $this->client->request('POST', $uri, ['json' => [$this->serialize($orderableProduct, 'array')]]);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException($response->getBody()->getContents());

        }
        /** @var \stdClass $contents */
        $contents = json_decode($response->getBody()->getContents(), false);

        if ($contents->message !== 'Validation passed') {
            throw new RuntimeException($contents->message);
        }

        return true;
    }
}