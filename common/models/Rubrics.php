<?php

namespace common\models;

use \yii\db\ActiveRecord;
use Yii;
/**
 * This is the model class for table "rubric".
 *
 * @property integer $rubric_id
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property integer $sort_order
 * @property string $seo_url
 */
class Rubrics extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rubrics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'meta_title', 'meta_description', 'seo_url'], 'required'],
            [['description'], 'string'],
            [['sort_order'], 'integer'],
            [['title', 'meta_title', 'meta_description', 'seo_url'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rubric_id' => 'ID',
            'title' => 'Название',
            'image' => 'Картинка',
            'description' => 'Описание',
            'meta_title' => 'Название(meta)',
            'meta_description' => 'Описание(meta)',
            'sort_order' => 'Сортировка',
            'seo_url' => 'seo',
        ];
    }
    public function afterValidate() {

    }

    public function getRubricUrl($absolute = false) {
        if($absolute) {
            $url = Yii::$app->urlManager->createAbsoluteUrl(['/rubric/default/single', 'rubric_id' => $this->rubric_id]);
        } else $url = Yii::$app->urlManager->createUrl(['/rubric/default/single', 'rubric_id' => $this->rubric_id]);

        return $url;
    }
}
