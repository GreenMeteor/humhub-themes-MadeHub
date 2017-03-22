<?php

use yii;
 humhub\assets\TabbedFormAsset::register($this);
?>

<div class="panel-heading">
    <?= Yii::t('UserModule.account', '<strong>User</strong> settings'); ?> <?= \humhub\widgets\DataSaved::widget(); ?>
</div>

<?php // humhub\modules\user\widgets\AccountSettingsMenu::widget(); ?>

<div class="panel-body">
    <?php $content; ?>
</div>
