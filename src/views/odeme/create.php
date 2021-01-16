<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model emirhandeniz58\odeme\models\Odeme */

$this->title = 'Create Odeme';
$this->params['breadcrumbs'][] = ['label' => 'Odemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odeme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
