<?php

/* @var $this yii\web\View */

$this->title = 'All Public';
?>
<div class="site-index">

    <div class="container">
        <div class="row">

            <?php foreach ($posts as $post):?>

            <h2><?= $post->category->name?></h2>
            <h2><?=  date('H:i:s d-m-y',$post->created_at)?></h2>

                <?= \yii\helpers\Html::img($post->getUploadUrl($post->image), ['class' => 'img-thumbnail']) ?>

            <p><?= $post->name?></p>

                <a href="<?= \yii\helpers\Url::to(['site/view','id'=>$post->id])?>"><?= $post->name  ?></a>
                <br>


        <?php endforeach; ?>
        </div>
    </div>

</div>
