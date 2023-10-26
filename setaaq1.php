<!DOCTYPE html>
<html>
<head>
  <title>Spring High Temperatures</title>
</head>
<body>
  <h1>Spring High Temperatures</h1>

  <?php

    // Create an array of 30 high temperatures, approximating the weather for a spring month.
    $high_temps = [
      65, 68, 71, 74, 77,
      80, 83, 86, 89, 92,
      95, 98, 101, 104, 107,
      110, 113, 116, 119, 122,
      125, 128, 131, 134, 137,
      140, 143, 146, 149, 152
    ];

    // Find the average high temperature.
    $average_high_temp = array_sum($high_temps) / count($high_temps);

    // Find the five warmest high temperatures.
    $warmest_high_temps = array_slice($high_temps, -5);

    // Find the five coolest high temperatures.
    $coolest_high_temps = array_slice($high_temps, 0, 5);

    // Display the results.
    echo "<p>The average high temperature is " . round($average_high_temp) . "&deg; F.</p>";

    echo "<p>The five warmest high temperatures are: ";
    foreach ($warmest_high_temps as $temp) {
      echo $temp . "&deg; F, ";
    }
    echo "</p>";

    echo "<p>The five coolest high temperatures are: ";
    foreach ($coolest_high_temps as $temp) {
      echo $temp . "&deg; F, ";
    }
    echo "</p>";

  ?>
</body>
</html>
