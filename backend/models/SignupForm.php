<?php
namespace backend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $userdept_ID;
    public $Year_A;
    public $matricNO;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['userdept_ID', 'required'],
            ['userdept_ID', 'string', 'max' => 10],

            ['Year_A', 'required'],
            ['Year_A', 'string', 'max' => 10]

        ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->userdept_ID = $this->userdept_ID;
            $user->Year_A = $this->Year_A;
            $user->generateAuthKey();
            $user-> matricNO = User::generateMatricNumber();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
