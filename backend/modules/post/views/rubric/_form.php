<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Rubrics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rubrics-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(FileInput::classname(), [
        'options' => [
            'accept' => 'image/*',
            'multiple'=> false,
        ],
        'pluginOptions' => [
            'initialPreview'=> $model->image ? [Html::img('http://'.$_SERVER['SERVER_NAME'] . $model->image,  ['class'=>'file-preview-image'])] : [],
            'previewFileType' => 'any',
            'showUpload' => false,
            'showRemove' => true,
            'overwriteInitial'=>true,
        ],
    ])->label(false) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sort_order')->textInput() ?>
    <?= $form->field($model, 'seo_url')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
