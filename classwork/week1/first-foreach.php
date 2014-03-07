<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
  <ul>
    <?php
    $fruits = ['apple','orange','pineapple','grapes','strawberry'];

    foreach ($fruits as $fruit)
    {
      echo <li>$fruit</li>;
    }
    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    ?>
    </ul>
  </body>
</html>
