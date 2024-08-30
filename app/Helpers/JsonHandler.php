<?php

namespace App\Helpers; 

use Illuminate\Support\Facades\Log;

class JsonHandler
{
    /**
     * Process and handle different JSON formats for storage.
     *
     * @param mixed $input The input data that might be JSON or another format.
     * @return string|null The processed JSON string, or null if processing fails.
     */
    public static function handleJsonInput($input)
    {
        // If the input is already an array, encode it to JSON
        if (is_array($input)) {
            return json_encode($input);
        }

        // If the input is a valid JSON string, return it as-is
        if (is_string($input) && self::isValidJson($input)) {
            return $input;
        }

        // Handle other types of input
        if (is_string($input)) {
            // Try to decode the string first, and then re-encode to ensure it's valid JSON
            $decoded = json_decode($input, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                return json_encode($decoded); // Re-encode to clean JSON format
            } else {
                Log::error('Invalid JSON input: ' . json_last_error_msg());
                return null; // Return null or handle error as needed
            }
        }

        // For other data types, log an error and return null
        Log::error('Unsupported JSON input type: ' . gettype($input));
        return null;
    }

    /**
     * Check if a string is a valid JSON.
     *
     * @param string $string The string to check.
     * @return bool True if valid JSON, false otherwise.
     */
    private static function isValidJson($string)
    {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}
