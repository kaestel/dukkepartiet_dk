<?php
global $action;
global $IC;
global $itemtype;

$all_items = $IC->getItems(array("itemtype" => $itemtype, "order" => "position ASC"));
?>
<div class="scene defaultList <?= $itemtype ?>List">
	<h1>Statsministerkandidat</h1>

	<ul class="actions i:actions">
		<?= $HTML->link("New Statsministerkandidat", "/admin/".$itemtype."/new", array("class" => "button primary key:n", "wrapper" => "li.new")) ?>
	</ul>

	<div class="all_items i:defaultList taggable filters sortable">
<?		if($all_items): ?>
		<ul class="items targets:draggable" data-save-order="/admin/<?= $itemtype ?>/updateOrder">
<?			foreach($all_items as $item): 
				$item = $IC->extendItem($item); ?>
			<li class="item draggable item_id:<?= $item["id"] ?>">
				<div class="drag"></div>
				<h3><?= $item["name"] ?></h3>

				<ul class="actions">
					<?= $HTML->link("Edit", "/admin/".$itemtype."/edit/".$item["id"], array("class" => "button", "wrapper" => "li.edit")) ?>
					<?= $HTML->deleteButton("Delete", "/admin/cms/delete/".$item["id"], array("js" => true)) ?>
					<?= $HTML->statusButton("Enable", "Disable", "/admin/cms/status", $item, array("js" => true)) ?>
				</ul>
			 </li>
<?			endforeach; ?>
		</ul>
<?		else: ?>
		<p>No candidates.</p>
<?		endif; ?>
	</div>

</div>
