
# Getting Started with taam ai user

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "taam-soft-llc/taam-ai-sdk:1.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "taam-soft-llc/taam-ai-sdk": "1.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/taam-soft-llc/taam-ai-sdk#1.0.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `accessToken` | `string` | The OAuth 2.0 Access Token to use for API requests. |

The API client can be initialized as follows:

```php
$client = TaamAiUserClientBuilder::init()
    ->accessToken('AccessToken')
    ->environment('production')
    ->build();
```

## Authorization

This API uses `OAuth 2 Bearer token`.

## List of APIs

* [Workbookandfolders](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/workbookandfolders.md)
* [Custim Templates](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/custim-templates.md)
* [Prompttemplate](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/prompttemplate.md)
* [Chatwithpdf](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/chatwithpdf.md)
* [Addon Features](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/addon-features.md)
* [Templates](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/templates.md)
* [Auth](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/auth.md)
* [Product](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/product.md)
* [Misc](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/controllers/misc.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/utility-classes.md)
* [ApiException](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/taamsoft/taam-ai-php-sdk/tree/1.0.0/doc/http-response.md)

