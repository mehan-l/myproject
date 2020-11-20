<?php


namespace app\models;


use yii\base\Model;

class RegistrationModel extends Model
{
	public $name;
	public $password;

	public function rules()
	{
		return [
			[['name', 'password'], 'required', 'message' => 'Поле не должно быть пустым']
		];
	}

	public function attributeLabels()
	{
		return [
			'name' => 'Имя',
			'password' => 'Пароль'
		];
	}

}