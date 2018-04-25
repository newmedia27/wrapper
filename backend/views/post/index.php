<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
            ['class' => 'kartik\grid\ActionColumn'],

//            'id',


//            'category_id',
            [
                'label' => 'категории',
                'attribute' => 'category_id',
                'value' => function ($data) {
                    return $data->category['name'];
                },
            ],


            'name',
            'slug',

            [
                'label' => 'фото',
                'attribute' => 'image',

//                'format'=>'raw'

            ],

            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:H:i:s d-m-y']
            ],


            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:H:i:s d-m-y']
            ],


//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
