<?php


function is_prime_number($number)
{
 // Tak dla niepoznaki
 if($number < 2)
 {
  return false;
 }

 for($h = 2; $h < $number; ++$h)
 {
  if($number % $h == 0)
  {
   return false;
  }
 }

 return true;
}

$n = 100;
$table = array_fill(2, $n, '');

foreach($table as $key => $value)
{
 echo $key.' - '.(is_prime_number($key) ? 'tak' : 'nie')."\n";
}
