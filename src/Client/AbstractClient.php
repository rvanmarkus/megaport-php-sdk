<?php

namespace Megaport\Client;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

class AbstractClient
{
    /**
     * @var Client
     */
    protected $client;
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    protected $serializer;

    /**
     * AbstractClient constructor.
     *
     * @param \GuzzleHttp\Client $client
     */
    protected function __construct(Client $client)
    {
        $this->client = $client;

        AnnotationRegistry::registerLoader('class_exists');

        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy());
        $this->serializer = $serializerBuilder->build();
    }

    /**
     * Serialize an object back to json format.
     *
     * @param object $obj Object to serialize.
     *
     * @param string $format
     *
     * @return string|array
     */
    public function serialize($obj, $format = 'json')
    {
        if ($format === 'array') {
            return $this->serializer->toArray($obj);
        }

        return $this->serializer->serialize($obj, $format);
    }

    /**
     * Return an object based on the response.
     *
     * @param ResponseInterface $response The response object from Guzzle to work with.
     * @param string $type The FQCN.
     *
     * @return object|object[]
     */
    protected function renderResponse(ResponseInterface $response, string $type)
    {
        $content = json_encode(json_decode($response->getBody()->getContents(), false)->data);

        return $this->serializer->deserialize($content, $type, 'json');
    }
}