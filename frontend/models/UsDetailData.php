<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "us_detail_data".
 *
 * @property integer $id
 * @property string $state
 * @property double $white
 * @property double $black
 * @property double $hispanic
 * @property string $state_name
 */
class UsDetailData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'us_detail_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state', 'white', 'black', 'hispanic', 'state_name'], 'required'],
            [['white', 'black', 'hispanic'], 'number'],
            [['state', 'state_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state' => 'State',
            'white' => 'White',
            'black' => 'Black',
            'hispanic' => 'Hispanic',
            'state_name' => 'State Name',
        ];
    }
}
