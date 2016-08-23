<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AddRubricSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rubrics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubrics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rubrics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rubric_id',
            'title',
            'description:ntext',
            'meta_title',
            'meta_description',
            // 'sort_order',
            // 'seo_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
