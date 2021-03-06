<?php


namespace PhpLearning\Services;


class Db
{
    private $pdo;

    private static $instance;

    private function __construct()
    {
        $dbOptions = (require __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'settings.php')['db'];

        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
            );
        $this->pdo->exec("SET NAMES UTF8");
    }

    public function query (string $sql, array $params =[], string $className = 'stdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
