<?php

namespace source\shared;

use Error;
use Exception;
use PDO;
use PDOException;

class ConnectionDb {
  private readonly string $host;
  private readonly string $dbname;
  private readonly string $user;
  private readonly string $password;
  private readonly PDO $connection;

  private function __construct(string $host, string $dbname, string $user, string $password)
  {
    $this->host = $host;
    $this->dbname = $dbname;
    $this->user = $user;
    $this->password = $password;
  }

  public static function get(): PDO {
    try {
      define("HOST", "localhost");
      define("DBNAME", "bancox");
      define("USER", "lucasbogos");
      define("PASS", "LucasB@654321");

      $db = new self(HOST, DBNAME, USER, PASS);

      $db->connection = new PDO("mysql:host=$db->host;dbname=".$db->dbname, $db->user, $db->password);
      $db->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $db->connection;

    } catch(PDOException $error) {
      throw new Error("Erro de conexão do PDO: " . $error->getMessage());

    } catch (Exception $error) {
      throw new Error("Ocorreu um erro: " . $error->getMessage());
    }
  }
}
