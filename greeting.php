<?php

/**
 * Greets the user based on their input via CLI.
 * * This script demonstrates basic function definitions, type hinting,
 * and standard input handling in a CLI environment.
 */

/**
 * Generates a formatted greeting string.
 *
 * @param string $name The name of the person to greet.
 * @return string The complete greeting message.
 */
function getGreeting(string $name): string
{
  return "Hello $name!\n";
}

echo "Your name, please: ";
$name = trim(fgets(STDIN));

// Check for actual content to avoid greeting an empty string
if (strlen($name) > 0) {
  echo getGreeting($name);
} else {
  echo "Hello, little stranger!\n";
}
