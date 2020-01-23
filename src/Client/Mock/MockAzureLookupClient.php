<?php

namespace Megaport\Client\Mock;

use GuzzleHttp\Psr7\Response;
use Megaport\Client\AbstractClient;
use Megaport\Model\Product\Cloud\AzureLookup;

class MockAzureLookupClient extends AbstractClient {
    public function __construct($client)
    {
        parent::__construct($client);
    }
    public function lookup(string $serviceKey): AzureLookup
    {
        // $response = $this->client->request('GET', 'secure/azure/' . $serviceKey);

        /** @var AzureLookup $result */
        $result = $this->renderResponse(new Response(), AzureLookup::class);

        foreach ($result->getMegaports() as $megaport) {
            $megaport->setServiceKey($result->getServiceKey());
        }

        return $result;
    }

    public function renderResponse($response, $type) {
        $json = json_encode(json_decode('{
            "message": "Successful lookup",
            "data": {
              "bandwidth": 50,
              "megaports": [
                {
                  "port": 100,
                  "type": "primary",
                  "vxc": 200,
                  "productId": 100,
                  "productUid": "a4f54ebc-0fa2-492f-a713-1ed7d49dca1c",
                  "name": "Brisbane Primary",
                  "nServiceId": 1001,
                  "description": "Azure ExpressRoute at BNE",
                  "companyId": 100,
                  "companyUid": "f823af68-1f04-4d26-909a-7a76fa7f2d74",
                  "companyName": "Microsoft Australia",
                  "portSpeed": 10000,
                  "locationId": 3,
                  "state": "QLD",
                  "country": "Australia"
                },
                {
                  "port": 120,
                  "type": "secondary",
                  "vxc": null,
                  "productId": 120,
                  "productUid": "e269447e-5601-4575-9c23-32fe5a9f8605",
                  "name": "Brisbane Secondary",
                  "nServiceId": 1003,
                  "description": "Azure ExpressRoute at BNE B",
                  "companyId": 1475,
                  "companyUid": "f823af68-1f04-4d26-909a-7a76fa7f2d74",
                  "companyName": "Microsoft Australia",
                  "portSpeed": 10000,
                  "locationId": 3,
                  "state": "QLD",
                  "country": "Australia"
                }
              ],
              "peers": [],
              "resource_type": "Azure_connection",
              "service_key": "63dasd3c-f578-430d-b67a-0bdfgcfdfg152f",
              "vlan": 300
            }
          }', false)->data);

        return $this->serializer->deserialize($json, $type, 'json');
    }
}