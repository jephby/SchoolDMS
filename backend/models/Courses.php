<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property string $course_ID
 * @property string $course_name
 * @property integer $credit_hours
 * @property integer $level
 * @property integer $dept_ID
 *
 * @property Department $dept
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_ID', 'course_name', 'credit_hours', 'level', 'dept_ID'], 'required'],
            [['credit_hours', 'level', 'dept_ID'], 'integer'],
            [['course_ID'], 'string', 'max' => 10],
            [['course_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_ID' => 'Course  ID',
            'course_name' => 'Course Name',
            'credit_hours' => 'Credit Hours',
            'level' => 'Level',
            'dept_ID' => 'Dept  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['ID' => 'dept_ID']);
    }
}
