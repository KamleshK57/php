<!DOCTYPE html>
<html>
<head>
  <title>PHP String Comparison</title>
</head>
<body>
  <h1>PHP String Comparison</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Enter the large string: <input type="text" name="large_string" /><br />
    Enter the small string: <input type="text" name="small_string" /><br />
    Number of characters to compare: <input type="number" name="n_characters" /><br />
    <input type="submit" value="Submit" />
  </form>

  <?php
    // Get the two strings and the number of characters to compare from the form.
    $large_string = $_POST['large_string'];
    $small_string = $_POST['small_string'];
    $n_characters = $_POST['n_characters'];

    // Convert both strings to lowercase so that the comparison is not case-sensitive.
    $large_string = strtolower($large_string);
    $small_string = strtolower($small_string);

    // Find whether the small string appears at the start of the large string.
    if (strpos($large_string, $small_string) === 0) {
      echo "<p>The small string appears at the start of the large string.</p>";
    } else {
      echo "<p>The small string does not appear at the start of the large string.</p>";
    }

    // Find the position of the small string in the big string.
    $position = strpos($large_string, $small_string);

    // If the small string is found, print its position. Otherwise, print a message saying that it is not found.
    if ($position !== false) {
      echo "<p>The small string is found at position $position in the large string.</p>";
    } else {
      echo "<p>The small string is not found in the large string.</p>";
    }

    // Compare the first n characters of the two strings.
    $result = strncmp($large_string, $small_string, $n_characters);

    // If the result is 0, the two strings are equal. If the result is less than 0, the large string is less than the small string. If the result is greater than 0, the large string is greater than the small string.
    if ($result === 0) {
      echo "<p>The first $n_characters of both strings are equal.</p>";
    } elseif ($result < 0) {
      echo "<p>The first $n_characters of the large string are less than the first $n_characters of the small string.</p>";
    } else {
      echo "<p>The first $n_characters of the large string are greater than the first $n_characters of the small string.</p>";
    }
  ?>
</body>
</html>
