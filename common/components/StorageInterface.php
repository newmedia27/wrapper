<?php
/**
 * Created by PhpStorm.
 * User: jart
 * Date: 26.04.2018
 * Time: 12:32
 */

namespace common\components;

use yii\web\UploadedFile;

/**
 * Interface StorageInterface
 * @package common\components
 */
interface StorageInterface
{
    public function saveUploadedFile(UploadedFile $file);

    public function getFile(string $filename);

}