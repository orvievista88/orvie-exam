<?php

namespace App\Service;

use PDO;

/**
 * Class DB
 *
 * Singleton class to handle database connection using PDO.
 */
class DB
{
    private $pdo;

    private static $instance = null;

    /**
     * DB constructor.
     * Initializes the PDO connection.
     */
    private function __construct()
    {
        $dsn = 'mysql:dbname=phptest;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->pdo = new PDO($dsn, $user, $password);
    }

    /**
     * Returns the singleton instance of the DB class.
     *
     * @return DB The singleton instance.
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Executes an SQL query.
     *
     * @param string $sql The SQL query to execute.
     * @return PDOStatement The resulting PDOStatement.
     */
    public function query($sql)
    {
        return $this->pdo->query($sql);
    }

    /**
     * Prepares an SQL statement.
     *
     * @param string $sql The SQL statement to prepare.
     * @return PDOStatement The prepared PDOStatement.
     */
    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
}
