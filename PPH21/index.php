<?php

require __DIR__.'/src/CalculatorInterface.php';
require __DIR__.'/src/AbstractCalculator.php';
require __DIR__.'/src/FirstRuleCalculator.php';
require __DIR__.'/src/SecondRuleCalculator.php';
require __DIR__.'/src/ThirdRuleCalculator.php';
require __DIR__.'/src/FourthRuleCalculator.php';
require __DIR__.'/src/PPH21Calculator.php';

use TaufanOOP\PPH21\FirstRuleCalculator;
use TaufanOOP\PPH21\FourthRuleCalculator;
use TaufanOOP\PPH21\PPH21Calculator;
use TaufanOOP\PPH21\SecondRuleCalculator;
use TaufanOOP\PPH21\ThirdRuleCalculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calculator->calculate(25000000);
echo PHP_EOL;
echo $calculator->calculate(30000000);
echo PHP_EOL;
echo $calculator->calculate(45000000);
echo PHP_EOL;
echo $calculator->calculate(50000000);
echo PHP_EOL;
echo $calculator->calculate(60000000);
echo PHP_EOL;
echo $calculator->calculate(75000000);
echo PHP_EOL;
echo $calculator->calculate(250000000);
echo PHP_EOL;
echo $calculator->calculate(300000000);
echo PHP_EOL;
echo $calculator->calculate(450000000);
echo PHP_EOL;
echo $calculator->calculate(750000000);
echo PHP_EOL;