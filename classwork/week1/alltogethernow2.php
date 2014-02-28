<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php // Write your else if statement to check if the guess is correct
    $guess = 3;
    $number = 4;

    if ($guess == $number)
    {
    	echo "You got the right choice";
    }
    else if ( $guess < $number)
    {
       echo "Almost there";
    }
    else
    {
    	echo "You are way off";
    }
    ?>
  </body>
</html>
