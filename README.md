# Res Package

The `JsonResponse` class is responsible for handling JSON responses for success and error scenarios.

## Constructor

### `__construct()`

- Description: Initializes the `JsonResponse` class.
- Parameters: None

## Methods

### `success($data)`

- Description: Sends a success JSON response.
- Parameters:
  - `$data` (array): The data to include in the response.

### `error($message, $status = '200')`

- Description: Sends an error JSON response.
- Parameters:
  - `$message` (string): The error message to include in the response.
  - `$status` (string, default: '200'): The HTTP status code for the response.

### `useError($id, $value = '')`

- Description: Uses a predefined error message based on the provided ID.
- Parameters:
  - `$id` (string): The ID of the predefined error message.
  - `$value` (string, default: ''): The value to replace in the error message.

## Example Usage

Assuming you have an instance of the `JsonResponse` class and the `Errors` class:

```php
use Trihydera\Res\JsonResponse;

// Create an instance of JsonResponse
$jsonResponse = new JsonResponse();

// Example usage of the useError method
$jsonResponse->useError('NotFound');
```
