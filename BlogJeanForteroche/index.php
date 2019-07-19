<?php

if (isset($_POST["ID"]) && $_POST["ID"] == "a" && isset($_POST["password"]) && $_POST["password"] == "b" || isset($_POST["text"])) {
  require('controller/backend.php');
}
else {
  require('controller/frontend.php');
}

?>
