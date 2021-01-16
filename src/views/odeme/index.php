<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel emirhandeniz58\odeme\models\OdemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Odemes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odeme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Odeme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'email:email',
            'cardAdi',
            'tutar',
            //'tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
