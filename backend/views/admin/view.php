<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\nav;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">
    <div class="container">

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
    <div class="col-md-9">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'username',
            //'auth_key',
            'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>
        </div>
    </div>
</div>
