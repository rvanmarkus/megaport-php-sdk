<?php

namespace Tests;

use DG\BypassFinals;
use PHPUnit\Framework\TestCase;

/**
 * Class FinalBypassTestCase
 * Author: Geoffrey Hofstede <ghofstede@unet.nl>
 * Date: 01/11/2019
 *
 * @package Tests
 */
abstract class BypassFinalClassDataProviderTestCase extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        BypassFinals::enable();
    }
}