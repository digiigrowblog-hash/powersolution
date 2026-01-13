<?php
$f = 'd:/powersolution/data/data.php';
$code = file_get_contents($f);
$tokens = token_get_all($code);
$line = 1239;
$curLine = 1;
$idx = null;
for ($i = 0; $i < count($tokens); $i++) {
    $tok = $tokens[$i];
    $text = is_array($tok) ? $tok[1] : $tok;
    $lines = substr_count($text, "\n");
    if ($curLine + $lines >= $line) { $idx = $i; break; }
    $curLine += $lines;
}
$start = max(0, $idx - 20);
$end = min(count($tokens)-1, $idx + 20);
for ($i = $start; $i <= $end; $i++) {
    $tok = $tokens[$i];
    $text = is_array($tok) ? $tok[1] : $tok;
    $type = is_array($tok) ? token_name($tok[0]) : 'CHAR';
    echo "[$i] ($type) => ";
    echo str_replace("\n", "\\n", $text) . "\n";
}
