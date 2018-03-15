<?php

namespace League\OAuth2\Client\Test\Provider;

use PHPUnit\Framework\TestCase;

class PlatoTest extends TestCase {

    protected $provider;

    public function setUp()
    {
    }

    /**
     * @dataProvider baseUrlsProvider
     */
    public function testBaseUrls($agencyCode, $mode, $expectedUrl)
    {
        $provider = new \League\OAuth2\Client\Provider\Plato(
            [
                'agencyCode'   => $agencyCode,
                'mode'         => $mode,
                'clientId'     => 'mock_client_id',
                'clientSecret' => 'mock_secret',
                'redirectUri'  => 'none',
            ]
        );

        $this->assertEquals($expectedUrl, $provider->getBasePlatoUrl());
    }



    public function baseUrlsProvider()
    {
        return [
            [ 'mockl', 'test', 'https://mockl.test.api.tabs-software.co.uk' ],
            [ 'mockl', 'live', 'https://mockl.api.tabs-software.co.uk' ],
            [ 'fooba', 'test', 'https://fooba.test.api.tabs-software.co.uk' ]
        ];
    }

}
