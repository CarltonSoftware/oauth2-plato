<?php

namespace League\OAuth2\Client\Test\Provider;

use PHPUnit\Framework\TestCase;

class Tabs2Test extends TestCase
{
    public function testUrls()
    {
        $provider = new \League\OAuth2\Client\Provider\Tabs2(
            [
                'apiHost'      => 'https://mockl.api.tabs-software.co.uk',
                'clientId'     => 'mock_client_id',
                'clientSecret' => 'mock_secret',
                'redirectUri'  => 'none',
            ]
        );

        $this->assertEquals('https://mockl.api.tabs-software.co.uk', $provider->getBasePlatoUrl());
        $this->assertEquals('https://mockl.api.tabs-software.co.uk/oauth/v2/auth', $provider->getBaseAuthorizationUrl());
        $this->assertEquals('https://mockl.api.tabs-software.co.uk/oauth/v2/token', $provider->getBaseAccessTokenUrl([]));
    }
}
