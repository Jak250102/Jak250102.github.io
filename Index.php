<?php
include __DIR__ . '/functions.php';
printHeader("Homepage Jannik Muy");

// Hier funktioniert es, weil includeIfExists() den kompletten Pfad baut
includeIfExists('/HTML/index.html');
includeIfExists('/HTML/footer.html');
?> 