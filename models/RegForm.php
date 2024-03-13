<?php

namespace app\models;

use app\repository\UserRepository;
use function Sodium\compare;

class RegForm extends \yii\base\Model
{
    public $email;
    public $password;
    public $passwordRepeat;
    public $name;
    public $age;
    public $is_admin = false;

    public function rules()
    {
        return [
            [['email', 'password', 'passwordRepeat', 'name', 'age'], 'required'],
            ['email', 'email'],
            ['passwordRepeat', 'compare', 'compareAttribute' =>'password'],
            ['email', 'validateEmail']
        ];
    }
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByEmail($this->email);

            if ($user) {
                $this->addError($attribute, 'Пользователь уже существует.');
            }
        }
    }
}

