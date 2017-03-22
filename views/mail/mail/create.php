<?php

use yii;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

<div class="modal-dialog">
    <div class="modal-content">
        <?php $form = ActiveForm::begin(['id' => 'create-message-form']); ?>

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"
                id="myModalLabel"><?= Yii::t("MailModule.views_mail_create", "New message"); ?></h4>
        </div>
        <div class="modal-body">

            <?= $form->errorSummary($model); ?>

            <div class="form-group">
                <?= $form->field($model, 'recipient', ['inputOptions' => ['id' => 'recipient']]); ?>
            </div>

            <?= \humhub\modules\user\widgets\UserPicker::widget(array(
                'inputId' => 'recipient',
                'model' => $model,
                'attribute' => 'recipient',
                'userGuid' => Yii::$app->user->guid,
                'userSearchUrl' => Url::toRoute(['/mail/mail/search-user', 'keyword' => '-keywordPlaceholder-']),
                'placeholderText' => Yii::t('MailModule.views_mail_create', 'Add recipients'),
                'focus' => true,
            ));
            ?>

            <div class="form-group">
                <?php echo $form->field($model, 'title'); ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'message', ['inputOptions' => ['class' => 'form-control', 'id' => 'newMessageText']])->textarea(); ?>
                <?= \humhub\widgets\MarkdownEditor::widget(array('fieldId' => 'newMessageText')); ?>
            </div>

        </div>
        <div class="modal-footer">
            <?= \humhub\widgets\AjaxButton::widget([
                'label' => Yii::t('MailModule.views_mail_create', 'Send'),
                'ajaxOptions' => [
                    'type' => 'POST',
                    'beforeSend' => '$.proxy(function() { $(this).prop("disabled",true); },this)',
                    'success' => 'function(html){ $("#globalModal").html(html); }',
                    'url' => Url::toRoute(['/mail/mail/create']),
                ],
                'htmlOptions' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
            ?>

            <button type="button" class="btn btn-primary" data-dismiss="modal"><?= Yii::t('MailModule.views_mail_create', 'Close'); ?></button>

        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>

<script type="text/javascript">
    // set focus to input for space name
    $('#recipient').focus();
</script>
