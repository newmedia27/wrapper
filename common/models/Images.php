<?php
/**
 * Created by PhpStorm.
 * User: jart
 * Date: 25.04.2018
 * Time: 11:53
 */

namespace common\models;


use mongosoft\file\UploadImageBehavior;
use yii\base\Model;


class Images extends Model
{
    public function rules()
    {
        return [
            ['image', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'image',
                'scenarios' => ['insert', 'update'],
                'placeholder' => '@common/img/No-image-available.jpg',
                'path' => '@webroot/upload/user/{id}',
                'url' => '@web/upload/user/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'quality' => 90],
                    'preview' => ['width' => 200, 'height' => 200],
                    'news_thumb' => ['width' => 200, 'height' => 200, 'bg_color' => '000'],
                ],
            ],
        ];
    }


    public function upload()
    {

        if ($this->validate()){




        }

    }
}