<?php
function includeIfExists(string $relPath) {
    // Erzeuge hier den tatsächlichen Pfad zur Datei
    $fullPath = __DIR__ . $relPath;

    if (file_exists($fullPath)) {
        include $fullPath;
    } else {
        echo "Datei nicht gefunden: $fullPath";
    }
}

function printHeader($title) {
	echo '<header>
		<h1>' . htmlspecialchars($title) . '</h1>
		<nav>
			<ul>
				<li><a href="/index.php">Startseite</a></li>
			</ul>
		</nav>
	</header>';
}
?>