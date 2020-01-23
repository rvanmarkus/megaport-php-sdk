<?php

namespace Megaport\Client\Tests;

use Exception;
use Megaport\Client\MegaportClient;
use Megaport\Exception\MegaportException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MegaportClientTest extends TestCase
{

    public function testAuth()
    {
        /** @var MockObject $clientMock */
        $clientMock = $this->getMockBuilder(MegaportClient::class)->onlyMethods(['doLogin'])->disableOriginalConstructor()->getMock();

        $clientMock->method('doLogin')
            ->willThrowException(new Exception);


        $this->expectException(MegaportException::class);
        $this->expectExceptionCode(MegaportException::CODE_OTHER);
        
        /** @var MegaportClient $clientMock */
        $clientMock->auth('a', 'b');
    }
}
