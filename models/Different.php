<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Different table different
 * @package app\models
 */
class Different extends ActiveRecord
{
    /**
     * Validates fields username review id before insert or update
     * @return array
     */
    public function rules()
    {
        return [
            [['username', 'review', 'id'], 'required', 'message' => 'Поле не может быть пустым'],
            ];
    }
}
