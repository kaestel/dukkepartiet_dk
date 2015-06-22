<?php
global $action;
global $IC;
global $itemtype;

$items = $IC->getItems(array("itemtype" => $itemtype, "order" => "position ASC", "extend" => true));
?>
<div class="scene defaultList <?= $itemtype ?>List">
	<h1>Introductions</h1>

	<ul class="actions">
		<?= $JML->listNew(array("label" => "New introduction")) ?>
	</ul>

	<div class="all_items i:defaultList filters sortable"<?= $JML->jsData() ?>>
<?		if($items): ?>
		<ul class="items">
<?			foreach($items as $item): ?>
			<li class="item draggable item_id:<?= $item["id"] ?>">
				<div class="drag"></div>
				<h3><?= $item["name"] ?></h3>

				<?= $JML->listActions($item) ?>
			 </li>
<?			endforeach; ?>
		</ul>
<?		else: ?>
		<p>No introductions.</p>
<?		endif; ?>
	</div>

</div>
