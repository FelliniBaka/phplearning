<?php


namespace PhpLearning\Models;


use PhpLearning\Services\Db;

abstract class ActiveRecordEntity
{
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __set($name, $value)
    {
        $newProperty = $this->underscoreToCamelCase($name);
        $this->$newProperty = $value;
    }

    protected function underscoreToCamelCase(string $source): string
    {
        return preg_replace('~[\_]~','',lcfirst(ucwords($source, '_')));
    }

    public static function findAll(): array
    {
        $db = new Db();
        return $db->query('SELECT * FROM `'.static::getTableName().'`;',[],static::class);
    }

    abstract protected static function getTableName(): string;

    public static function getById(int $id): ?self
    {
        $db = new Db();
        $entities = $db->query
            (
            'SELECT * FROM `'.static::getTableName().'` WHERE `id` = :id;',
            [':id' => $id],
            static::class
            );
        return $entities ? $entities[0] : null;
    }
}