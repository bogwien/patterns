<?php

namespace Patterns\DI;

use InvalidArgumentException;
use stdClass;

class RealDI
{
    /**
     * @var \stdClass
     */
    protected $dependency;

    /**
     * RealDI constructor.
     * @param stdClass $dependency
     */
    public function __construct(stdClass $dependency = null)
    {
        $this->dependency = $dependency;
    }

    /**
     * @param mixed $dependency
     */
    public function setDependency(stdClass $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * @return string
     */
    public function run()
    {
        if (!$this->dependency) {
            throw new InvalidArgumentException(self::class . '::$dependency must be not null.');
        }

        return $this->dependency->data;
    }
}
