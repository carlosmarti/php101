<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
    $name = "Carlos Marti";
    $result = round($name * M_PI,3) . '<br>';
    echo $result;
    echo '<br>';
    echo cail($result);
    $partial = subtr($result,0,4);
    $name =  rand(0,$partial);
    echo $name;
    // get the length of your full name (first and last)
    // multiply that by M_PI and round it to the third decimal place
    // print out the result
    // then print out the ceiling value of the result

    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name
    ?>
  </body>
</html>
