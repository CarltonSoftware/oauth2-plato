# oauth2-plato
Plato OAuth 2.0 Client Provider for The PHP League OAuth2-Client


## Install

Via Composer

``` bash
$ composer require CarltonSoftware/oauth2-plato
```


## Usage

Usage is the same as The League's OAuth client, using `\League\OAuth2\Client\Provider\Plato` as the provider.

``` php
$provider = new League\OAuth2\Client\Provider\Plato([
    'agencyCode'   => 'toccl',
    'mode'         => 'test' // live or test
    'clientId'     => '{plato-client-id}',
    'clientSecret' => '{plato-client-secret}',
    'redirectUri'  => 'https://example.com/callback-url',
]);
