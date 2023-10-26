<!DOCTYPE html>
<html>
<head>
  <title>PHP Greeting Message Generator</title>
</head>
<body>
  <h1>PHP Greeting Message Generator</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Enter the student's name: <input type="text" name="student_name" /><br />
    Enter the college's name: <input type="text" name="college_name" /><br />
    Enter a greeting message: <input type="text" name="greeting_message" /><br />
    <input type="submit" value="Submit" />
  </form>

  <?php

    function generate_greeting_message($student_name, $college_name, $greeting_message) {
      // If the student's name is empty, use a generic greeting.
      if ($student_name === '') {
        $greeting_message = "Hello!";
      }

      // If the college's name is empty, use the student's name in the greeting.
      if ($college_name === '') {
        $college_name = $student_name;
      }

      // If the greeting message is empty, use a default greeting.
      if ($greeting_message === '') {
        $greeting_message = "Welcome to [college name]! We are excited to have you here.";
      }

      // Return the generated greeting message.
      return $greeting_message;
    }

    // Get the student's name, college's name, and greeting message from the form.
    $student_name = $_POST['student_name'];
    $college_name = $_POST['college_name'];
    $greeting_message = $_POST['greeting_message'];

    // Generate the greeting message.
    $greeting_message = generate_greeting_message($student_name, $college_name, $greeting_message);

    // Print the greeting message.
    echo "<p>$greeting_message</p>";

  ?>
</body>
</html>
