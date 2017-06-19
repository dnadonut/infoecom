<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_majors".
 *
 * @property integer $major_id
 * @property string $major_name
 *
 * @property TblTrainingCourse[] $tblTrainingCourses
 */
class TblMajors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_majors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['major_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'major_id' => 'Major ID',
            'major_name' => 'Major Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTrainingCourses()
    {
        return $this->hasMany(TblTrainingCourse::className(), ['major_id' => 'major_id']);
    }
}
