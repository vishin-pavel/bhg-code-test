<?php

/**
 * Function that takes an array of names and returns an array where only the first letter of each name is capitalized.
 *
 * @param array $arrayToHandle
 * @return array
 */
function capMe(array $arrayToHandle): array
{
    return array_map(
        fn($item) => ucfirst(strtolower($item)),
        $arrayToHandle
    );
}

/**
 * Function that accepts a string and returns true if it's in the format of a proper phone number and false if it's not
 *
 * @param string $phoneNumber
 * @return bool
 */
function isValidPhoneNumber(string $phoneNumber): bool{
    return !!preg_match('#\(\d{3}\) \d{3}-\d{4}#', $phoneNumber);
}
