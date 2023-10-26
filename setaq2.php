<!DOCTYPE html>
<html>
<head>
  <title>Stack and Queue Operations</title>
</head>
<body>
  <h1>Stack and Queue Operations</h1>

  <?php

    // Initialize the stack and queue.
    $stack = [];
    $queue = [];

    // Display the menu.
    echo "1. Insert an element in stack" . PHP_EOL;
    echo "2. Delete an element from stack" . PHP_EOL;
    echo "3. Display the contents of stack" . PHP_EOL;
    echo "4. Insert an element in queue" . PHP_EOL;
    echo "5. Delete an element from queue" . PHP_EOL;
    echo "6. Display the contents of queue" . PHP_EOL;
    echo "7. Exit" . PHP_EOL;

    // Get the user's choice.
    $choice = readline("Enter your choice: ");

    // Perform the selected operation.
    switch ($choice) {
      case 1:
        $element = readline("Enter the element to insert: ");
        function insert_into_stack($stack, $element)
	 {
 	 array_push($stack, $element);
	}

        break;
      case 2:
        delete_from_stack($stack);
        break;
      case 3:
        display_stack($stack);
        break;
      case 4:
        $element = readline("Enter the element to insert: ");
        insert_into_queue($queue, $element);
        break;
      case 5:
        delete_from_queue($queue);
        break;
      case 6:
        display_queue($queue);
        break;
      case 7:
        exit();
        break;
      default:
        echo "Invalid choice." . PHP_EOL;
    }

  ?>
</body>
</html>
