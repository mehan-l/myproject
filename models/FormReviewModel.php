<?php

namespace app\models;

use yii\base\Model;


/**
 * Model form adding new reviews
 *
 * Class FormReviewModel
 * @package app\models
 */
class FormReviewModel extends Model
{
    public $name;
    public $review;
    public $category;
    public $verifyCode;


    /**
     * Validates fields form for adding new reviews
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'review', 'category'], 'required', 'message' => 'Обязательное поле'],
            [['name', 'review'], 'trim'],
            ['verifyCode', 'captcha', 'message' => 'Капча не введена'],
            ];
    }

    /**
     * @return array customized attribute labels
     */
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
