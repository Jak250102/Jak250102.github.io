<?php
include("ASv4/FolienListe.php");

// Aktive Folie bestimmen (Standard: 0)
$folieAktiv = isset($_GET['folie']) ? intval($_GET['folie']) : 0;

// Folie anzeigen
if (isset($Folien[$folieAktiv])) {
	include($Folien[$folieAktiv]);
}

// Navigation-Buttons vertikal rechts positionieren
echo '
<style>
.folien-nav-vert {
    position: fixed;
    top: 50%;
    right: 32px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 18px;
    z-index: 9999;
}
.folien-nav-vert a {
    font-size: 2.2rem;
    padding: 14px 28px;
    border-radius: 12px;
    background: #2196f3;
    color: #fff;
    text-decoration: none;
    border: none;
    box-shadow: 0 2px 8px #2196f355;
    text-align: center;
    transition: background 0.2s;
}
.folien-nav-vert a:hover {
    background: #1769aa;
}
</style>
<div class="folien-nav-vert">';
$folienCount = count($Folien);
if ($folieAktiv > 0) {
	$prev = $folieAktiv - 1;
	echo '<a href="?folie=' . $prev . '">&lt;</a>';
} else {
	// Am Anfang: zum letzten
	echo '<a href="?folie=' . ($folienCount - 1) . '">&lt;</a>';
}
if ($folieAktiv < $folienCount - 1) {
	$next = $folieAktiv + 1;
	echo '<a href="?folie=' . $next . '">&gt;</a>';
} else {
	// Am Ende: zur ersten
	echo '<a href="?folie=0">&gt;</a>';
}
echo '</div>';
