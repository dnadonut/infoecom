<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_locations".
 *
 * @property integer $locations_id
 * @property string $location_name
 *
 * @property TblTrainingPlans[] $tblTrainingPlans
 */
class TblLocations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'locations_id' => 'รหัสสถานที่',
            'location_name' => 'ชื่อสถานที่',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTrainingPlans()
    {
        return $this->hasMany(TblTrainingPlans::className(), ['locations_id' => 'locations_id']);
    }
}
