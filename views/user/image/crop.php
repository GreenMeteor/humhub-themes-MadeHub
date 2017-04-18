<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<div class="modal-dialog modal-dialog-small animated fadeIn">
    <div class="modal-content">
        <?php $form = ActiveForm::begin([]); ?>
        <?= $form->hiddenField($model, 'cropX', ['id' => 'cropX']); ?>
        <?= $form->hiddenField($model, 'cropY', ['id' => 'cropY']); ?>
        <?= $form->hiddenField($model, 'cropW', ['id' => 'cropW']); ?>
        <?= $form->hiddenField($model, 'cropH', ['id' => 'cropH']); ?>

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"
                id="myModalLabel"><?= $title; ?></h4>
        </div>
        <div class="modal-body">
            <style>
                /* Dirty Workaround against bootstrap and jcrop */
                img {
                    max-width: none;
                }
            </style>

            <div id="cropimage">
                <?php
                echo \yii\helpers\Html::img($profileImage->getUrl('_org'), ['id' => 'foobar']);
                echo raoul2000\jcrop\JCropWidget::widget([
                    'selector' => '#foobar',
                    'pluginOptions' => [
                        'aspectRatio' => $model->aspectRatio,
                        'minSize' => [50, 50],
                        'setSelect' => $model->cropSetSelect,
                        'bgColor' => 'black',
                        'boxWidth' => '440',
                        'bgOpacity' => '0.5',
                        'onChange' => new yii\web\JsExpression('function(c){ $("#cropX").val(c.x);$("#cropY").val(c.y);$("#cropW").val(c.w);$("#cropH").val(c.h); }')
                    ]
                ]);
                ?>
            </div>


        </div>
        <div class="modal-footer">
            <?php
            echo \humhub\widgets\AjaxButton::widget([
                'label' => Yii::t('UserModule.views_profile_cropBannerImage', 'Save'),
                'ajaxOptions' => [
                    'type' => 'POST',
                    'beforeSend' => new yii\web\JsExpression('function(){ setModalLoader(); }'),
                    'success' => new yii\web\JsExpression('function(html){ $("#globalModal").html(html); }'),
                    'url' => Url::to(['/user/image/crop', 'userGuid' => $user->guid, 'type' => $type]),
                ],
                'htmlOptions' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
            ?>
            <button type="button" class="btn btn-primary"
                    data-dismiss="modal"><?= Yii::t('UserModule.views_profile_cropBannerImage', 'Close'); ?></button>

            <?= \humhub\widgets\LoaderWidget::widget(['id' => 'crop-loader', 'cssClass' => 'loader-modal hidden']); ?>
        </div>

        <?= \humhub\widgets\DataSaved::widget(); ?>
        <?php ActiveForm::end(); ?>
    </div>

</div>