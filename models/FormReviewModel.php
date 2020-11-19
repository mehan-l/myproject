<?php


namespace app\models;

use yii\base\Model;

/*This is model for form adding new review*/

class FormReviewModel extends Model
{
	public $name;
	public $review;
	public $category;
	public $verifyCode;


	public function rules()
	{
		return [
			[['name', 'review', 'category'], 'required', 'message' => 'Обязательное поле'],
			[['name', 'review'], 'trim'],
			['verifyCode', 'captcha', 'message'=> 'Капча не введена'],
		];
	}

	public function attributeLabels()
	{
		return [
			'name' => 'Имя',
			'review' => 'Отзыв',
			'category' => 'Категория',
			'verifyCode' => 'Капча',
		];
	}
}