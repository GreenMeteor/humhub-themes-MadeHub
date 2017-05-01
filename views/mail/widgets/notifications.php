<?php
use yii\helpers\Html;
use yii\helpers\Url;
use humhub\modules\mail\Assets;
$this->registerjsVar('mail_loadMessageUrl', Url::to(['/mail/mail/show', 'id' => '-messageId-']));
$this->registerjsVar('mail_viewMessageUrl', Url::to(['/mail/mail/index', 'id' => '-messageId-']));
Assets::register($this);
?>
<li>
	<a id="icon-messages" class="waves" data-toggle="modal" data-target="#dropdown-messages"><i class="material-icons">mail</i>
		<b id="badge-messages" style="display:none;" class="label label-xs bg-danger up label-notification">1</b>
	</a>
</li>
	<div class="modal fade" id="dropdown-messages" data-backdrop="false"></div>

<script type="text/javascript">

	/**
	 * Refresh New Mail Message Count (Badge)
	 */
	reloadMessageCountInterval = 60000;
	setInterval(function () {
		jQuery.getJSON("<?php echo Url::to(['/mail/mail/get-new-message-count-json']); ?>", function (json) {
			setMailMessageCount(parseInt(json.newMessages));
		});
	}, reloadMessageCountInterval);

	setMailMessageCount(<?php echo $newMailMessageCount; ?>);


	/**
	 * Sets current message count
	 */
	function setMailMessageCount(count) {
		// show or hide the badge for new messages
		if (count == 0) {
			$('#badge-messages').css('display', 'none');
		} else {
			$('#badge-messages').empty();
			$('#badge-messages').append(count);
			$('#badge-messages').fadeIn('fast');
		}
	}



	// open the messages menu
	$('#icon-messages').click(function () {

		// remove all <li> entries from dropdown
		$('#dropdown-messages').find('li').remove();
		$('#dropdown-messages').find('ul').remove();

		// append title and loader to dropdown
		$('#dropdown-messages').append('<div class="right w264 bg-white md-whiteframe-z2"><div class="box"><div class="p p-h-md b-b"><a data-dismiss="modal" class="pull-right text-muted-lt text-2x m-t-n inline p-sm">&times;</a><strong><?php echo Yii::t('MailModule.widgets_views_mailNotification', 'Messages'); ?></strong></div><div class="box-row"><div class="box-cell"><div class="box-inner"><div class="list-group no-radius no-borders"><ul class="media-list"><li id="loader_messages"><div class="loader"><div class="sk-spinner sk-spinner-three-bounce"><div class="sk-bounce1"></div><div class="sk-bounce2"></div><div class="sk-bounce3"></div></div></div></li></ul></div></div></div></div><div class="p-sm b-t"><a href="<?php echo Url::to(['/mail/mail/index']); ?>" class="md-btn md-flat waves"><?php echo Yii::t('MailModule.widgets_views_mailNotification', 'Inbox'); ?></a><a href="<?php echo Url::to(['/mail/mail/create']); ?>" class="md-btn md-flat text-danger waves" style="float: right" data-target="#globalModal"><i class="material-icons md-18">edit</i> <?php echo Yii::t('MailModule.widgets_views_mailNotification', 'Compose'); ?></a></div></div></div>');

		$.ajax({
			'type': 'GET',
			'url': '<?php echo Url::to(['/mail/mail/notification-list']); ?>',
			'cache': false,
			'data': jQuery(this).parents("form").serialize(),
			'success': function (html) {
				jQuery("#loader_messages").replaceWith(html);
		}});
	})
</script>

