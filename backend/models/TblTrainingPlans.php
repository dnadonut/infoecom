<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_training_plans".
 *
 * @property integer $tp_id
 * @property integer $locations_id
 * @property string $start_date
 * @property string $end_date
 *
 * @property TblTrainingCourse[] $tblTrainingCourses
 * @property TblLocations $locations
 */
class TblTrainingPlans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_training_plans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['locations_id'], 'required'],
            [['locations_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['locations_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblLocations::className(), 'targetAttribute' => ['locations_id' => 'locations_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tp_id' => 'Tp ID',
            'locations_id' => 'Locations ID',
            'start_date' => 'วันที่เริ่มจัด',
            'end_date' => 'วันที่สิ้นสุด',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTrainingCourses()
    {
        return $this->hasMany(TblTrainingCourse::className(), ['tp_id' => 'tp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasOne(TblLocations::className(), ['locations_id' => 'locations_id']);
    }
}
