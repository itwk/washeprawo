<?php


namespace App;

use PDO;
use PDOException;

class DB
{
    private $host;
    private $db;
    private $user;
    private $passwd;
    private $dbh;

    public function __construct(string $host, string $db, string $user, string $passwd)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->passwd = $passwd;

        $this->getDbh();
    }


    /**
     * @return void
     */
    private function setDbh(): void
    {
        if (! $this->checkIfDbExists()) {
            $this->createDB();
        }

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->passwd);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    /**
     * @return PDO
     */
    public function getDbh(): PDO
    {
        if (!$this->dbh){
            $this->setDbh();
        }
        return $this->dbh;
    }

    /**
     * @return void
     */
    public function createDB(): void
    {
        try {
            $conn = new PDO("mysql:host=$this->host", $this->user, $this->passwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS " . $this->db;
            $conn->exec($sql);
            echo "Database created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    /**
     * @return bool
     */
    public function checkIfDbExists(): bool
    {
        $conn = new PDO("mysql:host=$this->host", $this->user, $this->passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '" . $this->db . "'";
        $stmt = $conn->query($sql);
        return (bool) $stmt->fetchColumn();
    }

    /**
     * @return void
     */
    public function createTableNotes(): void
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS notes (
                        ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
                        note VARCHAR( 150  ) NOT NULL);";
            $this->dbh->exec($sql);
            echo "Table notes created successfully";
        } catch(PDOException $e) {
            echo $sql . PHP_EOL . $e->getMessage();
        }
    }

    /**
     * @return array
     */
    public function selectAll(): array
    {
        $sth = $this->dbh->prepare("SELECT note FROM notes ORDER BY id DESC ");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        return $result;
    }

    /**
     * @return bool
     */
    public function insertNote(string $note): bool
    {
        try {
            $sql = "INSERT INTO `notes` (`note`) VALUES (:note)";
            $params = [
                ':note' => $note
            ];
            $stmt = $this->dbh->prepare($sql);
            return $stmt->execute($params);
        } catch(PDOException $e) {
            echo PHP_EOL;
            echo $sql . PHP_EOL . $e->getMessage();
            return false;
        }
    }

}
