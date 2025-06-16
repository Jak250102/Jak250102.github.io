<?php
include("ASv4/FolienListe.php");


// Aktive Folie bestimmen (Standard: 0)
$folieAktiv = isset($_GET['folie']) ? intval($_GET['folie']) : 0;

// Folie anzeigen
if (isset($Folien[$folieAktiv])) {
	include($Folien[$folieAktiv]);
}

// Navigation-Button anzeigen
echo '<div style="text-align:right; margin: 32px 0;">';
if ($folieAktiv > 0) {
	$prev = $folieAktiv - 1;
	echo '<a href="?folie=' . $prev . '" style="font-size:2rem; padding:10px 24px; border-radius:8px; background:#2196f3; color:#fff; text-decoration:none; border:none; box-shadow:0 2px 8px #2196f355; margin-right:12px;">&lt;</a>';
}
if ($folieAktiv < count($Folien) - 1) {
	$next = $folieAktiv + 1;
	echo '<a href="?folie=' . $next . '" style="font-size:2rem; padding:10px 24px; border-radius:8px; background:#2196f3; color:#fff; text-decoration:none; border:none; box-shadow:0 2px 8px #2196f355;">&gt;</a>';
}
echo '</div>';

?>