<?php 

function check_complex($string, $minchar, $level) {
  $lowcase = preg_match('/[a-z]/', $string);
  $uppcase = preg_match('/[A-Z]/', $string);
  $numbers = preg_match('/\d/', $string);
  $special = preg_match('/[^a-zA-Z\d]/', $string);

  $passed = true;
  switch($level) {
      case 5: $passed = ($passed and $special);
      case 4: $passed = ($passed and $uppcase);
      case 3: $passed = ($passed and $numbers);
      case 2: $passed = ($passed and $lowcase);
      case 1: $passed = ($passed and ($lowcase or $uppcase or $numbers));
      case 0: $passed = ($passed and (strlen($string) >= $minchar)); 
      break;
      default: $passed = false;
  }
  return $passed;
}