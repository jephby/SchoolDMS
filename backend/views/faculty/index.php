<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */
/* @var $form ActiveForm */
?>
<div class="faculty-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fac_Name') ?>
        <?= $form->field($model, 'fac_Code') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- faculty-index -->
