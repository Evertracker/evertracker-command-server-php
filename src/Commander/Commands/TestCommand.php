<?php

/*
 * This file is part of the Commander package.
 *
 * (c) Evertracker GmbH <developers@evertracker.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Commander\Commands;

/**
 * Class TestCommand
 * @package Commander\Commands
 */
class TestCommand extends AbstractCommand
{
    const COMMAND_TYPE_ID = 1;

    /**
     * Get the command type id.
     *
     * @return mixed
     */
    public function getCommandType()
    {
        return self::COMMAND_TYPE_ID;
    }
}
