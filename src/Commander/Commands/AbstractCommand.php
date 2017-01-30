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

use Commander\CommandQueue;
use Commander\CommandRegistry;
use Exception;

/**
 * Class AbstractCommand
 * @package Commander\Commands
 */
abstract class AbstractCommand implements CommandInterface
{
    /**
     * @var CommandRegistry
     */
    private $registry;

    /**
     * @var CommandQueue
     */
    private $queue;

    /**
     * Get the command type id.
     *
     * @return mixed
     */
    abstract public function getCommandType();

    /**
     * AbstractCommand constructor.
     *
     * @param CommandRegistry $registry
     * @param CommandQueue    $queue
     */
    public function __construct(CommandRegistry $registry, CommandQueue $queue)
    {
        $this->registry = $registry;
        $this->queue = $queue;
    }

    /**
     * {@inheritdoc}
     */
    final public function register()
    {
        $this->getRegistry()->register($this->getCommandType(), $this);
    }

    /**
     * Execute the command implementation.
     *
     * @return bool
     *
     * @throws Exception
     */
    public function execute()
    {
        // TODO: Implement execute() method.

        return true;
    }

    /**
     * @return CommandRegistry
     */
    public function getRegistry(): CommandRegistry
    {
        return $this->registry;
    }

    /**
     * @return CommandQueue
     */
    public function getQueue(): CommandQueue
    {
        return $this->queue;
    }
}
