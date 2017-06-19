<?php

namespace backend\models;

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
            [['major_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'major_id' => 'รหัสหลักสูตร',
            'major_name' => 'ชื่อหลักสูตร',
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
