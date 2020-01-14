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
    public function get(): array
    {
        $response = $this->client->request('GET', 'products');
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException($response->getBody()->getContents());
        }

        /** @var Product[] $renderedResponse */
        $renderedResponse = $this->renderResponse($response, 'array<' . Product::class . '>');

        return $renderedResponse;
    }
}