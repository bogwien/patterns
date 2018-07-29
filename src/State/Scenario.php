<?php

namespace Patterns\State;

use Patterns\Core\IScenario;

/**
 * Class Scenario
 * @package Patterns\State
 */
class Scenario implements IScenario
{
    public function run()
    {
        echo 'Bot: ';
        $bot = new BotManager();
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_START);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_HELLO);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_ACTIONS);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_ACTION_PRODUCT_LIST);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_ACTION_BUY);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_THANK);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;

        echo 'Bot: ';
        $bot->setState(BotStateDictionary::STATE_STOP);
        echo $bot->getAnswer(), PHP_EOL, PHP_EOL;
    }
}
