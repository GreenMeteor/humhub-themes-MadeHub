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
	<title><?php echo $this->pageTitle; ?></title>
	<meta name="description" content="FYV - A simply elegant social networking site, for all those that wish to join it.">
	<?= Html::csrfMetaTags() ?>
	<?php $this->head() ?>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo Yii::getAlias(" @web"); ?>/js/html5shiv.js"></script>
		<link id = "ie-style" href = "<?php echo Yii::getAlias("@web"); ?>/css/ie.css" rel = "stylesheet" >
	<![endif]-->
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo Yii::getAlias(" @web"); ?>/css/ie9.css" rel="stylesheet">
	<![endif]-->
	<!-- start: render additional head (css and js files) -->
	<?php echo $this->render('head'); ?>
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-57x57.png' ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-60x60.png' ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-72x72.png' ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-76x76.png' ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-114x114.png' ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-120x120.png' ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-144x144.png' ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-152x152.png' ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->theme->getBaseUrl() . '/ico/apple-icon-180x180.png' ?>">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $this->theme->getBaseUrl() . '/ico/android-icon-192x192.png' ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->theme->getBaseUrl() . '/ico/favicon-32x32.png' ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->theme->getBaseUrl() . '/ico/favicon-96x96.png' ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->theme->getBaseUrl() . '/ico/favicon-16x16.png' ?>">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#1976d2">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#1976d2">
</head>

<body>
<?php $this->beginBody() ?>
<div class="app">

	<!-- aside -->
	<aside id="aside" class="app-aside modal fade"><div class="left"><div class="box bg-white">
		<div class="navbar md-whiteframe-z1 no-radius blue">
			<?php echo \humhub\widgets\SiteLogo::widget(); ?>
		</div>
		<div class="box-row"><div class="box-cell scrollable hover"><div class="box-inner">
				<?php echo \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
				<li class="b-b"></li>
				<li><a href="<?php echo Yii::getAlias("@web"); ?>https://futayuriverse.com/" class="waves"><i class="material-icons md-dark m-r">home</i><span><?php echo Yii::t('AdminModule.base', 'Home'); ?></span></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl; ?>" class="waves"><i class="material-icons md-dark m-r">dashboard</i><span><?php echo Yii::t('DashboardModule.base', 'Dashboard'); ?></span></a></li>
				<li><a href="<?php echo Yii::getAlias("@web"); ?>/directory/spaces" class="waves"><i class="material-icons md-dark m-r">weekend</i><span><?php echo Yii::t('AdminModule.base', 'Spaces'); ?></span></a></li>
				<li><a href="<?php echo Yii::getAlias("@web"); ?>/directory/members" class="waves"><i class="material-icons md-dark m-r">people</i><span><?php echo Yii::t('DirectoryModule.base', 'Members'); ?></span></a></li>
				<li><a href="<?php echo Yii::getAlias("@web"); ?>/directory/profiles" class="waves"><i class="material-icons md-dark m-r">graphic_eq</i><span><?php echo Yii::t('AdminModule.base', 'User posts'); ?></span></a></li>
				<li class="b-b"></li>
				<li><a href="<?php echo Yii::getAlias("@web"); ?>mailto:admin@futayuriverse.com" class="waves"><span>Help &amp; Feedback</span></a></li>
				<!-- <li><a class="waves"><i class="material-icons md-dark m-r">report_problem</i><span>Privacy &amp; Terms</span></a></li> -->				<li><a href="<?php echo Yii::getAlias("@web"); ?>/p/faq" class="waves"><i class="material-icons md-dark m-r">help</i><span><?php echo Yii::t('AdminModule.base', 'FAQ'); ?></span></a></li>
			</ul></nav>
			        <li class="b-b"></li>
			<footer>
				<!-- <?= humhub\widgets\LanguageChooser::widget(); ?> -->
				<p class="copyright">2016 &copy; <?php echo Html::encode(Yii::$app->name); ?></p>
			</footer>
		</div></div></div>
	</div></div></aside>

	<!-- content -->
	<div id="content" class="app-content"><div class="box">

	<div class="navbar md-whiteframe-z1 no-radius blue">
		<a data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm waves"><i class="material-icons">menu</i></a>
		<ul class="nav nav-sm navbar-tool pull-right">
			<?php echo \humhub\widgets\TopMenuRightStack::widget(); ?>
			<?php
            echo \humhub\widgets\NotificationArea::widget(['widgets' => [
                [\humhub\modules\notification\widgets\Overview::className(), [], ['sortOrder' => 10]],
            ]]);
            ?>

					<?php echo \humhub\modules\space\widgets\Chooser::widget(); ?>
		</ul>
	</div>

	<div class="box-row"><div class="box-cell"><div class="box-inner padding">

		<!-- start: show content (and check, if exists a sublayout -->
		<?php if (isset($this->context->subLayout) && $this->context->subLayout != "") : ?>
			<?php echo $this->render($this->context->subLayout, array('content' => $content)); ?>
		<?php else {
    : ?>
			<?php echo $content;
}
?>
		<?php endif; ?>
		<!-- end: show content -->

		<?= \humhub\widgets\LayoutAddons::widget(); ?>

	</div></div></div>

	</div></div>

</div>

<?php $this->endBody() ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58619a11ddb8373fd2b3e052/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
<?php $this->endPage() ?>
