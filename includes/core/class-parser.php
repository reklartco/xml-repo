<?php

class XMLParser {
    public function parse($xmlString) {
        try {
            $xml = new SimpleXMLElement($xmlString);
            return $xml;
        } catch (Exception $e) {
            return 'Error parsing XML: ' . $e->getMessage();
        }
    }
}

?>