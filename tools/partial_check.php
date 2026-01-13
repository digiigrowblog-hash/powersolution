<?php
$f = 'd:/powersolution/data/data.php';
$lines = file($f);
$n = 1238; // up to this line
$part = implode('', array_slice($lines, 0, $n));
// find the position of $data = in the original file and extract from the array bracket
$pos = strpos($part, '$data =');
if ($pos !== false) {
    // find the first '[' after $data =
    $start = strpos($part, '[', $pos);
    $arrPart = substr($part, $start);
    $test = "<?php\n\$x = " . $arrPart . ";\n?>";
    file_put_contents('d:/powersolution/tools/part.php', $test);
    echo "Wrote part.php starting from $start\n";
} else {
    echo "Could not find $data =\n";
}