<?
$form = \yii\bootstrap\ActiveForm::begin();
?>

<?=$form->field($model,'name')?>
<?=$form->field($model,'description')->textarea()?>
<?=$form->field($model,'sort_order')?>
<?=$form->field($model,'seo_title')?>
<?=$form->field($model,'seo_description')->textarea()?>
<?=$form->field($model,'seo_url')?>
<button type="submit">Добавить</button>
<?
\yii\bootstrap\ActiveForm::end();
?>
