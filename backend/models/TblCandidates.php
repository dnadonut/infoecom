<?php

namespace backend\models;

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
            [['training_id'], 'required'],
            [['training_id'], 'integer'],
            [['prefix_name', 'food_type', 'candidates_type'], 'string', 'max' => 45],
            [['fname', 'lname', 'email'], 'string', 'max' => 128],
            [['telephone'], 'string', 'max' => 10],
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
            'training_id' => 'Training ID',
            'prefix_name' => 'Prefix Name',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'food_type' => 'Food Type',
            'candidates_type' => 'Candidates Type',
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
