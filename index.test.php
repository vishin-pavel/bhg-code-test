<?php
include_once 'index.php';

/**
 * capMe() tests
 */
assert(
    capMe(["mavis", "senaida", "letty"]) === ["Mavis", "Senaida", "Letty"],
    'capMe() should  return first array with capitalized letter of each array item'
);
assert(
    capMe(["samuel", "MABELLE", "letitia", "meridith"]) === ["Samuel", "Mabelle", "Letitia", "Meridith"],
    'capMe() should  return first array with capitalized letter of each array item'
);
assert(
    capMe(["Slyvia", "Kristal", "Sharilyn", "Calista"]) === ["Slyvia", "Kristal", "Sharilyn", "Calista"],
    'capMe() should  return first array with capitalized letter of each array item'
);

/**
 * isValidPhoneNumber tests
 */
assert(
    isValidPhoneNumber("(123) 456-7890") === true,
    'isValidPhoneNumber() should validate phone number'
);
assert(
    isValidPhoneNumber("1111)555 2345") === false,
    'isValidPhoneNumber() should validate phone number'
);
assert(
    isValidPhoneNumber("098) 123 4567") === false,
    'isValidPhoneNumber() should validate phone number'
);

echo "All tests passed.\r\n";
