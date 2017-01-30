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

use Exception;

/**
 * Interface CommandInterface
 * @package Commander\Commands
 */
interface CommandInterface
{
    /**
     * Register the command to the registry
     */
    public function register();

    /**
     * Execute the command implementation.
     *
     * @return bool
     *
     * @throws Exception
     */
    public function execute();

    /**
     * Get the command type id.
     *
     * @return mixed
     */
    public function getCommandType();
}
