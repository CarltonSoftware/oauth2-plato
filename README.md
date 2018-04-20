# oauth2-tabs2
tabs 2 OAuth 2.0 Client Provider for The PHP League OAuth2-Client


## Install

Via Composer

``` bash
$ composer require CarltonSoftware/oauth2-tabs2
```


## Usage

Usage is the same as The League's OAuth client, using `\League\OAuth2\Client\Provider\Tabs2` as the provider.

``` php
$provider = new League\OAuth2\Client\Provider\Tabs2([
    'apiHost'   => 'https://mockl.test.api.tabs-software.co.uk',
    'clientId'     => '{tabs2-client-id}',
    'clientSecret' => '{tabs2-client-secret}',
    'redirectUri'  => 'https://example.com/callback-url', // Only required if using the authorisation code grant type
]);
