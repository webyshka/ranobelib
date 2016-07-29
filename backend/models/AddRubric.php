<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * AddRubric
 */
class AddRubric extends Model
{
    public $name;
    public $description;
    public $sort_order;
    public $seo_title;
    public $seo_description;
    public $seo_url;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['description', 'trim'],
            ['sort_order', 'integer'],

            ['seo_title', 'trim'],
            ['seo_description', 'trim'],
            ['seo_url', 'trim'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
