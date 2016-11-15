<?

$this->title = $chapter->meta_title;
$this->registerMetaTag([ 'name' => 'description', 'content' =>  $chapter->meta_description]);
$this->registerMetaTag([ 'name' => 'title', 'content' =>  $chapter->meta_title]);
?>
        <div class="col-md-9 single-post">
            <div class="single-block panel panel-default">
                    <div class="info-block">
                        <div class="category-link">
                            <h2><a class="btn btn-info" href="<?=$rubric->getRubricUrl()?>">читать все главы ранобэ <?=$rubric->title?></a></h2>
                        </div>
                        <div class="chapter">
                            <div class="chapter-prev">
                            </div>
                            <div class="chapter-next">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <h1>
                        <?=$chapter->title;?>
                    </h1>
                    <?=$chapter->description;?>
                    <br>
                    <p><strong>Поддержите проект! Кликните по рекламе и сделайте там пару переходов. Спасибо за помощь проекту!</strong></p>
                    <br>
                    <div class="info-block">
                        <div class="chapter">
                            <div class="chapter-prev">
                            </div>
                            <div class="chapter-next">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>


