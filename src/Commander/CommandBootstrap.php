<?php

/*
 * This file is part of the Commander package.
 *
 * (c) Evertracker GmbH <developers@evertracker.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Commander;

/**
 * Class CommandBootstrap
 * Responsible for bootstrapping the command structure.
 *
 * @package Commander
 */
class CommandBootstrap
{
    /**
     * @var CommandLocator
     */
    private $locator;

    /**
     * CommandBootstrap constructor.
     *
     * @param CommandLocator $locator
     */
    public function __construct(CommandLocator $locator)
    {
        $this->locator = $locator;
    }

    /**
     * Locate all commands and return an array of fully qualified names
     */
    public function bootstrap()
    {
        $commands = $this->locator->locate();
        foreach ($commands as $command) {
            $command->register();
        }
    }
}
