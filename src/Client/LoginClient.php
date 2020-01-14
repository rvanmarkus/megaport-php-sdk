<?php

namespace Megaport\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Megaport\Model\Security\Login;

/**
 * LoginClient to do security calls to the Megaport API.
 */
class LoginClient extends AbstractClient
{
    /**
     * LoginClient constructor.
     *
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string|null $oneTimePassword
     *
     * @return \Megaport\Model\Security\Login
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \RuntimeException
     */
    public function loginWithUserDetails(
        string $username,
        string $password,
        string $oneTimePassword = null
    ): Login
    {
        $loginUri = 'login?username=' . $username . '&password=' . $password;
        if ($oneTimePassword !== null) {
            $loginUri .= '&oneTimePassword=' . $oneTimePassword;
        }

        $res = $this->client->request('POST', $loginUri);
        if ($res->getStatusCode() !== 200) {
            throw new \RuntimeException('Error found in API call');
        }
        /** @var Login $renderedResponse */
        $renderedResponse = $this->renderResponse($res, Login::class);

        return $renderedResponse;
    }

    /**
     * @param string $token
     *
     * @return \Megaport\Model\Security\Login
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \RuntimeException
     */
    public function loginWithToken(string $token): Login
    {
        $loginUri = 'login?token=' . $token;
        $res = $this->client->request('POST', $loginUri);

        if ($res->getStatusCode() !== 200) {
            throw new \RuntimeException('Error found in API call');
        }

        /** @var Login $renderedResponse */
        $renderedResponse = $this->renderResponse($res, Login::class);

        return $renderedResponse;
    }

    /**
     * @return void
     * @throws GuzzleException
     */
    public function logout(): void
    {
        $this->client->request('GET', 'logout');
    }

    /**
     * @param string $oldPassword
     * @param string $newPassword
     *
     * @return void
     * @throws GuzzleException
     */
    public function changePassword(string $oldPassword, string $newPassword)
    {
        $this->client->request('POST', 'password/change?oldPassword=' . $oldPassword . '&newPassword=' . $newPassword);
    }
}