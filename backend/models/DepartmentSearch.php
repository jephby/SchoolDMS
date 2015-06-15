<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Department;

/**
 * DepartmentSearch represents the model behind the search form about `app\models\Department`.
 */
class DepartmentSearch extends Department
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'fac_ID'], 'integer'],
            [['deptName', 'deptCode'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Department::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'fac_ID' => $this->fac_ID,
        ]);

        $query->andFilterWhere(['like', 'deptName', $this->deptName])
            ->andFilterWhere(['like', 'deptCode', $this->deptCode]);

        return $dataProvider;
    }
}
