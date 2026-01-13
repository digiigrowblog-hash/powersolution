<?php
$f = 'd:/powersolution/data/data.php';
$lines = file($f);
$ln = 1239;
$line = $lines[$ln - 1];
echo "Line $ln: " . $line . "\n";
for ($i = 0; $i < strlen($line); $i++) {
    printf("%d: %s (0x%02X)\n", $i, $line[$i], ord($line[$i]));
    if ($i > 300) break;
}
