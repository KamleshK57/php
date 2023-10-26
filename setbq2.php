<!DOCTYPE html>
<html>
<head>
  <title>PHP String Splitting and Replacing</title>
</head>
<body>
  <h1>PHP String Splitting and Replacing</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Enter the string: <input type="text" name="string" /><br />
    Select a separator:
    <select name="separator">
      <option value="#">#</option>
      <option value="|">|</option>
      <option value="%">%</option>
      <option value="@">@</option>
      <option value="!">!</option>
      <option value=",">,</option>
    </select>
    <input type="submit" value="Submit" />
  </form>

  <?php

    // Check if the form has been submitted.
    if (isset($_POST['submit'])) {

      // Get the string and the separator from the form.
      $string = $_POST['string'];
      $separator = $_POST['separator'];

      // Split the string into separate words using the given separator.
      $words = explode($separator, $string);

      // Replace all the occurrences of separator in the given string with some other separator.
      $new_string = str_replace($separator, '-', $string);

      // Find the last word in the given string.
      $last_word = strrchr($string, $separator);

      // Print the results.
      echo "<p>Split string: </p>";
      echo "<ul>";
      foreach ($words as $word) {
        echo "<li>$word</li>";
      }
      echo "</ul>";

      echo "<p>Replaced string: $new_string</p>";

      echo "<p>Last word in the string: $last_word</p>";
    }
  ?>
</body>
</html>
