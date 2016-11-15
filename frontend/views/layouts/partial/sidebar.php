<?
use yii\helpers\Html;
use common\models\Chapters;
?>
<div class="col-md-3 sidebar">
    <!--<div class="popular-category panel">
        <div class="panel-heading">
            <h4>Популярные категории</h4>
        </div>
        <div class="list-group">
           <a href="" class="list-group-item"></a>
        </div>
    </div>-->
    <div class="new-chapter panel">
        <div class="panel-heading">
            <h4>Последние материалы</h4>
        </div>
        <ul>
            <? $chapter = Chapters::find()->limit(15)->orderBy('id')->all(); ?>
            <?foreach ($chapter as $one) {?>
                <li>
                <span class="image-category">
                    <a href="<?=$one->getChapterUrl()?>">
                        <img src="" class="img-responsive" alt="ранобэ читать"/>
                    </a>
                </span>
                    <?= Html::a($one->title, $one->getChapterUrl())?>
                </li>
            <? } ?>
        </ul>
    </div>
</div>