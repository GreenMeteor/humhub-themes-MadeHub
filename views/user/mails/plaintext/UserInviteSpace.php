<?= Yii::t('UserModule.mail', '{username} invited you to join "{space}" on {name}.', ['username' => $originator->displayName, 'space' => $space->name, 'name' => Yii::$app->name]); ?>


<?= Yii::t('UserModule.mail', 'Click here to create an account:'); ?>

<?= $registrationUrl; ?>