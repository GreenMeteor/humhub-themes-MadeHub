<?php

use yii\helpers\Url;
?>
<?php echo $content; ?>


---

<?php if (isset(Yii::$app->view->params['showUnsubscribe']) && Yii::$app->view->params['showUnsubscribe'] === true) : ?>
    <span style="text-decoration: none; color: #a3a2a2;">
        <a href="<?php echo Url::to(['/user/account/emailing'], true) ?>" style="text-decoration: none; color: #a3a2a2;"><?php echo Yii::t('base', 'Unsubscribe') ?></a>
        • 
    </span> 
<?php endif; ?>

Powered by HumHub (https://www.humhub.org)
