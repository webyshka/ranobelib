<?php
namespace backend\models;

use yii\base\Model;
use common\models\Rubrics;

/**
 * AddRubric
 */
class AddRubric extends Model {

    public $title;
    public $description;
    public $sort_order;
    public $meta_title;
    public $meta_description;
    public $seo_url;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title','description','meta_title','meta_description','seo_url'], 'trim'],
            ['title', 'required'],
            ['sort_order', 'integer'],
        ];
    }

    public function add() {
        $rubric = new Rubrics();
        $rubric->title = $this->title;
        $rubric->seo_url = $this->seo_url;
        $rubric->description = $this->description;
        $rubric->meta_title = $this->meta_title;
        $rubric->meta_description = $this->meta_description;

        if($rubric->save()) {
            return $rubric;
        }
    }
}
