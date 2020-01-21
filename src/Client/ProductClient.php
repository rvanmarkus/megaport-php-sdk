<?php

namespace Megaport\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Megaport\Model\Product\Product;
use RuntimeException;

class ProductClient extends AbstractClient
{
    /**
     * ProductClient constructor.
     *
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * @return Product[]
     *
     * @throws GuzzleException
     * @throws \RuntimeException
     */
    public function getList(): array
    {
        $response = $this->client->request('GET', 'products');
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException($response->getBody()->getContents());
        }

        /** @var Product[] $renderedResponse */
        $renderedResponse = $this->renderResponse($response, 'array<' . Product::class . '>');

        return $renderedResponse;
    }

    /**
     * @param string $uuid
     *
     * @return \Megaport\Model\Product\Product
     * @throws \RuntimeException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $uuid)
    {
        $uri = 'product/' . $uuid;
        $response = $this->client->request('GET', $uri);

        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException($response->getBody()->getContents());
        }

        /** @var Product $renderedResponse */
        $renderedResponse = $this->renderResponse($response, Product::class);

        return $renderedResponse;
    }
}