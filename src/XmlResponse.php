<?php
namespace TriHydera\Res;

/**
 * Class XmlResponse
 * Handles XML responses for success and error scenarios.
 */
class XmlResponse {
    /**
     * @var XmlHelpers
     */
    private $xml;

    /**
     * Xml constructor.
     */
    public function __construct() {
        $this->xml = new Helpers\XmlHelpers;
    }

    /**
     * Send a success XML response.
     *
     * @param array $data The data to include in the response.
     */
    public function success($data) {
        $this->xml->setHeaders();
        http_response_code('200');
        echo $this->xml->toXml(['type' => 'success', 'status' => '200', 'data' => $data]);
        exit();
    }

    /**
     * Send an error XML response.
     *
     * @param string $message The error message to include in the response.
     * @param string $status The HTTP status code for the response.
     */
    public function error($message, string $status = '200') {
        $this->xml->setHeaders();
        http_response_code($status);
        echo $this->xml->toXml(['type' => 'error', 'status' => $status, 'message' => $message]);
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
