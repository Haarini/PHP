<html>
<!--Printing factorial of a number-->
<?php
function factorial($n) 
{
  if ($n == 0) {
    return 1;
  }
  return $n * factorial($n - 1);
}
echo("The factorial is:");
echo factorial(5);
?php>
</html>
