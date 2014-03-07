<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    function name()
    {
    	return "Carlos Marti";
    }

    echo name();

    $myName = name;
    $partial = substr($myName, 0 , 3);
    echo strtoupper($myName);
    echo strtolower($myName);
    print $partial;

    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function
    ?>
  </body>
</html>
