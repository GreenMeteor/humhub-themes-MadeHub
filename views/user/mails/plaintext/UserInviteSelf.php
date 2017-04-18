<?php

use yii\helpers\Html;
?>

<?= mb_strtoupper(Yii::t('UserModule.views_mails_UserInviteSelf', 'Welcome to %appName%', array('%appName%' => Html::encode(Yii::$app->name)))); ?>


<?= strip_tags(Yii::t('UserModule.views_mails_UserInviteSelf', 'Welcome to %appName%. Please click on the button below to proceed with your registration.', array('%appName%' => Html::encode(Yii::$app->name)))); ?>


<?= strip_tags(Yii::t('UserModule.views_mails_UserInviteSelf', 'Sign up')); ?>: <?= $registrationUrl; ?>