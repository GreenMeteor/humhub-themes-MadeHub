<?php

use yii\widgets\ActiveForm;
use yii\helper\Html;
?>

<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

<p><?= Yii::t('AdminModule.views_setting_statistic', 'You can add an statistics HTML code snippet - which will added to all rendered pags.')?></p>
<br>

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<div class="form-group">
    <?= $form->labelEx($model, 'trackingHtmlCode'); ?>
    <?= $form->textArea($model, 'trackingHtmlCode', ['class' => 'form-control', 'rows' => '8']); ?>
</div>
<hr>

<?= Html::submitButton(Yii::t('AdminModule.views_setting_statistic', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => ""]); ?>

<?= \humhub\widgets\DataSaved::widget(); ?>
<?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>