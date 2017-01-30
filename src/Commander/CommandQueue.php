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
 * Class CommandQueue
 * @package Commander
 */
class CommandQueue
{
    /**
     * Push the given command in the queue.
     *
     * @param CommandInterface $command
     */
    public function push(CommandInterface $command)
    {
        // todo: implement queue push()
    }

    /**
     * Popup a number of commands out of the queue.
     *
     * @param int  $count
     * @param bool $delete
     */
    public function pop($count = 1, $delete = false)
    {
        // todo: implement queue popup()
    }
}
