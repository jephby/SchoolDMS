<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\nav;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-index">
    <div class="row-fluid">
        <div class="col-md-4">

                    <!--Sidebar content-->
            <?php
            echo Nav::widget([

                'items' => [
                    [
                        'url' => ['/site/index'],
                        'label' => 'Home',
                        'icon' => 'home'
                    ],
                   [
                       'url' => ['/admin/index'],
                       'label' => 'Admin',
                       'icon' => 'book'
                   ],
    ],
]);
            ?>

                </div>


            <div class="col-md-8">

            <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Create Courses', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'course_ID',
                    'course_name',
                    'credit_hours',
                    'level',
                    'dept_ID',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
                </div>
    </div>
        </div>
