<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property integer $id
 * @property integer $recordid
 * @property string $detailOfEvent
 * @property string $actionTaken
 * @property string $summary
 * @property string $status
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['recordid', 'detailOfEvent', 'actionTaken', 'summary', 'status'], 'required'],
            [['recordid'], 'integer'],
            [['status'], 'string'],
            [['detailOfEvent', 'actionTaken', 'summary'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'recordid' => 'Recordid',
            'detailOfEvent' => 'Detail Of Event',
            'actionTaken' => 'Action Taken',
            'summary' => 'Summary',
            'status' => 'Status',
        ];
    }
}
