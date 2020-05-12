<?php

require __DIR__.'/PPH21Calculator.php';

$pph21 = new PPH21Calculator();

//1250000
echo $pph21->calculate(25000000);
echo PHP_EOL;
//1500000
echo $pph21->calculate(30000000);
echo PHP_EOL;
//2250000
echo $pph21->calculate(45000000);
echo PHP_EOL;
//2500000
echo $pph21->calculate(50000000);
echo PHP_EOL;
//4000000
echo $pph21->calculate(60000000);
echo PHP_EOL;
//6250000
echo $pph21->calculate(75000000);
echo PHP_EOL;
//32500000
echo $pph21->calculate(250000000);
echo PHP_EOL;
//45000000
echo $pph21->calculate(300000000);
echo PHP_EOL;
//82500000
echo $pph21->calculate(450000000);
echo PHP_EOL;
//170000000
echo $pph21->calculate(750000000);
echo PHP_EOL;