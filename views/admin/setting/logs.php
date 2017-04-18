<?php

use yii\widgets\ActiveForm;
use yii\helper\Html;
?>

<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

<p><?= Yii::t('AdminModule.views_setting_logs',
	'Old logs can significantly increase the size of your database while providing little information.') ?>
</p>
<p><?= Yii::t('AdminModule.views_setting_logs',
	'Currently there are {count} records in the database dating from {dating}.',
	['count' => $logsCount, 'dating' => $dating])?>
</p>
<br>

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<div class="form-group">
    <?= $form->labelEx($model, 'logsDateLimit'); ?>
    <?= $form->dropDownList($model, 'logsDateLimit', $limitAgeOptions, ['class' => 'form-control']); ?>
</div>
<hr>

<?= Html::submitButton(Yii::t('AdminModule.views_setting_logs', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => ""]); ?>

<?= \humhub\widgets\DataSaved::widget(); ?>
<?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>