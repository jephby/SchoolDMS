<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */

$this->title = 'Update Courses: ' . ' ' . $model->course_ID;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_ID, 'url' => ['view', 'id' => $model->course_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
