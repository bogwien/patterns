<?php
/**
 * Run cmd from project root: php -S localhost:8000
 */

use Patterns\Core\PatternDictionary;
use Patterns\Core\PatternManager;

ini_set('display_errors',1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

$manager = new PatternManager(PatternDictionary::DI);
$manager->run();
