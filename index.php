<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>assign_one</title>
  </head>
  <body>
    <form action="" method="post">
        <tr><td><b>Erjohn Espuerta</b></td></tr><br><br>
        <tr><td><b>Calculator</b></td></tr><br><br>
        <tr><td>Input first number:</td></tr><br><br>
        <input type="text" name="n1" value ="" ><br>
        <br>
        <tr><td>Input second number:</td></tr><br><br>
        <input type="text" name="n2" value ="" ><br><br>

        <input type="submit" name="a" value="+">
        <input type="submit" name="s" value="-">
        <input type="submit" name="m" value="*">
        <input type="submit" name="d" value="/">
    </form>

    <?php
      if (isset($_POST['a'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $add = $n1 + $n2;
        echo "Addition = ".$add;
      }

      if (isset($_POST['s'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $sub = $n1 - $n2;
        echo "Subtraction = ".$sub;
      }

      if (isset($_POST['m'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $mul = $n1 * $n2;
        echo "Multiplication = ".$mul;
      }

      if (isset($_POST['d'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $div = $n1 / $n2;
        echo "Division = ".$div;
      }
    ?>

    <form action="" method="post"><br><br>
      <tr><td><b>Finding GCD</b></td></tr><br><br>
      <tr><td>Input first number:</td></tr><br><br>
      <input type="text" name="num1" value ="" ><br>
      <br>
      <tr><td>Input second number:</td></tr><br><br>
      <input type="text" name="num2" value ="" ><br><br>

      <input type="submit" name="gcd" value="Submit"><br>

      <?php

    if(isset($_POST['gcd']))
    {
      if (!empty($_POST['num1']) && !empty($_POST['num2']))
      {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 > $num2)
        {
          $temp = $num1;
          $num1 = $num2;
          $num2 = $temp;
        }
        for($i = 1; $i < ($num1+1); $i++)
        {
          if ($num1%$i == 0 and $num2%$i == 0)
            $gcd = $i;
        }
        echo "GCD of $num1 and $num2 is: $gcd";
      }
      elseif(empty($_POST['num2']) && empty($_POST['num1']))
      {
        echo "no data inputted please try again";
      }
      elseif (empty($_POST['num2']))
      {
        echo "no data in 2nd number";
      }
      elseif (empty($_POST['num1']))
      {
        echo "no data in 1st number";
      }
    }
    ?>

    </form>

  </body>
</html>
