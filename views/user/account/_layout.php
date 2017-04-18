<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?= \humhub\modules\user\widgets\AccountMenu::widget(); ?>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <?= $content; ?>
            </div>
        </div>
    </div>
</div>