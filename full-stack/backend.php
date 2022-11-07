<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Users {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = "";
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
      echo "connected";
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  // (C) SUPPORT FUNCTION - SQL QUERY
  function query ($sql, $data) {
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }

  // (D) CREATE/UPDATE USER
  function save ($name, $region, $city, $phone_number, $sponsor, $exams) {
      $sql = "INSERT INTO `structures` (`name`, `region`, `city`, `phone_number`, `sponsor`) VALUES (?,?,?,?,?)";
      $data = [$name, $region, $city, $phone_number, $sponsor];
      $risultato = $this->query($sql, $data);
      echo $this->error;
      echo $risultato;
      echo "salvato";
    return $risultato;
  }
 
  // (F) GET USER
  function search ($id) {
    $risultato = $this->query("SELECT * FROM `exams` WHERE `name` LIKE '%$id%'", [$id]);
    var_dump($this);
    echo $this->error;
    echo $risultato;
    echo "cercato";
    var_dump($this->stmt->fetchAll());
    return $this->stmt->fetch();
  }
 
}

// (H) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "127.0.0.1:8889");
define("DB_NAME", "mysql");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "root");

// (I) START!
session_start();
