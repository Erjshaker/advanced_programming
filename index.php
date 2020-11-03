<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>assign_two</title>
  </head>
  <body>
    <?php
      class User
      {
        function __construct($name, $username, $email)
        {
          $this -> name = $name;
          $this -> username = $username;
          $this -> email = $email;
        }

        function addFriend()
        {
          echo $this -> name . " added a friend";
          echo "<br>";
        }

        function postStatus()
        {
          echo $this -> name . " posted a status";
          echo "<br>";
        }
      }

      $user = new User("Erjohn Espuerta", "Erjshaker", "erjohn13@gmail.com");
      $user -> addFriend();
      echo "<br>";
      $user -> postStatus();
    ?>
  </body>
</html>
