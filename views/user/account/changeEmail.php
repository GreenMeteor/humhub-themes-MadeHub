<?php

use yii\widgets\ActiveForm;
use yii\helper\Html;
?>

<?php $this->beginContent('@user/views/account/_userProfileLayout.php') ?>
    <div class="help-block">
         <?= Yii::t('UserModule.views_account_changeEmail', 'Your current E-mail address is <b>{email}</b>. You can change your current E-mail address here.', ['email' => Html::encode(Yii::$app->user->getIdentity()->email)]); ?>
    </div>
    <?php $form = ActiveForm::begin(); ?>

    <?php if ($model->isAttributeRequired('currentPassword')): ?>
        <?= $form->field($model, 'currentPassword')->passwordInput(['maxlength' => 45]); ?>
    <?php endif; ?>

    <?= $form->field($model, 'newEmail')->textInput(['maxlength' => 45]); ?>

    <hr>
    <?= Html::submitButton(Yii::t('UserModule.views_account_changeEmail', 'Save'), array('class' => 'btn btn-primary', 'data-ui-loader' => '')); ?>

    <!-- show flash message after saving -->
    <?= \humhub\widgets\DataSaved::widget(); ?>

    <?php ActiveForm::end(); ?>
<?php $this->endContent(); ?>