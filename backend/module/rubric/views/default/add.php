<?
$form = \yii\bootstrap\ActiveForm::begin();
?>

<?=$form->field($model,'name')?>
<?=$form->field($model,'description')->textarea()?>
<?=$form->field($model,'sort_order')?>
<?=$form->field($model,'seo_title')?>
<?=$form->field($model,'seo_description')->textarea()?>
<?=$form->field($model,'seo_url')?>
<?=\yii\helpers\Html::submitButton('Добавить',['class' => 'btn btn-success'])?>
<?
\yii\bootstrap\ActiveForm::end();
?>
