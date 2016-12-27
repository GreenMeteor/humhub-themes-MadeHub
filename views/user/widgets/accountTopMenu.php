<?php
use \yii\helpers\Html;
use \yii\helpers\Url;
?>
<?php if (Yii::$app->user->isGuest): ?>
	<div style="margin-bottom: 0px; padding: 8px;"><a href="<?php echo Url::toRoute('/user/auth/login'); ?>" data-target="#globalModal" class="md-btn md-flat text-danger waves p" style="display: block;">Login</a></div>
	<nav id="nav" ui-nav><ul class="nav">
<?php else: ?>
	<a class="waves" style="margin-bottom: 0px; padding: 8px 16px; display: block; height: 56px; position: relative; border-bottom: 1px solid #dddee0;">
		<img src="<?php echo Yii::$app->user->getIdentity()->getProfileImage()->getUrl(); ?>" class="pull-left w-40 m-r img-rounded">
		<div class="clear">
			<span class="font-bold block"><?php echo Html::encode(Yii::$app->user->getIdentity()->displayName); ?></span>
			<span class="clear text-ellipsis text-xs"><?php echo Html::encode(Yii::$app->user->getIdentity()->profile->title); ?></span>
		</div>
	</a>
	<nav id="nav" ui-nav><ul class="nav">
		<?php foreach ($this->context->getItems() as $item): ?>
			<?php if ($item['label'] == '---'): ?>
			<?php else: ?>
				<li><a href="<?php echo $item['url']; ?>" class="waves"><?php echo $item['icon'] . ' ' .$item['label']; ?></a></li>
			<?php endif; ?>
		<?php endforeach; ?>
<?php endif; ?>