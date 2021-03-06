<?php
global $action;

$IC = new Items();
$itemtype = "primeminister";

$items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "order" => "position ASC", "extend" => true));
?>

<div class="scene primeminister i:primeminister red" id="about">

	<div class="introduction">
		<h2>Er du danmarks næste Statsministerkandidat?</h2>
		<p>Dukkepartiet søger kandidater til rollen som Danmarks næste statsministerkandidat. Derfor har vi brug for DIG. Send os en video og fortæl, hvorfor DU er Dukkepartiets kandidat <a href="/img/jobopslag.pdf">(se jobopslaget)</a>.</p>
		<p class="send"><a href="mailto:kontakt@dukkepartiet.dk?subject=Statsministerkandidat">Indsend</a></p>
		<p>Optag din tale på computer eller smartphone og<br>send filen direkte til os. Masker kan printes <a href="https://dukkepartiet.dk/kandidaterne/25">her</a>. <br>Du kan også uploade filen på Youtube og sende os linket.</p>
	</div>

	<h3>Kandidater</h3>
<?	if($items): ?>
	<ul class="items">
<?		foreach($items as $item): ?>
		<li class="item">
			<?
				$url = $item["url"];
				parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
				$id = $my_array_of_vars['v'];
			?>
			<div class="image image_id:<?= $id ?>"></div>
			<h3><?= $item["name"] ?></h3>
			<a href="<?= $url ?>"><?= $id ?></a>
		</li>
<?		endforeach; ?>
	</ul>

<?	endif; ?>

</div>