<?= Yii::t('UserModule.mail', '{username} invited you to {name}.', ['username' => $originator->displayName, 'name' => Yii::$app->name]); ?>


<?= Yii::t('UserModule.mail', 'Click here to create an account:'); ?>

<?= $registrationUrl; ?>