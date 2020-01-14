<?php

namespace Megaport\Model\Security;

use JMS\Serializer\Annotation\Type;

/**
 * Login class containing user information and the token.
 */
class Login
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $username;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $firstName;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $lastName;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $token;

    /**
     * Constructor.
     *
     * @param string $username The username.
     * @param string $firstName The first name of the user.
     * @param string $lastName The last name of the user.
     * @param string $token The authentication token.
     */
    public function __construct(string $username, string $firstName, string $lastName, string $token)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
