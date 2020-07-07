<?php

namespace PhpLearning\Models\Articles;

use PhpLearning\Models\ActiveRecordEntity;
use \PhpLearning\Models\Users\User;
use PhpLearning\Services\Db;

class Article extends ActiveRecordEntity
{

    /** @var int */
    protected $id;

    /** @var int*/
    protected $authorId;

    /** @var string */
    protected $name;

    /** @var string */
    protected $text;

    /** @var string */
    protected $createdAt;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}