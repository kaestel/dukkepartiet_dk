<?php
global $action;

$IC = new Item();
$itemtype = "action";

$items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "order" => "position ASC"));
?>
<div class="scene i:action action">
	<h2>Aktioner</h2>

<?		if($items): ?>
		<ul class="items">
<?			foreach($items as $item): 
				$item = $IC->extendItem($item); ?>
			<li class="item image_id:<?= $item["item_id"] ?>">
				<h3><?= $item["name"] ?></h3>
				<p><?= $item["description"] ?></p>
				<a href="<?= $item["link"] ?>"><?= $item["link"] ?></a>
			</li>
<?			endforeach; ?>
			<li class="more"><a href="http://youtube.com">flere film her</a></li>
		</ul>
<?		endif; ?>
	</div>



	<!-- Video
	<div class="video">
		<h2>Video</h2>
		<ul class="slides">
			<li class="slide">
				<div class="play_bn"></div>
				<div id="player1" class="youtube"></div>
			</li>
			<li>
				<div class="play_bn"></div>
			</li>
			<li>
				<div class="play_bn"></div>
			</li>
			<li>
				<div class="play_bn"></div>
			</li>
		</ul>
		<ul class="actions">
			<li class="next">Næste</li>
			<li class="previous">Forrige</li>
		</ul>

	</div>
	 -->

</div>