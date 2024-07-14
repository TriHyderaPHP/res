<?php
namespace App\Res\Helpers;

/**
 * Class XmlHelpers
 * Helper class for handling XML responses.
 */
class XmlHelpers {
    /**
     * Set the headers for XML response.
     */
    public function setHeaders() {
        header('Content-Type: application/xml');
    }

    /**
     * Convert an array to XML and exit.
     *
     * @param array $data The array to be converted to XML.
     */
    public function toXml($data) {
        $xml = new \SimpleXMLElement('<response/>');
        $this->arrayToXml($data, $xml);
        exit($xml->asXML());
    }

    /**
     * Convert an array to XML recursively.
     *
     * @param array $data The array to be converted to XML.
     * @param \SimpleXMLElement $xml The XML element to append the data to.
     */
    private function arrayToXml($data, &$xml) {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (is_numeric($key)) {
                    $key = 'item'; // Change numeric keys to 'item'
                }
                $subnode = $xml->addChild($key);
                $this->arrayToXml($value, $subnode);
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }
    }
}
?>
