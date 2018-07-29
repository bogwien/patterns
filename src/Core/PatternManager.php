<?php

namespace Patterns\Core;

/**
 * Class PatternManager
 * @package Patterns\Core
 */
class PatternManager
{
    /**
     * @var int
     */
    protected $pattern;

    /**
     * @var PatternDictionary
     */
    protected $dictionary;

    /**
     * PatternManager constructor.
     * @param int $pattern
     */
    public function __construct($pattern)
    {
        $this->pattern = $pattern;
        $this->dictionary = new PatternDictionary();
    }

    /**
     * Start scenario execution
     *
     * @return void
     */
    public function run()
    {
        $this->dictionary->getPatternScenario($this->pattern)->run();
    }
}
