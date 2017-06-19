<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_training_course".
 *
 * @property integer $training_id
 * @property integer $major_id
 * @property integer $tp_id
 * @property integer $candidates_limits
 *
 * @property TblCandidates[] $tblCandidates
 * @property TblMajors $major
 * @property TblTrainingPlans $tp
 */
class TblTrainingCourse extends \yii\db\ActiveRecord
{
    public $locations;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_training_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'tp_id'], 'required'],
            [['major_id', 'tp_id', 'candidates_limits'], 'integer'],
            [['major_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblMajors::className(), 'targetAttribute' => ['major_id' => 'major_id']],
            [['tp_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblTrainingPlans::className(), 'targetAttribute' => ['tp_id' => 'tp_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'training_id' => 'รหัสการจัดอบรม',
            'major_id' => 'รหัสหลักสูตร',
            'tp_id' => 'รหัสแผนการจัดอบรม',
            'candidates_limits' => 'จำนวนรับ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCandidates()
    {
        return $this->hasMany(TblCandidates::className(), ['training_id' => 'training_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMajor()
    {
        return $this->hasOne(TblMajors::className(), ['major_id' => 'major_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTp()
    {
        return $this->hasOne(TblTrainingPlans::className(), ['tp_id' => 'tp_id']);
    }
}
