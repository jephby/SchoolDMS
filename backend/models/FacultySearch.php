<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Faculty;

/**
 * FacultySearch represents the model behind the search form about `app\models\Faculty`.
 */
class FacultySearch extends Faculty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fac_ID'], 'integer'],
            [['fac_Name', 'fac_Code'], 'safe'],
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
        $query = Faculty::find();

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
            'fac_ID' => $this->fac_ID,
        ]);

        $query->andFilterWhere(['like', 'fac_Name', $this->fac_Name])
            ->andFilterWhere(['like', 'fac_Code', $this->fac_Code]);

        return $dataProvider;
    }
}
