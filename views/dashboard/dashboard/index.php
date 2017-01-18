<div class="row">
	<div class="col-sm-8">
		<?php
		if ($showProfilePostForm) {
			echo \humhub\modules\post\widgets\Form::widget(['contentContainer' => \Yii::$app->user->getIdentity()]);
		}
		?>
		<?php
		echo \humhub\modules\content\widgets\Stream::widget([
			'streamAction' => '//dashboard/dashboard/stream',
			'showFilters' => true,
			'messageStreamEmpty' => Yii::t('DashboardModule.views_dashboard_index', '<b>Your dashboard is empty!</b><br>Post something on your profile or join some spaces!'),
		]);
		?>
	</div>
	<div class="col-sm-4">
		<?php
		echo \humhub\modules\dashboard\widgets\Sidebar::widget(['widgets' => [
			[\humhub\modules\activity\widgets\Stream::className(), ['streamAction' => '/dashboard/dashboard/stream'], ['sortOrder' => 150]],
		]]);
		?>
	</div>
</div>
