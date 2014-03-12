<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\EventDispatcher\Event;

use Behat\Testwork\Environment\Environment;
use Behat\Testwork\Specification\SpecificationIterator;
use Behat\Testwork\Tester\Setup\Setup;

/**
 * Testwork before suite tested event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class BeforeSuiteTested extends SuiteTested implements BeforeTested
{
    /**
     * @var SpecificationIterator
     */
    private $iterator;
    /**
     * @var Setup
     */
    private $setup;

    /**
     * Initializes event.
     *
     * @param Environment                        $env
     * @param SpecificationIterator              $iterator
     * @param Setup $setup
     */
    public function __construct(Environment $env, SpecificationIterator $iterator, Setup $setup)
    {
        parent::__construct($env);

        $this->iterator = $iterator;
        $this->setup = $setup;
    }

    /**
     * Returns specification iterator.
     *
     * @return SpecificationIterator
     */
    public function getSpecificationIterator()
    {
        return $this->iterator;
    }

    /**
     * Returns current test setup.
     *
     * @return Setup
     */
    public function getSetup()
    {
        return $this->setup;
    }
}