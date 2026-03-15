<?php

class Security {

    // XXE Protection
    public static function protectAgainstXXE($xml) {
        libxml_disable_entity_loader(true);
        // Additional XXE protection logic can be added here.
        return simplexml_load_string($xml);
    }

    // File Validation
    public static function validateFile($filePath) {
        if (file_exists($filePath) && is_readable($filePath)) {
            return true;
        }
        return false;
    }

    // Capability Checks
    public static function userHasCapability($user, $capability) {
        // Logic to check if the user has the required capability.
        // Placeholder for actual capability-checking logic.
        return in_array($capability, $user->capabilities);
    }
}

?>