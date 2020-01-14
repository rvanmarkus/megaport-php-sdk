<?php

namespace Tests\Hooks;

use DG\BypassFinals;
use PHPUnit\Runner\BeforeTestHook;

/**
 * Class BypassFinal
 * Author: Geoffrey Hofstede <ghofstede@unet.nl>
 * Date: 31/10/2019
 *
 * @package Megaport\Hooks
 */
final class BypassFinal implements BeforeTestHook
{
    public function executeBeforeTest(string $test): void
    {
        BypassFinals::enable();
    }
}