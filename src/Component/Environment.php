<?php

namespace Megaport\Component;

use InvalidArgumentException;

/**
 * Class Environment
 * Author: Geoffrey Hofstede <ghofstede@unet.nl>
 * Date: 24/10/2019
 *
 * @package Megaport\Component
 */
final class Environment
{
    public const ENV_PROD = 'prod';
    public const ENV_STAGING = 'staging';

    /**
     * @param string $env
     *
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function getRootUri(string $env): string
    {
        if (self::validateEnvironment($env) === false) {
            throw new InvalidArgumentException('Invalid environment');
        }

        switch ($env) {
            case self::ENV_STAGING:
                return 'https://api-staging.megaport.com/v2/';
            case self::ENV_PROD:
                return 'https://api.megaport.com/v2/';
            default:
                throw new InvalidArgumentException('Unknown environment');
        }
    }

    /**
     * @param string $env
     *
     * @return bool
     */
    public static function validateEnvironment(string $env): bool
    {
        return in_array($env, [self::ENV_STAGING, self::ENV_PROD], true);
    }
}