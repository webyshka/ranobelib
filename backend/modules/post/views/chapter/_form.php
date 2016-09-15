<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Chapters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chapters-form row">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-12">
        <?= $form->field($model, 'title')->textInput() ?>
    </div>
    <div class="col-lg-12">
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-lg-12">
        <?= Html::dropDownList('Chapters[rubric_id]', $model->getOldAttribute('rubric_id'), $rubrics, ['class'=>'form-control']);?>
    </div>
    <div class="col-lg-3">
        <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3">
        <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3">
        <?= $form->field($model, 'seo_url')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3">
        <? if ($model->getOldAttribute('sort_order')) { ?>
            <?= $form->field($model, 'sort_order')->textInput() ?>
        <? } else {?>
            <?= $form->field($model, 'sort_order')->textInput(['value'=> '0']) ?>
        <? } ?>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
