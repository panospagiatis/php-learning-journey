<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;
$isCorrect = false; // A "flag" variable to track if the user won

// The loop focuses only on the act of guessing
while ($attempts < $maxAttempts) {
  echo "Guess the password: ";
  $guess = trim(fgets(STDIN));
  $attempts++;

  // Check if user guess equals secret password
  if ($guess === $secret) {
    $isCorrect = true; // Mark as successful
    break; // Exit the loop immediately
  }

  // Only show "Wrong" if they actually have more tries left
  if ($attempts < $maxAttempts) {
    echo "Wrong! Please, try again. Attempts Left: " . ($maxAttempts - $attempts) . "\n\n";
  }
}

// Final result logic is kept outside the loop for clarity
if ($isCorrect) {
  echo "Correct! You've unlocked the treasure!\n";
} else {
  echo "Out of attempts! The treasure remains locked.\n";
}
