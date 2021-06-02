<?php

  function smallest($x, $y, $z) {
    $min = $x;
    if ($x <= $y && $x <= $z)
      {$min = $x;}
    if ($y <= $x && $y <= $z)
      {$min = $y;}
    if ($z <= $x && $z <= $y)
      {$min = $z;}
    echo "Smallest number among $x, $y and $z is: $min\n";
  }
	$a = (int)readline('Enter an integer: ');
	$b = (int)readline('Enter an integer: ');
	$c = (int)readline('Enter an integer: ');
  smallest($a, $b, $c);

?>