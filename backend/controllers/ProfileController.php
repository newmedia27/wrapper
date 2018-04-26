<?php
/**
 * Created by PhpStorm.
 * User: jart
 * Date: 26.04.2018
 * Time: 11:32
 */

namespace backend\controllers;


use common\models\Images;
use yii\web\Controller;
use yii\web\UploadedFile;

class ProfileController extends Controller
{
    public function actionUploadImage($object)
    {
        $model = new Images();
        $model->image = UploadedFile::getInstance($model, 'image');


        if ($model->validate()) {
            $object->image = \Yii::$app->storage->saveUploadedFile($model->image);

           debug($object->image);
            die;
        }


        debug($model->getErrors());

    }



}