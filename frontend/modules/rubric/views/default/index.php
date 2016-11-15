<?
use yii\grid\GridView;
use common\models\Rubrics;
use yii\helpers\Html;
$categories = Rubrics::find()->orderBy('sort_order DESC')->all();
?>
<ul>
<?php foreach ($categories as $cat) : ?>
    <li class="<?=$cat->rubric_id?>">
        <?= Html::a('<span class="category-'.$cat->rubric_id.'"></span>' . $cat->title, $cat->getRubricUrl())?>
    </li>
<?php endforeach;?>
</ul>