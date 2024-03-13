<?php

namespace app\entity;
use app\repository\UserRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Users
 * @property integer id Идентификатор
 * @property string email Email
 * @property string password Пароль
 * @property string name Имя
 * @property integer age Возраст
 * @property boolean is_admin Флаг админ
  */

class Users extends ActiveRecord implements IdentityInterface
{
    public function getCarts()
    {
        return $this->hasMany(Cart::class, ['id' => 'user_id']);
    }

    public static function findIdentity($id)
    {
        return new static(UserRepository::getUserById($id));
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        return $this->id;
    }

    public function findUserByEmail($email)
    {
        return  new static(UserRepository::getUserByEmail($email));
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}