<?php
/**
 * Created by PhpStorm.
 * User: jart
 * Date: 25.04.2018
 * Time: 11:53
 */

namespace common\models;


use  yii\base\Model;


class Images extends Model
{
    public $image;
    public function rules()
    {
        return [
            [['image'], 'file', 'extensions' => ['jpg', 'jpeg', 'gif', 'png'],]
        ];
    }

   public function save()
   {
       return 1;
   }
}