<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;
use Yii;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
	const STATUS_DELETED = 0;
	const STATUS_ACTIVE = 10;

	public static function tableName()
	{
		return '{{%user}}';
	}

	public function behaviors ()
	{
		return [
			TimestampBehavior::className(),
		];
	}

	public function rules()
	{
		return [
			['status', 'default', 'value' => self::STATUS_ACTIVE],
			['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
		];
	}


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        /*return static::findOne($id);*/
		return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        /*return static::findOne(['username' => $username]);*/
		return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
       /* return $this->id;*/
		return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        /*return $this->authKey;*/
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
		return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password_hash);

    }

	public function generateAuthKey()
	{
		$this->auth_key = Yii::$app->security->generateRandomString();
	}
}
