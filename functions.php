<?php
function includeIfExists($file) {
	if (file_exists($file)) {
		include($file);
	} else {
		echo "Datei nicht gefunden: $file";
	}
}

function printHeader($title) {
	echo '<header>
		<h1>' . htmlspecialchars($title) . '</h1>
		<nav>
			<ul>
				<li><a href="index.php">Startseite</a></li>
				<!-- <li><a href="Übersicht.html">Projekte</a></li> -->
			</ul>
		</nav>
	</header>';
}
?>