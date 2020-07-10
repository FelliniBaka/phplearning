<?php

namespace PhpLearning\Models\Users;

use PhpLearning\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    protected $id;

    protected $nickname;

    protected $email;

    protected $isConfirmed;

    protected $role;

    protected $passwordHash;

    protected $authToken;

    protected $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getIsConfirmed()
    {
        return $this->isConfirmed;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function getAuthToken()
    {
        return $this->authToken;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}
