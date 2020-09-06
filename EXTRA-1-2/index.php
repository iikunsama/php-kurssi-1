<?php

/**
 * Generate random message string.
 * @return string
 */
function generateMessage(): string
{
    $wordsMinCount = 5;
    $wordsMaxCount = 15;
    $wordMinLength = 2;
    $wordMaxLength = 10;
    $characters    = range('a', 'z'); // Generate array with values from a to z.
    $ending        = ['.', '!', '?', ''];
    $message       = [];

    // Loop through random number of words.
    for($i = 0; $i < rand($wordsMinCount, $wordsMaxCount); $i++)
    {
        $word = '';

        // Loop through random number of characters in word.
        for($j = 0; $j < rand($wordMinLength, $wordMaxLength); $j++)
        {
            // Append random character to $word string.
            $word .= $characters[rand(0, (count($characters) - 1))];
        }

        // Add word to message.
        $message[] = $word;
    }

    /*
     * 1. Convert $message to string and use space as glue of values.
     * 2. Convert first character of message to uppercase with ucfirst().
     * 3. Append random ending character.
     */
    return sprintf(
        '%s%s',
        ucfirst(
            implode(' ', $message)
        ),
        $ending[rand(0, (count($ending) - 1))]
    );
}

