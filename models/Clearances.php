<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clearances".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $birthplace
 * @property string $birthdate
 * @property string $citizenship
 * @property string $civilstatus
 * @property string $purpose
 */
class Clearances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clearances';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'birthplace', 'birthdate', 'citizenship', 'civilstatus', 'purpose'], 'required'],
            [['birthplace', 'birthdate'], 'safe'],
            [['name', 'address', 'citizenship', 'civilstatus', 'purpose'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'birthplace' => 'Birthplace',
            'birthdate' => 'Birthdate',
            'citizenship' => 'Citizenship',
            'civilstatus' => 'Civilstatus',
            'purpose' => 'Purpose',
        ];
    }
}
