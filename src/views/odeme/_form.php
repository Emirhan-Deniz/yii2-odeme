<?php
use emirhandeniz58\odeme\models\Kartlar;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model emirhandeniz58\odeme\models\Odeme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="odeme-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $karts=Kartlar::find()->all();
$listData=ArrayHelper::map($karts,'kartAdi','kartAdi'); ?>
    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cardAdi')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'tutar')->textInput() ?>

    <?= $form->field($model, 'tarih')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
