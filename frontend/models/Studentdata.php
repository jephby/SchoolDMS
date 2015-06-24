<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentdata".
 *
 * @property string $studentID
 * @property string $fName
 * @property string $lName
 * @property string $parrentG
 * @property string $Nationality
 * @property string $state
 * @property string $LGA
 * @property string $dept_ID
 * @property string $gender
 * @property string $next_O_K
 * @property integer $parrentG_contact
 * @property integer $contact
 * @property string $contact_Address
 * @property string $religeon
 */
class Studentdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['studentID', 'fName', 'lName', 'parrentG', 'Nationality', 'state', 'LGA', 'dept_ID', 'gender', 'next_O_K', 'parrentG_contact', 'contact', 'contact_Address', 'religeon'], 'required'],
            [['parrentG_contact', 'contact'], 'integer'],
            [['studentID'], 'string', 'max' => 17],
            [['fName', 'lName', 'Nationality', 'state', 'LGA', 'dept_ID', 'religeon'], 'string', 'max' => 45],
            [['parrentG', 'next_O_K'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 10],
            [['contact_Address'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studentID' => 'Student ID',
            'fName' => 'F Name',
            'lName' => 'L Name',
            'parrentG' => 'Parrent G',
            'Nationality' => 'Nationality',
            'state' => 'State',
            'LGA' => 'Lga',
            'dept_ID' => 'Dept  ID',
            'gender' => 'Gender',
            'next_O_K' => 'Next  O  K',
            'parrentG_contact' => 'Parrent G Contact',
            'contact' => 'Contact',
            'contact_Address' => 'Contact  Address',
            'religeon' => 'Religeon',
        ];
    }

    /**
     * @inheritdoc
     * @return StudentdataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentdataQuery(get_called_class());
    }
}
