<?php

namespace Megaport\Client;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use Megaport\Component\Environment;
use Megaport\Exception\MegaportException;
use Megaport\Model\Order\Location;
use Megaport\Model\Order\Order;
use Megaport\Model\Order\Product\Cloud\CloudProduct;
use Megaport\Model\Order\Product\OrderableProduct;
use Megaport\Model\Product\IX;
use Megaport\Model\Product\PartnerMegaport;
use Megaport\Model\Product\Product;
use Megaport\Model\Security\Login;
use UnexpectedValueException;

/**
 * Megaport client does the generic things to connect to the API.
 */
class MegaportClient
{
    /**
     * @var Login
     */
    private $login;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    private $env;

    /**
     * Constructs the client.
     *
     * @param string $env
     * @param bool $debug
     *
     * @throws InvalidArgumentException
     */
    public function __construct(string $env, bool $debug = false)
    {
        $this->env = $env;
        $this->setClient($debug);
    }

    /**
     * @param bool $debug
     *
     * @throws \InvalidArgumentException
     */
    private function setClient(bool $debug = false): void
    {
        $rootUri = Environment::getRootUri($this->env);
        $headers = ['Content-Type' => 'application/json'];

        if ($this->login !== null) {
            $headers['X-Auth-Token'] = $this->login->getToken();
        }

        $this->client = new Client(
            [
                'base_uri' => $rootUri,
                'headers' => $headers,
                'debug' => $debug,
            ]
        );
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @throws MegaportException
     */
    public function auth(string $username, string $password): void
    {
        try {
            // TODO: What if the login is already done? Should we do it again. Token expired?
            $this->doLogin($username, $password);
            $this->setClient();
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @throws GuzzleException
     */
    protected function doLogin(string $username, string $password): void
    {
        $loginClient = new LoginClient($this->client);
        $this->login = $loginClient->loginWithUserDetails($username, $password);
    }

    /**
     * @return Product[]|object[]
     * @throws MegaportException
     */
    public function getProducts(): ?array
    {
        try {
            return (new ProductClient($this->client))->getList();
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * @param string $uuid
     *
     * @return Product|object
     */
    public function getProduct(string $uuid): ?Product
    {
        try {
            return (new ProductClient($this->client))->get($uuid);
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * Get locations API call.
     *
     * @return Location[]
     * @throws MegaportException
     */
    public function getLocations(): array
    {
        try {
            return (new ListClient($this->client))->getLocations();
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * Get the public partner megaports via the API.
     *
     * @return PartnerMegaport[]
     * @throws MegaportException
     */
    public function getPartnerMegaports(): array
    {
        try {
            return (new ListClient($this->client))->getPartnerMegaports();
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * Get internet exchanges
     *
     * @param int $locationId The location ID to query.
     *
     * @return IX[]
     * @throws MegaportException
     */
    public function getInternetExchanges(int $locationId = null): array
    {
        try {
            return (new ListClient($this->client))->getInternetExchanges($locationId);
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * Validate the orderable product seperately. Is also done internally when ordered.
     *
     * @param OrderableProduct $orderableProduct
     * @return boolean
     * @throws MegaportException in case of any errors
     */
    public function validateOrder(OrderableProduct $orderableProduct): bool 
    {
        $orderClient = new OrderClient($this->client);
        try {
            return $orderClient->validate($orderableProduct);
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * @param OrderableProduct $orderableProduct
     *
     * @return \Megaport\Model\Order\Order
     * @throws Exception
     * @throws MegaportException
     */
    public function order(OrderableProduct $orderableProduct): ?Order
    {
        $orderClient = new OrderClient($this->client);

        try {
            if (!$orderClient->validate($orderableProduct)) {
                throw new MegaportException(MegaportException::CODE_MEGAPORT_ORDER_VALIDATION_FAILED,
                    'Order not valid according to megaport');
            }

            return $orderClient->order($orderableProduct);
        } catch (GuzzleException | Exception $e) {
            throw new MegaportException(999, $e->getMessage(), $e);
        }
    }

    /**
     * @param string $cloudtype
     * @param string $serviceKey
     *
     * @return \Megaport\Model\Product\Cloud\AzureLookup|object
     * @throws GuzzleException
     * @throws \UnexpectedValueException
     */
    public function lookup(string $cloudtype, string $serviceKey)
    {
        $client = null;
        switch (strtoupper($cloudtype)) {
            case CloudProduct::CLOUD_TYPE_AZURE:
                $client = new AzureLookupClient($this->client);
                break;
            default:
                throw new UnexpectedValueException('Request type (' . $cloudtype . ') is not supported');
        }

        return $client->lookup($serviceKey);
    }
}