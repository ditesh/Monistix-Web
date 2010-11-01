<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('server/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

	<?php foreach($form->getWidgetSchema()->getPositions() as $widgetName): ?>
	<?php if ($form[$widgetName]->hasError()): ?>
	<?php echo "<li>" . $form[$widgetName]->renderLabelName()." ".strtolower($form[$widgetName]->getError())."</li>" ?>
	<?php endif ?>
	<?php endforeach ?>

	<?php if (!$form->getObject()->isNew()): ?>
	<input type="hidden" name="sf_method" value="put" />
	<?php endif; ?>

	<?php foreach ($form as $widget): ?>

		<?php if ($widget->getName() == "_csrf_token"): ?>
		<?php continue ?>
		<?php endif ?>

		<div class="form-label">
			<?php echo $widget->renderLabel() ?>
		</div>
		<div class="form-widget">
			<?php echo $widget->render()  ?>
		</div>

	<?php endforeach ?>

	<?php if (!$form->getObject()->isNew()): ?>
	&nbsp;<input type="button" class="button" value="Delete" <?php echo link_to('Delete', 'server/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>>
	<?php endif; ?>

	<?php echo $form[$form->getCSRFFieldName()]->render() ?>

	<input class="button" type="submit" value="Save">

</form>
