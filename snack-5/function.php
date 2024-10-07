<?php
function isPalindrome($word)
{
    // rendo la parola tutta minuscola
    $word = strtolower($word);
    // rimuovo gli spazi
    $word = str_replace(' ', '', $word);
    // inverto la parola
    $word_reversed = strrev($word);
    // confronto se la parola è uguale
    return $word === $word_reversed;
}
