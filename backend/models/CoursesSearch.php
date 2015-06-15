<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Courses;

/**
 * CoursesSearch represents the model behind the search form about `app\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_ID', 'course_name'], 'safe'],
            [['credit_hours', 'level', 'dept_ID'], 'integer'],
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
        $query = Courses::find();

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
            'credit_hours' => $this->credit_hours,
            'level' => $this->level,
            'dept_ID' => $this->dept_ID,
        ]);

        $query->andFilterWhere(['like', 'course_ID', $this->course_ID])
            ->andFilterWhere(['like', 'course_name', $this->course_name]);

        return $dataProvider;
    }
}
