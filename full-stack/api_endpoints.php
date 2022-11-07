<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// (A) LOAD USER LIBRARY
require_once "2-users-lib.php";

var_dump($_POST);

$user = new Users();
if (isset($_POST["name"], $_POST["region"], $_POST["city"], $_POST["phone_number"])) {
  if (isset($_POST["sponsor"])) {
    $sponsor = 1;
  }
  else {
    $sponsor = 0;
  }
  $user->save($_POST["name"], $_POST["region"], $_POST["city"], $_POST["phone_number"], $sponsor, "");
}
if (isset($_POST["search"])) {
  $user->search($_POST["search"]);
}
