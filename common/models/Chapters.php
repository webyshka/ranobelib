<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chapters".
 *
 * @property integer $id
 * @property integer $rubric_id
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property string $seo_url
 * @property integer $sort_order
 */
class Chapters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chapters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rubric_id', 'title', 'description', 'seo_url', 'sort_order'], 'required'],
            [['rubric_id', 'sort_order'], 'integer'],
            [['title', 'description'], 'string'],
            [['meta_title', 'meta_description', 'seo_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rubric_id' => 'Rubric ID',
            'title' => 'Title',
            'description' => 'Description',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'seo_url' => 'Seo Url',
            'sort_order' => 'Sort Order',
        ];
    }
}
