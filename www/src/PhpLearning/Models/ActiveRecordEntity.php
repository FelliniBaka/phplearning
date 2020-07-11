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

    protected function camelCaseToUnderscore (string $source): string
    {
        foreach (preg_match('~([A-Z]*)~',ucfirst($source)) as $word){
            $array[] = $word;
        }
        return implode("_",$array);
    }

    public static function findAll(): array
    {
        $db = Db::getInstance();
        return $db->query('SELECT * FROM `'.static::getTableName().'`;',[],static::class);
    }

    abstract protected static function getTableName(): string;

    public static function getById(int $id): ?self
    {
        $db = Db::getInstance();
        $entities = $db->query
            (
            'SELECT * FROM `'.static::getTableName().'` WHERE `id` = :id;',
            [':id' => $id],
            static::class
            );
        return $entities ? $entities[0] : null;
    }

    public function save()
    {

    }
}