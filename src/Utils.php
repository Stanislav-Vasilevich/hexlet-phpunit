<?php
  
  namespace Hexlet\Phpunit\Utils;
  
  // Эта функция переворачивает переданную строку
  function reverseString($string)
  {
    return implode(array_reverse(str_split($string)));
  }
  
//  echo $html = file_get_contents(__DIR__ . "/../tests/fixtures/some.html");
  echo reverseString('https://vasilevich.blog');
  