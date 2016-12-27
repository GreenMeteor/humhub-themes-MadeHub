<?php
use \humhub\compat\CActiveForm;
?>
	<?php if (count($languages) > 1) : ?>
		<div class="language" style="padding: 8px 16px;text-align: center; ">
			<?php $form = CActiveForm::begin(['id' => 'choose-language-form']); ?>
			<?php echo $form->dropDownList($model, 'language', $languages, array('onChange' => 'this.form.submit()')); ?>
			<?php CActiveForm::end(); ?>
		</div>
	<?php endif; ?>