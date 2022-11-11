<?php
$array = [[101, 200], [102, 201, '', '', 5], [104, 203], [105, 205], [106, 300]];
$array1[2][5] = [1, 2, 5];
echo $array1[2][5];
$total1 = 0;
$total2 = 0;
$total3 = 0;
echo "Git測試";
echo "Git測試2";
echo "Git測試3";
echo "Git測試3-1";
echo "Git測試4";
echo "Git測試4-1";
echo "devdevdevdevdev";
echo "bugfixbugfix";
echo "bugfixbug%%";
for ($i = 0; $i < count($array); $i++) {
    $total1 = $total1 + $array[$i][0];
    $total2 = $total2 + $array[$i][1];
    for ($j = 0; $j < 2; $j++) {
        $total3 = $total3 + $array[$i][$j];
    }
}
echo '小計' . $total1 . '<br>小計' . $total2 . '<br>總計' . $total3;