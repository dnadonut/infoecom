<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TblCandidates */
?>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 style="margin-top: 10px"><i class="glyphicon glyphicon-file"> สมัครเข้าร่วมอบรม</i></h3>
    </div>
    <div class="panel-body">
        <div class="tbl-candidates-create">

            <h1><?= Html::encode($this->title) ?></h1>

                <?=
                $this->render('_form', [
                    'model' => $model,
                ])
                ?>

        </div>
    </div>
</div>

