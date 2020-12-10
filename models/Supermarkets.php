<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Supermarkets table supermarkets
 * @package app\models
 */

class Supermarkets extends ActiveRecord
{
    /**
     * Validates fields username review id before insert or update
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['id', 'name', 'review'], 'required', 'message' => 'Поле не может быть пустым'],
            ];
    }
}
