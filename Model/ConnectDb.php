<?php
// Singleton to connect db.
class ConnectDb
{
  // Hold the class instance.
  private static $instance = null;
  private $conn;

  private $host = 'db4free.net';
  private $user = 'speedybus';
  private $pass = 'speedybus19p';
  private $name = 'speedybus';

  // The db connection is established in the private constructor.
  private function __construct()
  {
    $this->conn = new PDO(
      "mysql:host={$this->host};
    dbname={$this->name}",
      $this->user,
      $this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new ConnectDb();
    }

    return self::$instance;
  }

  public function getConnection()
  {
    return $this->conn;
  }

  public function query($query, $params = [])
  {
    $stmt = $this->conn->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }

  public function fetchArray($result)
  {
    return $result->fetchAll();
  }

  public function fetch($result)
  {
    return $result->fetch();
  }

  public function rowCount($result)
  {
    return $result->rowCount();
  }
  public function lastInsertedId()
  {
    return $this->conn->lastInsertId();
  }
}

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
