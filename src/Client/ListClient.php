<?php

namespace Megaport\Client;

use GuzzleHttp\Client;
use Megaport\Model\Order\Location;
use Megaport\Model\Product\IX;
use Megaport\Model\Product\PartnerMegaport;

class ListClient extends AbstractClient
{
    /**
     * ListClient constructor.
     *
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * @return Location[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLocations(): array
    {
        $response = $this->client->request('GET', 'locations');
        /** @var Location[] $renderedResponse */
        $renderedResponse = $this->renderResponse($response, 'array<' . Location::class . '>');

        return $renderedResponse;
    }

    /**
     * @return PartnerMegaport[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPartnerMegaports(): array
    {
        $response = $this->client->request('GET', 'dropdowns/partner/megaports');
        /** @var PartnerMegaport[] $renderedResponse */
        $renderedResponse = $this->renderResponse($response, 'array<' . PartnerMegaport::class . '>');

        return $renderedResponse;
    }

    /**
     * @param int $locationId
     *
     * @return IX[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getInternetExchanges(int $locationId): array
    {
        $url = 'product/ix/types';
        if ($locationId !== null) {
            $url .= '?locationId=' . $locationId;
        }

        $res = $this->client->request('GET', $url);
        /** @var IX[] $renderedResponse */
        $renderedResponse = $this->renderResponse($res, 'array<' . IX::class . '>');

        return $renderedResponse;
    }
}