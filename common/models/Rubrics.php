<?php

namespace common\models;

use \yii\db\ActiveRecord;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rubric_id' => 'Rubric ID',
            'title' => 'Title',
            'description' => 'Description',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'sort_order' => 'Sort Order',
            'seo_url' => 'Seo Url',
        ];
    }
}
