<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = $model->fac_ID;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fac_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fac_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fac_ID',
            'fac_Name',
            'fac_Code',
        ],
    ]) ?>

</div>
