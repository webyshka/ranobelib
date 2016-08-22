asdsad
<? $form = \yii\bootstrap\ActiveForm::begin([
    'action' => \yii\helpers\Url::to(['/rubric/default/edit']),
]); ?>
<?=$form->field($model,'title')?>
<?=$form->field($model,'description')->textarea()?>
<?=$form->field($model,'sort_order')?>
<?=$form->field($model,'meta_title')?>
<?=$form->field($model,'meta_description')->textarea()?>
<?=$form->field($model,'seo_url')?>

<?=\yii\helpers\Html::submitButton('Добавить',['class' => 'btn btn-success']);?>

<? \yii\bootstrap\ActiveForm::end(); ?>
