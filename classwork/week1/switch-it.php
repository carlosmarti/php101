<!doctype html>
<html lang="en">
  <head>
    <title>Switch It!</title>
  </head>
  <body>
  <p>Create a switch statement with 3 different cases and a default case, feel free to use alternative syntax as well!</p>
  <?php

  $value = 3;

  switch ($value)
  {
  	case 0:
  	echo 'you have 0 fingers';
  	break;

  	case 1:
  	echo 'you have 1 finger';
  	break;

  	case 2:
  	echo 'you got 2 fingers';
  	break;

  	case 3:
  	 echo 'you got 3 fingers';
  	 break;

  	default:
  	echo "you did not type 0,1,2 or 3";
  }
  ?>
  </body>
</html>
