<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age = 21;     // Set this to a number greater than 18

        if ($age < 18) 
        {

          echo "You're old enough to vote!";
        }
        else if ($age == 21)
        {
          echo "You're all good";
        }
        else
        {
          echo "You're not old enough";
        }
      ?>
    </p>
  </body>
</html>
