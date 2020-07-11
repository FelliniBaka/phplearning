<?php

namespace PhpLearning\Models\Articles;

use PhpLearning\Models\ActiveRecordEntity;
use \PhpLearning\Models\Users\User;

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

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}