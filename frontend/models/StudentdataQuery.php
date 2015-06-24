<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Studentdata]].
 *
 * @see Studentdata
 */
class StudentdataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Studentdata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Studentdata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}