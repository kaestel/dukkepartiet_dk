<?php
global $action;
global $IC;
global $itemtype;
global $model;
?>
<div class="scene defaultNew">
	<h1>Ny vision</h1>

	<ul class="actions">
		<?= $JML->newList(array("label" => "List")) ?>
	</ul>

	<?= $model->formStart("save", array("class" => "i:defaultNew labelstyle:inject")) ?>
		<fieldset>
			<?= $model->input("name") ?>
			<?= $model->input("vision", array("class" => "autoexpand")) ?>
		</fieldset>

		<?= $JML->newActions() ?>
	<?= $model->formEnd() ?>

	</form>

</div>
