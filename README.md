# Intro

A helper for handling JSON and XML responses for success and error scenarios with presets of common errors to speed things up,

First made as an internal library for my API project as apart of the source but made separate to make more maintainable and use in other projects

# Usage

## Getting Started

Require this package, with [Composer](https://getcomposer.org).

```bash
composer require trihydera/res
```

Using and creating a response instance for `Json` use the `JsonResponse`

```php
use Trihydera\Res\JsonResponse;

// Create an instance of JsonResponse
$response = new JsonResponse();
```

And for `Xml`, just just use the `XmlResponse` instead

```php
use Trihydera\Res\XmlResponse;

// Create an instance of XmlResponse
$response = new XmlResponse();
```

## Example Success

Returning a `value` key in an `array` to say that the request was a success like `Its working`

```php
$response->success([
    'value' => 'Its working'
]);
```

## Example Error

Responding with an general error on request

```php
$response->error('Something went wrong', '200');
```

For using a preset error to make things quicker, and also using your own messsage like `API resource not found`

```php
// Example usage of the useError method
$response->useError('NotFound');

// Example usage of the useError method with your own message
$response->useError('NotFound', 'API resource not found');
```

### Error presets

- Parameter
- Method
- NotFound
- InternalError
- Authorization

