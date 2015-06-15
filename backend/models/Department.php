<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $ID
 * @property string $deptName
 * @property string $deptCode
 * @property integer $fac_ID
 *
 * @property Courses[] $courses
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deptName', 'deptCode', 'fac_ID'], 'required'],
            [['fac_ID'], 'integer'],
            [['deptName'], 'string', 'max' => 100],
            [['deptCode'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'deptName' => 'Dept Name',
            'deptCode' => 'Dept Code',
            'fac_ID' => 'Fac  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Courses::className(), ['dept_ID' => 'ID']);
    }
}
