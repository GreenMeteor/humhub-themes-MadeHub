<?php

use yii\widgets\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
?>

<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<div class="form-group">
    <div class="checkbox">
        <label>
            <?= $form->checkBox($model, 'enabled', ['readonly' => Setting::IsFixed('proxy.enabled')]); echo $model->getAttributeLabel('enabled'); ?>
        </label>
    </div>
</div>

<hr>
<div class="form-group">
    <?= $form->labelEx($model, 'server'); ?>
    <?= $form->textField($model, 'server', ['class' => 'form-control']); ?>
</div>

<div class="form-group">
    <?= $form->labelEx($model, 'port'); ?>
    <?= $form->textField($model, 'port', ['class' => 'form-control']); ?>
</div>

<?php if (defined('CURLOPT_PROXYUSERNAME')) { ?>
    <div class="form-group">
        <?= $form->labelEx($model, 'user'); ?>
        <?= $form->textField($model, 'user', ['class' => 'form-control']); ?>
    </div>
<?php } ?>

<?php if (defined('CURLOPT_PROXYPASSWORD')) { ?>
    <div class="form-group">
        <?= $form->labelEx($model, 'password'); ?>
        <?= $form->textField($model, 'password', ['class' => 'form-control']); ?>
    </div>
<?php } ?>

<?php if (defined('CURLOPT_NOPROXY')) { ?>
    <div class="form-group">
        <?= $form->labelEx($model, 'noproxy'); ?>
        <?= $form->textArea($model, 'noproxy', ['class' => 'form-control', 'rows' => '4']); ?>
    </div>
<?php } ?>

<hr>
<?= Html::submitButton(Yii::t('AdminModule.views_setting_proxy', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => ""]); ?>

<?= \humhub\widgets\DataSaved::widget(); ?>
<?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>