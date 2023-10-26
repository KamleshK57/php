<?php

// Function to find the length of a string without using built-in functions
function findStringLength($string) {
  $length = 0;
  while (isset($string[$length])) {
  $length++;
  }
  return $length;
}

// Function to count the total number of vowels in a string
function countVowels($string) {
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  $count = 0;
  $string = strtolower($string);
  for ($i = 0; $i < strlen($string); $i++) {
  if (in_array($string[$i], $vowels)) {
  $count++;
  }
  }
  return $count;
}

// Function to convert a string to lowercase and then to title case
function convertToTitleCase($string) {
  $string = strtolower($string);
  $string = ucwords($string);
  return $string;
}

// Function to pad a string with "*" from left and right
function padString($string) {
  $string = "*" . $string . "*";
  return $string;
}

// Function to remove leading whitespaces from a string
function removeLeadingWhitespaces($string) {
  $string = ltrim($string);
  return $string;
}

// Example usage
$inputString = "Hello World";
echo "Length of the string: " . findStringLength($inputString) . "<br>";
echo "Total number of vowels: " . countVowels($inputString) . "<br>";
echo "String in title case: " . convertToTitleCase($inputString) . "<br>";
echo "Padded string: " . padString($inputString) . "<br>";
echo "String with leading whitespaces removed: " . removeLeadingWhitespaces($inputString) . "<br>";

?>