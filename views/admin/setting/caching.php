<?php

use yii\widgets\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
?>

<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<div class="form-group">
    <?= $form->labelEx($model, 'type'); ?>
    <?= $form->dropDownList($model, 'type', $cacheTypes, ['class' => 'form-control', 'readonly' => Setting::IsFixed('cache.class')]); ?>
    <br>
</div>

<div class="form-group">
    <?= $form->labelEx($model, 'expireTime'); ?>
    <?= $form->textField($model, 'expireTime', ['class' => 'form-control', 'readonly' => Setting::IsFixed('cache.expireTime')]); ?>
</div>

<hr>
<?= Html::submitButton(Yii::t('AdminModule.views_setting_caching', 'Save & Flush Caches'), ['class' => 'btn btn-primary', 'data-ui-loader' => ""]); ?>

<?= \humhub\widgets\DataSaved::widget(); ?>
<?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>