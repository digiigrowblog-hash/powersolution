<?php
$f = 'd:/powersolution/data/data.php';
$lines = file($f);
$balance = 0;
$start = 1190; $end = 1245;
foreach ($lines as $i => $l) {
    $ln = $i + 1;
    if ($ln < $start) {
        $balance += substr_count($l, '[') - substr_count($l, ']');
        continue;
    }
    if ($ln > $end) break;
    $balance += substr_count($l, '[') - substr_count($l, ']');
    echo "Line $ln balance=$balance: " . trim($l) . "\n";
}
echo 'Final balance: ' . $balance . "\n";