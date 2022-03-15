<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

define('PAGES_PATH', './src/pages/');

/**
 * Grande chance de a palavra não existir, mas pelo menos ela faz um pouco de sentido.......
 */
function randomWord(Int $syllable) {
   $word = '';

   $vowels = 'aeiou';
   $vLen   = strlen($vowels) - 1;

   $consonants = 'bcdfghjklmnpqrstvxz';
   $cLen       = strlen($consonants) - 1;

   for($i = 0; $i < $syllable; $i++) $word.= $consonants[rand(0, $cLen)].$vowels[rand(0, $vLen)];
   return $word;
   
}