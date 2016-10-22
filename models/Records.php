<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "records".
 *
 * @property string $complainantName
 * @property string $complainantAddress
 * @property string $complainantContact
 * @property string $email
 * @property integer $complainantAge
 * @property string $complainantGender
 * @property string $accusedName
 * @property string $accusedAddress
 * @property string $accusedContact
 * @property integer $accusedAge
 * @property string $accusedGender
 * @property string $eventNmber
 * @property string $picture
 * @property string $subject
 * @property string $natureOfCrime
 * @property string $dateCommited
 * @property string $placeCommited
 * @property string $apprehendingOffier
 * @property string $dateRecoreded
 * @property string $reason
 * @property integer $id
 * @property string $Status
 */
class Records extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complainantName', 'complainantAddress', 'complainantContact', 'email', 'complainantAge', 'complainantGender', 'accusedName', 'accusedAddress', 'accusedContact', 'accusedAge', 'accusedGender', 'eventNmber', 'subject', 'natureOfCrime', 'dateCommited', 'placeCommited', 'apprehendingOffier', 'reason', 'Status'], 'required'],
            [['complainantAddress', 'accusedAddress', 'picture', 'subject', 'natureOfCrime', 'placeCommited', 'reason'], 'string'],
            [['complainantAge', 'accusedAge'], 'integer'],
            [['dateCommited', 'dateRecoreded'], 'safe'],
            [['complainantName', 'complainantContact', 'email', 'complainantGender', 'accusedName', 'accusedContact', 'accusedGender'], 'string', 'max' => 200],
            [['eventNmber', 'Status'], 'string', 'max' => 50],
            [['apprehendingOffier'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'complainantName' => 'Complainant Name',
            'complainantAddress' => 'Complainant Address',
            'complainantContact' => 'Complainant Contact',
            'email' => 'Email',
            'complainantAge' => 'Complainant Age',
            'complainantGender' => 'Complainant Gender',
            'accusedName' => 'Accused Name',
            'accusedAddress' => 'Accused Address',
            'accusedContact' => 'Accused Contact',
            'accusedAge' => 'Accused Age',
            'accusedGender' => 'Accused Gender',
            'eventNmber' => 'Event Nmber',
            'picture' => 'Picture',
            'subject' => 'Subject',
            'natureOfCrime' => 'Nature Of Crime',
            'dateCommited' => 'Date Commited',
            'placeCommited' => 'Place Commited',
            'apprehendingOffier' => 'Apprehending Offier',
            'dateRecoreded' => 'Date Recoreded',
            'reason' => 'Reason',
            'id' => 'ID',
            'Status' => 'Status',
        ];
    }
}
