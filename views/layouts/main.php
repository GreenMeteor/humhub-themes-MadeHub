<?php

use yii\helpers\Html;
use humhub\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->pageTitle; ?></title>
    <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
		<script src="<?= Yii::getAlias(" @web"); ?>/js/html5shiv.js"></script>
		<link id = "ie-style" href = "<?= Yii::getAlias("@web"); ?>/css/ie.css" rel = "stylesheet" >
	<![endif]-->
        <!--[if IE 9]>
		<link id="ie9style" href="<?= Yii::getAlias(" @web"); ?>/css/ie9.css" rel="stylesheet">
	<![endif]-->
        <!-- start: render additional head (css and js files) -->
        <?= $this->render('head'); ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="app">

        <!-- aside -->
        <aside id="aside" class="app-aside modal fade">
            <div class="left">
                <div class="box bg-white">
                    <div class="navbar md-whiteframe-z1 no-radius blue">
                        <?= \humhub\widgets\SiteLogo::widget(); ?>
                    </div>
                    <div class="box-row">
                        <div class="box-cell scrollable hover">
                            <div class="box-inner">
                                <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                                    <!-- load navigation from widget -->
                                    <div class="b-b"></div>
                                    <ul>
                                        <div><a href="<?= Yii::$app->homeUrl; ?>" class="waves"><i class="material-icons md-dark m-r">dashboard</i><span><?= Yii::t('DashboardModule.base', 'Dashboard'); ?></span></a>
                                        </div>
                                        <div><a href="<?= Yii::getAlias(" @web "); ?>/directory/spaces" class="waves"><i class="material-icons md-dark m-r">weekend</i><span><?= Yii::t('AdminModule.base', 'Spaces'); ?></span></a>
                                        </div>
                                        <div><a href="<?= Yii::getAlias(" @web "); ?>/directory/members" class="waves"><i class="material-icons md-dark m-r">people</i><span><?= Yii::t('DirectoryModule.base', 'Members'); ?></span></a>
                                        </div>
                                        <div><a href="<?= Yii::getAlias(" @web "); ?>/directory/profiles" class="waves"><i class="material-icons md-dark m-r">graphic_eq</i><span><?= Yii::t('AdminModule.base', 'User posts'); ?></span></a>
                                        </div>
                                        <div class="b-b"></div>
                                        <div><a class="waves"><span>Help &amp; Feedback</span></a>
                                        </div>
                                        <div><a class="waves"><span>Privacy &amp; Terms</span></a>
                                        </div>
                                    </ul>
                                    <footer>
                                        <p class="copyright">2016 &copy;
                                            <?= Html::encode(Yii::$app->name); ?></p>
                                    </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- content -->
        <div id="content" class="app-content">
            <div class="box">

                <div class="navbar md-whiteframe-z1 no-radius blue">
                    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm waves"><i class="material-icons">menu</i></a>
                    <ul class="nav nav-sm navbar-tool pull-right">
                        <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
                            <?= \humhub\widgets\NotificationArea::widget(['widgets'=> [[\humhub\modules\notification\widgets\Overview::className(), [], ['sortOrder' => 10]], ]]); ?>

                            <?=\ humhub\modules\space\widgets\Chooser::widget(); ?>
                    </ul>
                </div>

                <div class="box-row">
                    <div class="box-cell">
                        <div class="box-inner padding">

                            <!-- start: show content (and check, if exists a sublayout -->
                            <?php if (isset($this->context->subLayout) && $this->context->subLayout != "") : ?>
                            <?= $this->render($this->context->subLayout, array('content' => $content)); ?>
                                <?php else: ?>
                                <?= $content; ?>
                                    <?php endif; ?>
                                    <!-- end: show content -->

                                    <?= \humhub\widgets\LayoutAddons::widget(); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>