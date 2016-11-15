<?
use yii\helpers\Html;
?>
        <div class="col-md-9 category-post">
            <div class="category-block panel panel-default">
                <h1><?=$rubric->title?> ранобэ читать</h1>
                <div class="image">
                    <img src="" class="img-responsive" alt="<?=$rubric->title?> ранобэ читать"/>
                </div>
                <div class="right-content">
                    <h2>Описание</h2>
                    <div class="description">
                        <?=$rubric->description?>
                    </div>
                    <div class="attributes">
                        <ul>
                            <!--<li>Альтернативные названия: </li>-->
                            <li><span>Выпущено глав</span>: </li>
                            <li><span>Переведено глав</span>: </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row-fluid">
                    <div class="item-list">
                        <h2>Главы</h2>
                        <? foreach ($chapters as $chapter) { ?>
                            <div class="item col-md-12">
                                <?= Html::a('<span class="chapter-'.$chapter->id.'"></span>' . $chapter->title, $chapter->getChapterUrl())?>
                            </div>
                        <? } ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>