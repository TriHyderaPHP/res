<?php
namespace Trihydera\Res;

/**
 * Handles JSON responses for success and error scenarios.
 */
class JsonResponse {
    /**
     * @var JsonHelpers
     */
    private $json;

    /**
     * Json constructor.
     */
    public function __construct() {
        $this->json = new Helpers\JsonHelpers;
    }

    /**
     * Send a success JSON response.
     *
     * @param array $data The data to include in the response.
     */
    public function success($data) {
        $this->json->setHeaders();
        http_response_code('200');
        echo $this->json->toJson(['type' => 'success', 'status' => '200', 'data' => $data]);
        exit();
    }

    /**
     * Send an error JSON response.
     *
     * @param string $message The error message to include in the response.
     * @param string $status The HTTP status code for the response.
     */
    public function error($message, string $status = '200') {
        $this->json->setHeaders();
        http_response_code($status);
        echo $this->json->toJson(['type' => 'error', 'status' => $status, 'message' => $message]);
        exit();
    }

    /**
     * Use a predefined error message based on the provided ID.
     *
     * @param string $id The ID of the predefined error message.
     * @param string $value The value to replace in the error message.
     */
    public function useError($id, $value = '') {
        $item = Errors::PRESETS[$id];
        $msg = isset($value) ? strtr($item[0], ['{0}' => $value]) : $item[0];
        $this->error($msg, $item[1]);
    }
}
?>
