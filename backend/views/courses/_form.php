<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credit_hours')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'dept_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
