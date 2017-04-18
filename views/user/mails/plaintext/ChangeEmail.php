<?php

use yii\helpers\Html;
?>

<?= strip_tags(Yii::t('UserModule.views_mails_ChangeEmail', '<strong>Confirm</strong></strong> your new email address')); ?>


<?= strip_tags(Yii::t('UserModule.views_mails_ChangeEmail', 'Hello')); ?> <?= Html::encode($user->displayName); ?>,

<?= strip_tags(str_replace("<br>", "\n", Yii::t('UserModule.views_mails_ChangeEmail', 'You have requested to change your e-mail address.<br>Your new e-mail address is {newemail}.<br><br>To confirm your new e-mail address please click on the button below.', array('{newemail}' => Html::encode($newEmail))))); ?>


<?= strip_tags(Yii::t('UserModule.views_mails_ChangeEmail', 'Confirm')); ?>: <?= urldecode($approveUrl); ?>