<?php

// The minimum value of $random
define('MIN', 0);

// The maximum value of $random
define('MAX', 10);

// Generate random number.
try
{
    // Get random integer between MIN and MAX.
    $random = random_int(MIN, MAX);
} catch(Exception $e)
{
    // Could not gather sufficient entropy. Fallback to rand().
    $random = rand(MIN, MAX);
}

/**
 * Get message based on $number value.
 * Logic:
 * 1. If number is 0, return 'Zero'
 * 2. If number is equal to MAX, return 'Highest'
 * 3. If number is exactly 50%, return 'Half'
 * 4. If number is over 50%, return 'Upper half'
 * 5. If number is below 50%, return 'Lower half'
 *
 * @param int $number Number that will be tested.
 *
 * @return string Message displayed to the user.
 */
function getMessage(int $number): string
{
    if($number >= MAX / 2)
    {
        $message = 'Upper half';
    }
    elseif($number <= MAX / 2 && $number !== 0)
    {
        $message = 'Lower half';
    }
    elseif($number === MAX / 2)
    {
        $message = 'Half';
    }
    elseif($number === MAX)
    {
        $message = 'Highest';
    }
    else
    {
        $message = 'Zero';
    }

    return sprintf("%s (number: %d)\n", $message, $number);
}

// Print out the message.
echo getMessage($random);
