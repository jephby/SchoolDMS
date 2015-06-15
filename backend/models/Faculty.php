<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $fac_ID
 * @property string $fac_Name
 * @property string $fac_Code
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fac_Name', 'fac_Code'], 'required'],
            [['fac_Name'], 'string', 'max' => 100],
            [['fac_Code'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fac_ID' => 'Fac  ID',
            'fac_Name' => 'Fac  Name',
            'fac_Code' => 'Fac  Code',
        ];
    }
}
