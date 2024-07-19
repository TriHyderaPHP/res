<?php
namespace Trihydera\Res\Helpers;

/**
 * Class JsonHelpers
 * Helper class for handling JSON responses.
 */
class JsonHelpers {
    /**
     * Set the headers for JSON response.
     */
    public function setHeaders() {
        header('Content-Type: application/json');
    }

    /**
     * Convert an array to JSON and exit.
     *
     * @param array $arr The array to be converted to JSON.
     */
    public function toJson($data) {
        exit(json_encode($data));
    }
}
?>
