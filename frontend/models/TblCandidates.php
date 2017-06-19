<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_candidates".
 *
 * @property integer $candidates_id
 * @property integer $training_id
 * @property string $prefix_name
 * @property string $fname
 * @property string $lname
 * @property string $telephone
 * @property string $email
 * @property string $food_type
 * @property string $candidates_type
 *
 * @property TblTrainingCourse $training
 */
class TblCandidates extends \yii\db\ActiveRecord
{   
    public $major;
    public $location;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_candidates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_id','prefix_name','fname', 'lname', 'email','telephone','major','location'], 'required'],
            [['training_id'], 'integer'],
            [['prefix_name', 'food_type', 'candidates_type'], 'string', 'max' => 45],
            [['company'], 'string', 'max' => 100],
            [['fname', 'lname', 'email'], 'string', 'max' => 128],
            [['telephone'], 'string'],
            [['training_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblTrainingCourse::className(), 'targetAttribute' => ['training_id' => 'training_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidates_id' => 'Candidates ID',
            'training_id' => 'วันที่',
            'prefix_name' => 'คำนำหน้าชื่อ',
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'telephone' => 'เบอร์โทร',
            'email' => 'อีเมล์',
            'food_type' => 'ประเภทอาหาร',
            'candidates_type' => 'ประเภทผู้เข้าอบรม',
            'company' => 'สถานประกอบการ',
            'location'=>'สถานที่',
            'major'=>'หลักสูตร',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTraining()
    {
        return $this->hasOne(TblTrainingCourse::className(), ['training_id' => 'training_id']);
    }
}
