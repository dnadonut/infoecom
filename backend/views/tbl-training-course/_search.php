<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblTrainingCourseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-training-course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'training_id') ?>

    <?= $form->field($model, 'major_id') ?>

    <?= $form->field($model, 'tp_id') ?>

    <?= $form->field($model, 'candidates_limits') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
