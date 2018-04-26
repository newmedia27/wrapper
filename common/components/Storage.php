<?php
/**
 * Created by PhpStorm.
 * User: jart
 * Date: 26.04.2018
 * Time: 12:56
 */

namespace common\components;


use yii\base\Component;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use Yii;

class Storage extends Component implements StorageInterface
{
    private $fileName;

    public function saveUploadedFile(UploadedFile $file)
    {
        $path = $this->preparePath($file);
        if ($path && $file->saveAs($path)){
            return $this->fileName;
        }
    }


    public function preparePath(UploadedFile $file)
    {
        $this->fileName=$this->getFileName($file);
        $path = $this->GetStoragePath() . $this->fileName;

        $path = FileHelper::normalizePath($path);
        if (FileHelper::createDirectory(dirname($path))){
            return $path;
        }
    }


    public function getFileName(UploadedFile $file){
        $hash = sha1_file($file->tempName);

        $name = substr_replace($hash, '/',2,0);
        $name = substr_replace($name, '/',5,0);
        return $name .'.'.$file->extension;
    }
    public function getStoragePath()
    {
        return Yii::getAlias(\Yii::$app->params['storagePath']);
    }

    public function getFile(string $filename)
    {
        // TODO: Implement getFile() method.
    }
}