<?php
  require_once 'header.php';

  echo "<br><span class='main'>Welcome to $appname,";

  if($loggedin) echo " $user, you are logged in."；
  else          echo " Please sign up and/or log in to join in."
?>

    </span><br><br>
  </body>
</html>