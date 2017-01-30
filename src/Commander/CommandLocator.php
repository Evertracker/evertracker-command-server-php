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

use Commander\Commands\CommandInterface;

/**
 * Class CommandLocator
 * Finds all concrete command objects that implement CommandInterface.
 *
 * @package Commander
 */
class CommandLocator
{
    /**
     * Locate all commands and return an array of fully qualified names or CommandInterfaces
     *
     * @return CommandInterface[]
     */
    public function locate()
    {
        // todo: implement locate() as a class locator

        return [];
    }
}
