<?php

namespace Megaport\Client;

use GuzzleHttp\Exception\GuzzleException;
use Megaport\Model\Product\Cloud\AzureLookup;
use GuzzleHttp\Client;

class AzureLookupClient extends AbstractClient
{
    /**
     * AzureLookupClient constructor.
     *
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * @param string $serviceKey
     *
     * @return AzureLookup
     * @throws GuzzleException
     *
     */
    public function lookup(string $serviceKey): AzureLookup
    {
        $response = $this->client->request('GET', 'secure/azure/' . $serviceKey);

        /** @var AzureLookup $result */
        $result = $this->renderResponse($response, AzureLookup::class);

        foreach ($result->getMegaports() as $megaport) {
            $megaport->setServiceKey($result->getServiceKey());
        }

        return $result;
    }
}