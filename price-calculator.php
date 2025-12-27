<?php

/**
 * Project: Pilates Studio Subscription Calculator
 * Description: A CLI tool to calculate membership costs using PHP 8 match expression.
 * Features: 
 * - Handles STDIN for user interaction.
 * - Implements 'match' for strict value mapping.
 * - Includes exception handling for invalid inputs.
 * - Ternary Logic for senior discounts.
 * * Usage: php price-calculator.php
 * Author: Panos Pagiatis
 */

echo "--- Pilates Studio Monthly Subscription Calculator ---\n";
echo "Select a plan: (1) Basic, (2) Intensive, (3) Reformer: ";

// STDIN: Getting user input
$planInput = trim(fgets(STDIN));

echo "Please, enter your age (20% discount for those over 65): ";
$ageInput = (int)trim(fgets(STDIN));

// MATCH EXPRESSION: Assign Price Depending on Plan Selection
try {
  $basePrice = match ($planInput) {
    '1' => 50,
    '2' => 90,
    '3' => 150,
    default => throw new Exception("Invalid plan selected.")
  };

  // Calculate Senior Discount
  $finalPrice = ($ageInput >= 65) ? $basePrice * 0.8 : $basePrice;

  echo "\n Your monthly substription is: $" . number_format($finalPrice, 2) . "\n";
} catch (Exception $e) {
  echo "\nError: " . $e->getMessage() . "\n";
}
