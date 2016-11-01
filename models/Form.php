<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Form extends Model
{
    public $firstname;    
    public $lastname;
    public $email;
    public $dob;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['firstname', 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],            
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Full Name'
        ];
    }

    
}
