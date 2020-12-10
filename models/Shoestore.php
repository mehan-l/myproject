<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Shoestore table shoestore
 * @package app\models
 */
class Shoestore extends ActiveRecord
{
    /**
     * Validates fields username review id before insert or update
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['username', 'review', 'id'], 'required', 'message' => 'Поле не может быть пустым'],
        ];
    }
}
