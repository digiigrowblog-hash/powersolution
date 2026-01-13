<?php
$f = 'd:/powersolution/data/data.php';
$lines = file($f);
$lo = 1; $hi = count($lines);
$validUpTo = 0;
while ($lo <= $hi) {
    $mid = intval(($lo + $hi) / 2);
    $part = implode('', array_slice($lines, 0, $mid));
    // extract array portion
    $pos = strpos($part, '$data =');
    if ($pos === false) { break; }
    $start = strpos($part, '[', $pos);
    $test = "<?php\n\$x = " . substr($part, $start) . ";\n?>";
    file_put_contents('d:/powersolution/tools/test_part.php', $test);
    exec('php -l d:/powersolution/tools/test_part.php 2>&1', $out, $ret);
    $out = implode("\n", $out);
    if ($ret === 0) { $validUpTo = $mid; $lo = $mid + 1; } else { $hi = $mid - 1; }
}
echo "Valid up to line: $validUpTo of ".count($lines)."\n";
echo "Error at next line: " . ($validUpTo + 1) . "\n";